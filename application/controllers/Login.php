<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login Extends CI_Controller{

	function __construct()
	{
		parent::__construct();	
		$this->config->load('my_constants');		
        $this->load->helper('security');
		$this->load->model('Login_model');
		//$this->config->load('my_constants');			
	}

	public function index()
	{
		$logged_in=$this->session->userdata('logged_in');
		$role=$this->session->userdata('role');
		if (!empty($logged_in)) {
				redirect('Home');
	 	}else{		
		    $data['title'] = 'Login';
			
			 $this->load->view('Login_view',$data);
			
		}
		
	}

	public function validate_user()
	{
		//$login_data = $this->config->item('login_data');
		if($q=$this->Login_model->validate_user()){
			$role=$this->session->userdata('role');
			$company_no=$this->session->userdata('id');$fin_year=$this->session->userdata('fin_year');$cuurent_fin_year=$this->session->userdata('cuurent_fin_year');$sr_no=$this->session->userdata('sr_no');
		$fin_year=$this->session->userdata('fin_year');$cuurent_fin_year=$this->session->userdata('cuurent_fin_year');$sr_no=$this->session->userdata('sr_no');

			 redirect('admin/Dashboard');

		}else{
			$this->session->set_flashdata('login_failure','Username Or Password Incorrect.');
			redirect('login/index','refresh');
		}
	}
	
	public function Create_company()
	{
		$data['active_company'] = 'open';
		$data['title'] = 'Create company';
		$data['header_title'] = 'Create company';
//		$data['company_info'] = $this->Login_model->get_JE_list();
		//print_r($data['package_info']);exit();
	//	$data['main_content'] = 'Login_view';
        $this->load->view('Create_company_view', $data);
	}
	
	 public function myformAjax1($id) { 
       $result = $this->db->where("GSTIN_NO",$id)->get("admin_login")->result();
       echo json_encode($result);
   }

   
   public function save_company() 
	{ 
   		$post_data = $this->input->post();
	  $query=$this->Login_model->save_company($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Company Created successfully!');

				redirect('Login/index','refresh');
			//	redirect('agent/Dashboard','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to create company!');
				redirect('Login/index','refresh');
			}
   }

}?>