<?php
Class Dashboard Extends MY_Controller{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('hotel_api/Dashboard_model');
        
        //date_default_timezone_set("Asia/Kolkata");
        //date_default_timezone_get();		
	}
	public function index()
	{	
        $data['active_dashboard'] = 'active';
		$data['title'] = 'Dashboard';	
		// $data['active_doctor']=$this->Dashboard_model->get_all_active_doctors();
		// $data['inactive_doctor']=$this->Dashboard_model->get_all_deactive_doctors();
		// $data['active_patient']=$this->Dashboard_model->get_all_active_patients();	
		// $data['inactive_patient']=$this->Dashboard_model->get_all_deactive_patients();

         
    
   // print_r($data['main_role']);exit();
  	$data['main_content'] = 'hotel/Dashboard_view';
    $this->load->view('hotel/includes/template', $data);			
	}


	public function Dashboard_view()
	{	
        $data['active_dashboard'] = 'active';
		$data['title'] = 'Dashboard';	
		// $data['active_doctor']=$this->Dashboard_model->get_all_active_doctors();
		// $data['inactive_doctor']=$this->Dashboard_model->get_all_deactive_doctors();
		// $data['active_patient']=$this->Dashboard_model->get_all_active_patients();	
		// $data['inactive_patient']=$this->Dashboard_model->get_all_deactive_patients();

         
    
   // print_r($data['main_role']);exit();
	$data['main_content'] = 'hotel/Dashboard_view';
    $this->load->view('hotel/includes/template', $data);			
	}

	
	public function backup_restore()
	{
		$data['active_backup_restore'] = 'active';
		$data['title'] = 'Backup ';
		$data['header_title'] = 'Backup';
		//print_r($data['package_info']);exit();
		$data['main_content'] = 'hotel/bkmysql';
        $this->load->view('hotel/includes/template', $data);
	}
	
	
	public function misc_data_master()
	{
		$data['active_misc_data_master'] = 'active';
		$data['title'] = 'Misc. Data ';
		$data['header_title'] = 'Misc. Data';
		//print_r($data['package_info']);exit();
		$data['main_content'] = 'hotel/misc_data_master';
        $this->load->view('hotel/includes/template', $data);
	}
		
	public function professional_engagement()
	{
		$data['active_professional_engagement'] = 'active';
		$data['title'] = 'Professional Engagement';
		$data['header_title'] = 'Professional Engagement';
		//print_r($data['package_info']);exit();
		$data['main_content'] = 'hotel/professional_engagement';
        $this->load->view('hotel/includes/template', $data);
	}
	
	public function receivable_report()
	{
		$data['active_receivable_report'] = 'active';
		$data['title'] = 'Receivable Report';
		$data['header_title'] = 'Receivable Report';
		//print_r($data['package_info']);exit();
		$data['main_content'] = 'hotel/receivable_report';
        $this->load->view('hotel/includes/template', $data);
	}
		
	public function NACH_report()
	{
		$data['active_NACH_report'] = 'active';
		$data['title'] = 'NACH Report';
		$data['header_title'] = 'NACH Report';
		//print_r($data['package_info']);exit();
		$data['main_content'] = 'hotel/NACH_report';
        $this->load->view('hotel/includes/template', $data);
	}
	



}?>