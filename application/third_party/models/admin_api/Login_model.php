<?php
class Login_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	function validate_user()
	{		
		$password = do_hash($this->input->post('password'));
		$email = $this->input->post('email');
		//print_r($password);exit();
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',$password);
		//$this->db->where('status','active');		
		$q=$this->db->get('agent');
		//print_r($q);exit();
		if($q->num_rows()>0)
		{
			$data=array(
				'id'=>$q->row('agent_id'),
				//'patient_id'=>$q->row('patient_id'),
				'email'=>$q->row('email'),
				'role'=>$q->row('role'),
				'name'=>$q->row('firstname').' '.$q->row('lastname'),				
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data);

			return true;
		}else{
			return false;
		}
	}
}?>