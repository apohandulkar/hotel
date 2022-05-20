<?php
Class Waiter Extends MY_Controller{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('hotel_api/Waiter_model');
        
        //date_default_timezone_set("Asia/Kolkata");
        //date_default_timezone_get();		
	}
	
	public function index()
	{	
        $data['active_Waiter'] = 'active';
		$data['title'] = 'Waiter Management';	
		$data['waiter'] = $this->Waiter_model->get_waiter_list();
		$data['main_content'] = 'hotel/waiter/waiter_list';
		$this->load->view('hotel/includes/template', $data);			
	}
	
	public function Add_hotel()
	{	
        $data['active_Add_hotel'] = 'active';
		$data['title'] = 'Waiter Register';	
		$data['main_content'] = 'hotel/waiter/add_new_waiter';
		$this->load->view('hotel/includes/template', $data);			
	}

	
	public function save_waiter()
	{
		$post_data = $this->input->post();
			$query=$this->Waiter_model->save_waiter($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Waiter Added successfully!');
				redirect('hotel/Waiter','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Waiter!');
				redirect('hotel/Waiter','refresh');
			}
	}	



	public function Edit_waiter($id)
	{	
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Edit_waiter'] = 'active';
		$data['title'] = 'Update Waiter';	
		$data['waiter'] = $this->Waiter_model->get_waiter_details($id);
		$data['main_content'] = 'hotel/waiter/edit_new_waiter';
		$this->load->view('hotel/includes/template', $data);			
	}
	
	public function update_waiter()
	{
		$post_data = $this->input->post();
		
			$query=$this->Waiter_model->update_waiter($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Waiter Update successfully!');
				redirect('hotel/Waiter','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Waiter!');
				redirect('hotel/Waiter','refresh');
			}
	}
	public function Delete_waiter($id)
	{	
        $query=$this->Waiter_model->Delete_waiter($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Waiter Delete successfully!');
				redirect('hotel/Waiter','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Waiter!');
				redirect('hotel/Waiter','refresh');
			}	
	}
	

	
}?>