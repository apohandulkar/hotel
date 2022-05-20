<?php
class Login_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	function validate_user()
	{		
		// $password = do_hash($this->input->post('password'));
		$password = $this->input->post('password');
		$fin_year = $this->input->post('fin_year');
		
		$user = $this->input->post('user');
		$company_name = $this->input->post('sub_cat_3');
		
		//print_r($password);exit();
		$this->db->where('user',$this->input->post('user'));
		$this->db->where('password',$password);
		$this->db->where('company_no',$company_name);
		$this->db->where('status','active');
		$this->db->where('IsActive','0');		
		$q1=$this->db->get('user');
	//	print_r($q);exit();
		$user_id=$q1->row('id');
		if($q1->num_rows()>0)
		{
			$this->db->where('id',$company_name);
			$this->db->where('status','active');
			$this->db->where('IsActive','0');		
			$q=$this->db->get('admin_login');
			if($q->num_rows()>0)
			{
				$this->db->where('user_id',$user_id);
				$q2=$this->db->get('user_role');
			
			
				if (date('m') <= 3) {
					//Upto June 2014-2015
					$financial_year = (date('Y')-1) . '-' . date('Y');
				}
				else {
					//After June 2015-2016
					$financial_year = date('Y') . '-' . (date('Y') + 1);
				}
		/* 	echo $financial_year;
			exit; */
			
			
			$sql2="select * from serial_no_fy_wise";
			$q21 = $this->db->query($sql2);
			$sr_no=$q21->row('sr_no');
			$fy_year=$q21->row('fy_year');
			
				if (date('m') <= 3) {
					//Upto June 2014-2015
					$year = date('Y');
				}
				else {
					//After June 2015-2016
					$year = (date('Y') + 1);
				}
			
			if($fy_year == $year)
			{
				$sr_no=$q21->row('sr_no');
			//	echo $sr_no;
			}
			else
			{
				$diff=$year - $fy_year;
				$sr_no1=1000 * $diff;
				$sr_no=$sr_no+$sr_no1;
				
			} 
			
			$data=array(
				'id'=>$q->row('id'),
				'user'=>$q->row('user'),
				'company_name'=>$q->row('company_name'),
				'address'=>$q->row('address'),
				'logo'=>$q->row('logo'),
				'GSTIN_NO'=>$q->row('GSTIN_NO'),
				'Account_no'=>$q->row('Account_no'),
				'ifsc'=>$q->row('ifsc'),
				'bank_name'=>$q->row('bank_name'),
				'bank_branch'=>$q->row('bank_branch'),
				'email'=>$q->row('email'),
				'mobile'=>$q->row('mobile'),
				'landline'=>$q->row('landline'),
				'owner'=>$q->row('owner'),
				'sign'=>$q->row('sign'),
				'role'=>$q1->row('role'),
				'user_role'=>$q2->result_array(),
				'fin_year'=>$fin_year,
				'cuurent_fin_year'=>$financial_year,
				'sr_no'=>$sr_no,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data);
			return true;
			}
			else
			{
			return false;
			}
			
		}else{
			return false;
		}
	}

	function save_company($post_data)
	{		
	
		$user=$post_data['user'];
		$company_name=$post_data['company_name'];
		$address=$post_data['address'];
		$password=$post_data['password'];
		$email=$post_data['email'];
		$mobile=$post_data['mobile'];
		$landline=$post_data['landline'];
		$GSTIN_NO=$post_data['GSTIN_NO'];
			

		$array_client=array('user'=>$user, 'company_name'=>$company_name,
		 'address'=>$address,'password'=>$password,'email'=>$email,'mobile'=>$mobile,'landline'=>$landline,'GSTIN_NO'=>$GSTIN_NO);
	 	$in=$this->db->insert('admin_login',$array_client);
		if($in)
		{
				$company_no=$this->db->insert_id();
				$user=$user;
				$password=$password;
				$role='admin';
				$data=array('user'=>$user,'password'=>$password,'role'=>$role,'company_no'=>$company_no);
				$in1=$this->db->insert('user',$data);
				if($in1)
				{
				$user_id = $this->db->insert_id();
		
				$query_values2 = array();
				
				for($i=1; $i<=13; $i++)
				{
				$db = get_instance()->db->conn_id;
				$data1=array('role'=>$i,'user_id'=>$user_id);
				$this->db->insert('user_role',$data1);
				}
				return TRUE;
				}
		}
		
	}
}?>