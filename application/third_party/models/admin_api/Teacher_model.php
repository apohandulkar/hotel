<?php
class Teacher_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}

	public function save_teacher($post_data,$p_logo)
	{		
		$post_data['role'] = 'teacher';
		$post_data['profile_picture'] = $p_logo;
		//print_r($post_data);exit(); 
		// $data = array(	
		// 			'firstname' => $this->input->post('firstname'),	
		// 			'lastname' => $this->input->post('lastname'),					
		// 			'email' => $this->input->post('email'),
		// 			'dob' => $this->input->post('dob'),
  //           		'email' => $this->input->post('email'),
  //           		'mobile' => $this->input->post('mobile'),            		
  //           		'address' => $this->input->post('address'),
  //           		'designation' => $this->input->post('designation'),
  //           		'role' => 'doctor',
  //           		'created_by' => $this->session->userdata('id')
		// 	        );

		return $this->db->insert('teacher',$post_data);
	}

	public function get_teachers($record_per_page,$searchtext, $column_name, $order_by,$pageno)
	{	//$searchtext, $column_name, $order_by
		$offset = ($pageno - 1) * $record_per_page;
        if($searchtext != 'nosearch' && $searchtext !='' ){

            $condition = "AND (CONCAT(`firstname`,' ',`lastname`) like '%$searchtext%' OR email like '%$searchtext%' OR address_1 like '%$searchtext%' OR address_2 like '%$searchtext%' OR city like '%$searchtext%' OR zipcode like '%$searchtext%' OR country_code like '%$searchtext%' OR phone_no like '%$searchtext%')";
        } else {
            $condition ="";
        }
        if($order_by){
        	if ($column_name == "name") {
        		$sort = "order by (CONCAT(`firstname`,' ',`lastname`)) $order_by";
        	}else{
            	$sort = "order by $column_name $order_by";
            }	
        } else {
            $sort = "";
        }

        $sql = "SELECT * FROM teacher WHERE role = 'teacher' $condition $sort LIMIT " . $offset . "," . $record_per_page ;
       // $sql = "SELECT * FROM teacher WHERE role = 'teacher' LIMIT " . $offset . "," . $record_per_page ;
        $record = $this->db->query($sql);
        if ($record->num_rows() > 0)
        {
			foreach($record->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}

		
	}


	/* get count of teachers */
	public function get_all_teachers_count(){

		return $this->db->count_all("teacher");
	}











	public function get_all_active_users()
	{
		$user_id = $this->session->userdata('id');
		//$this->db->where_not_in('user_id',$user_id);
		$this->db->from('users');
		$this->db->where("users.role","doctor");					
		$this->db->where("users.status","active");				
		$q=$this->db->get();
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
	}

	public function get_all_inactive_users()
	{
		$user_id = $this->session->userdata('id');
		$this->db->where_not_in('user_id',$user_id);
		$this->db->from('users');				
		$this->db->where("users.status","inactive");
		$q=$this->db->get();
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
	}

	public function get_all_users_with_role_retailers()
	{
		$user_id = $this->session->userdata('id');
		$this->db->where_not_in('user_id',$user_id);
		$this->db->where('role','retailer');
		$q = $this->db->get('users');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
	}

	public function get_all_active_users_with_role_retailers()
	{
		$user_id = $this->session->userdata('id');
		$this->db->where_not_in('user_id',$user_id);
		$this->db->where('role','retailer');
		$this->db->where('status','active');
		$q = $this->db->get('users');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
	}	

	public function get_all_inactive_users_with_role_retailers()
	{
		$user_id = $this->session->userdata('id');
		$this->db->where_not_in('user_id',$user_id);
		$this->db->where('role','retailer');
		$this->db->where('status','inactive');
		$q = $this->db->get('users');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
	}

	
	public function change_status($user_id)
	{		
		$this->db->select('status');
		$this->db->where('user_id',$user_id);
		$q=$this->db->get('users');
		$status=$q->row('status');

		if ($status=='active') {
			$data = array('status' => 'inactive');
		}else{
			$data = array('status' => 'active');
		}

		$this->db->where('user_id',$user_id);
		$this->db->update('users',$data);
		return $data;
	}

	public function get_user_profile($user_id)
	{
		$this->db->where('user_id',$user_id);
		$q=$this->db->get('users');
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
	}

	public function get_username($user_id)
	{
		$this->db->select('username');
		$this->db->where("user_id",$user_id);
	   	$q=$this->db->get('users');
	   	$username=$q->row('username');
	   	return $username;	
	}

	public function update_user($user_id)
	{
        $password = $this->input->post('password');
		$this->db->select('password');
		$this->db->where('user_id',$user_id);
		$q=	$this->db->get('users');
		$hash_password=$q->row('password');
		if (!empty($password)) {
		$this->load->library('encrypt');
		$password = $this->encrypt->sha1($this->input->post('password'));
		}else{
		$password = $hash_password;	
		}

		$data = array(
					'first_name' => $this->input->post('first_name'),	
					'last_name' => $this->input->post('last_name'),					
					'username' => $this->input->post('username'),
					'password' => $password ,
            		'email' => $this->input->post('email'),
            		'mobile' => $this->input->post('mobile'),
            		'address' => $this->input->post('address'),    
            		'designation' => $this->input->post('designation'),         		
            		'role' => 'doctor'        		
			        );
		//print_r($data);exit();
		$this->db->where('user_id',$user_id);
		return $this->db->update('users',$data);
	}

	public function get_parent_id($user_id)
	{
		$this->db->select('parent_id');
		$this->db->where("user_id",$user_id);
	   	$q=$this->db->get('users');
	   	$parent_id=$q->row('parent_id');
	   	//print_r($parent_id);exit();
	   	return $parent_id;
	}

	 public function delete_user($user_id)
    {
    	$this->db->where('user_id',$user_id);
    	$this->db->delete('users');
    	
    	return true;
    }


public function get_all_active_users_agent()
	{
		//$user_id = $this->session->userdata('id');
		//$this->db->where_not_in('user_id',$user_id);
		$sql='SELECT user_id,first_name,last_name from users WHERE users.role="doctor" OR users.role="patient" OR users.role="agent" AND users.status="active" ';
						
		$q=$this->db->query($sql);
		
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[]=$row;
			}
			return $data;  
		}
	}


}?>
