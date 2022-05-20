<?php
class Login_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	function validate_user()
	{		
		$password = $this->input->post('password');
		$user = $this->input->post('user');
		$this->db->where('user',$this->input->post('user'));
		$this->db->where('password',$password);
		
			$this->db->where('status','active');
			$this->db->where('IsActive','0');		
			$q=$this->db->get('superadmin_login');
			if($q->num_rows()>0)
			{
			$data=array(
				'id'=>$q->row('id'),
				'user'=>$q->row('user'),
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
				'role'=>'superadmin',
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