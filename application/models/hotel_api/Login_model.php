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
		
		$password = $this->input->post('password');
		$user = $this->input->post('user');
		$this->db->where('usename',$this->input->post('user'));
		$this->db->where('password',$password);
		$this->db->where('status','Active');
		$this->db->where('expired_date > ' ,$date);
		$this->db->where('IsActive','0');		
		$q=$this->db->get('hotel');
			if($q->num_rows()>0)
			{
			$data=array(
				'hotel_id'=>$q->row('id'),
				'name'=>$q->row('name'),
				'address'=>$q->row('address'),
				'logo'=>$q->row('logo'),
				'gstno'=>$q->row('gstno'),
				'opning_hr'=>$q->row('opning_hr'),
				'closing_hr'=>$q->row('closing_hr'),
				'expired_date'=>$q->row('expired_date'),
				'role'=>'hotel',
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