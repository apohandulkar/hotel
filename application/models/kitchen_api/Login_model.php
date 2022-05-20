<?php
class Login_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	function validate_user()
	{		
	date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$company_code = $this->input->post('company_code');
		$password = $this->input->post('password');
		$user = $this->input->post('user');
		$this->db->where('username',$this->input->post('user'));
		$this->db->where('password',$password);
		$this->db->where('hotel_id',$company_code);
		$this->db->where('status','Active');
		$this->db->where('IsActive','0');		
		$q=$this->db->get('kitchen');
			if($q->num_rows()>0)
			{
			$data=array(
				'kitchen_id'=>$q->row('id'),
				'hotel_id'=>$q->row('hotel_id'),
				'name'=>$q->row('name'),
				'address'=>$q->row('address'),
				'mobile'=>$q->row('mobile'),
				'role'=>'kitchen',
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data);
			
			return true;
			}
			else
			{
			return false;
			}
	}
}?>