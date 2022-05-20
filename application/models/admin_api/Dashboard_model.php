<?php
class Dashboard_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}

	function change_user($user_id)
	{
		
		$this->db->where('user_id',$user_id);
		$this->db->where('status','active');
		//$this->db->join('patients', 'patients.username = users.username');	
		//$this->db->join('patients', 'patients.password = users.password');	
		$q=$this->db->get('users');
		
		if($q->num_rows>0)
		{
			$data=array(
				'id'=>$q->row('user_id'),
				//'patient_id'=>$q->row('patient_id'),
				'username'=>$q->row('username'),
				'role'=>$q->row('role'),
				'main_role'=>'agent',
				'name'=>$q->row('first_name').' '.$q->row('last_name'),				
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data);
     
			$role = $q->row('role');
			if ($role == 'patient') {
				$data1=array(				
				'patient_id'=>$q->row('patient_id')				
				);
			}else{
				$data1=array(				
				'patient_id'=>''			
				);
			}
			
			$this->session->set_userdata($data1);
			//print_r($this->session->userdata('patient_id'));exit();
			return true;
		}else{
			return false;
		}
	}

	public function get_hosting_list()
	{	
        $sql = "SELECT * FROM hosting where IsActive=0";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function get_domain_list()
	{	
        $sql = "SELECT * FROM website where IsActive=0 and status='Active'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function get_SslCertificate_list()
	{	
		$company_no=$this->session->userdata('id');
        $sql = "SELECT * FROM sslcertificate where IsActive=0";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	public function get_Online_Software_list()
	{	
		$company_no=$this->session->userdata('id');
        $sql = "SELECT * FROM software where IsActive=0 and type='online'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	

}?>