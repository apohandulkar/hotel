<?php
Class Kitchen Extends MY_Controller{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('hotel_api/kitchen_model');
        
        //date_default_timezone_set("Asia/Kolkata");
        //date_default_timezone_get();		
	}
	
	public function index()
	{	
        $data['active_kitchen'] = 'active';
		$data['title'] = 'kitchen Management';	
		$data['kitchen'] = $this->kitchen_model->get_kitchen_list();
		$data['main_content'] = 'hotel/kitchen/kitchen_list';
		$this->load->view('hotel/includes/template', $data);			
	}
	
	public function Add_kitchen()
	{	
        $data['active_Add_kitchen'] = 'active';
		$data['title'] = 'Kitchen Register';	
		$data['main_content'] = 'hotel/kitchen/add_new_kitchen';
		$this->load->view('hotel/includes/template', $data);			
	}

	
	public function save_kitchen()
	{
		$post_data = $this->input->post();
			$query=$this->kitchen_model->save_kitchen($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Kitchen Added successfully!');
				redirect('hotel/Kitchen','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Kitchen!');
				redirect('hotel/Kitchen','refresh');
			}
	}	



	public function Edit_kitchen($id)
	{	
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Edit_kitchen'] = 'active';
		$data['title'] = 'Update kitchen';	
		$data['waiter'] = $this->kitchen_model->get_kitchen_details($id);
		$data['main_content'] = 'hotel/kitchen/edit_new_kitchen';
		$this->load->view('hotel/includes/template', $data);			
	}
	
	public function update_kitchen()
	{
		$post_data = $this->input->post();
		
			$query=$this->kitchen_model->update_kitchen($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Kitchen Update successfully!');
				redirect('hotel/Kitchen','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Kitchen!');
				redirect('hotel/Kitchen','refresh');
			}
	}
	public function Delete_kitchen($id)
	{	
        $query=$this->kitchen_model->Delete_kitchen($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Kitchen Delete successfully!');
				redirect('hotel/Kitchen','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Kitchen!');
				redirect('hotel/Kitchen','refresh');
			}	
	}
	

	
}?>