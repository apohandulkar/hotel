<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login Extends CI_Controller{

	function __construct()
	{
		parent::__construct();	
		$this->config->load('my_constants');		
        $this->load->helper('security');
		$this->load->model('admin_api/Login_model');
		//$this->config->load('my_constants');			
	}

	public function index()
	{
	    
		$logged_in=$this->session->userdata('logged_in');
		$role=$this->session->userdata('role');
		if (!empty($logged_in) && $role=='superadmin') {
				redirect('superadmin/Dashboard');
	 	}else{		
		    $data['title'] = 'Login';
			
			 $this->load->view('superadmin/Login_view',$data);
			
		}
		
	}

	public function validate_user()
	{
	 //   exit;
		//$login_data = $this->config->item('login_data');
		$q=$this->Login_model->validate_user();
		if($q){
			$role=$this->session->userdata('role');
			 redirect('superadmin/Dashboard');
		}else{
			$this->session->set_flashdata('failure_message','Username Or Password Incorrect.');
			redirect('superadmin/login/index','refresh');
		}
	}
 public function myformAjax($id) { 
       $result = $this->db->where("main_cat",$id)->get("fourth_catagory")->result();
       echo json_encode($result);
   }
	
}?>