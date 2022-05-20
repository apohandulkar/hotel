<?php
class Class_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}

	/* Function for get all levels */
	public function get_all_levels()
    {
      $this->db->select('level_id,name');	
      $q = $this->db->get('level');	           
      return $q->result_array();
    }
    /* Function for get all styles */
	public function get_all_styles()
    {
      $this->db->select('style_id,name');	
      $q = $this->db->get('style');
      return $q->result_array();
    }
    /* Function for get all locations */
	public function get_all_teachers()
    {
      $this->db->select('teacher_id,CONCAT(`firstname`," ",`lastname`) as teachername');	
      $q = $this->db->get('teacher');
      return $q->result_array();
    }
    /* Function for get all locations */
	public function get_all_locations()
    {
      $this->db->select('*');	
      $q = $this->db->get('location');
      return $q->result_array();
    }


	public function save_class($post_data)
	{		
		$post_data['status'] = 'upcoming';
		return $this->db->insert('class',$post_data);
	}

	public function get_classes($record_per_page,$searchtext, $column_name, $order_by,$pageno)
	{	//$searchtext, $column_name, $order_by
		$offset = ($pageno - 1) * $record_per_page;
        if($searchtext != 'nosearch' && $searchtext !='' ){

           // $condition = "CONCAT(`firstname`,' ',`lastname`) like '%$searchtext%' OR name2 like '%$searchtext%' OR address_1 like '%$searchtext%' OR address_2 like '%$searchtext%' OR city like '%$searchtext%' OR zipcode like '%$searchtext%' OR date like '%$searchtext%' OR duration like '%$searchtext%' OR state_code like '%$searchtext%')";

	            $keyword = "AND (t.teacher_id LIKE '%$searchtext%' OR t.firstname LIKE '%$searchtext%' OR t.lastname LIKE '%$searchtext%' OR t.email LIKE '%$searchtext%' OR t.city LIKE '%$searchtext%' OR c.date LIKE '%$searchtext%' OR c.start_time LIKE '%$searchtext%'
	                OR c.duration LIKE '%$searchtext%'  OR s.name LIKE '%$searchtext%' OR l.name LIKE '%$searchtext%' OR lc.name1 LIKE '%$searchtext%'
	                OR lc.name2 LIKE '%$searchtext%' OR lc.address_1 LIKE '%$searchtext%' OR lc.address_2 LIKE '%$searchtext%')";
	        
        } else {
            $keyword ="";
        }
        if($order_by){
        	if ($column_name == "teacher") {
        		$sort = "order by (CONCAT(`firstname`,' ',`lastname`)) $order_by";
        	}else{
            	$sort = "order by $column_name $order_by";
            }	

            if ($column_name == "date") {
        		$sort = "order by UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) $order_by";
        	}else{
            	$sort = "order by $column_name $order_by";
            }

        } else {
            $sort = "";
        }

      //  $sql = "SELECT * FROM class WHERE $condition $sort LIMIT " . $offset . "," . $record_per_page ;
       
       	$sql ="SELECT sp.id as student_package_id,p.id as package_id,c.class_id,c.date as class_date,c.start_time,c.duration,c.status,

                t.teacher_id,CONCAT(`firstname`,' ',`lastname`)as teachername,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,

                s.name as class_style,l.name as class_level,lc.name1,lc.name2,lc.address_1,lc.address_2,lc.city,lc.zipcode,lc.capacity,lc.latitude,lc.longitude

                FROM student_package sp,student_classes sc,teacher t,package p,class c ,level l,style s,location lc

                WHERE sp.id = sc.student_package_id  

                AND c.teacher_id = t.teacher_id 
                AND c.location_id = lc.location_id AND c.level_id = l.level_id AND c.style_id = s.style_id

                 $keyword GROUP BY c.class_id $sort LIMIT $offset, $record_per_page";
//echo $sql;exit();
        $record = $this->db->query($sql);
        if ($record->num_rows() > 0)
        {
			// foreach($record->result() as $row)
			// {
			// 	$data[]=$row;
			// }
			// return $data;  
			return $record->result_array();
		}


		
	}


	/* get count of teachers */
	public function get_all_classes_count(){

		return $this->db->count_all("class");
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
