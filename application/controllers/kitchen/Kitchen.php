<?php
Class Kitchen Extends MY_Controller{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('kitchen_api/Kitchen_model');
        
        //date_default_timezone_set("Asia/Kolkata");
        //date_default_timezone_get();		
	}
	
	public function Edit_kitchen()
	{	
		$id=$this->session->userdata('kitchen_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Update Profile Details';	
		$data['kitchen'] = $this->Kitchen_model->get_kitchen_details($id);
		$data['main_content'] = 'kitchen/edit_new_kitchen';
		$this->load->view('kitchen/includes/template', $data);			
	}
	
	public function update_kitchen()
	{
		$post_data = $this->input->post();
		
			$query=$this->Kitchen_model->update_kitchen($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'kitchen Update successfully!');
				redirect('kitchen/kitchen/Edit_kitchen','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update kitchen!');
				redirect('kitchen/kitchen/Edit_kitchen','refresh');
			}
	}
	
	
	
	public function order()
	{	
		$id=$this->session->userdata('kitchen_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Order Details';	
		$data['order_list'] = $this->Kitchen_model->get_order_list();
		$data['main_content'] = 'kitchen/order';
		$this->load->view('kitchen/includes/template', $data);			
	}
	
		
	public function Edit_order($oid)
	{	
		$id=$this->session->userdata('kitchen_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Order Details';	
		$data['order_details'] = $this->Kitchen_model->get_order_details($oid);
		$data['main_content'] = 'kitchen/edit_order';
		$this->load->view('kitchen/includes/template', $data);			
	}
	
	
	public function update_order()
	{
		$post_data = $this->input->post();
		
			$query=$this->Kitchen_model->update_order($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Order Update successfully!');
				redirect('kitchen/kitchen/order','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to update order!');
				redirect('kitchen/kitchen/order','refresh');
			}
	}
	
	
	public function open_order()
	{		
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_kitchen'] = 'active';
		$data['title'] = 'Kitchen';	
		$data['order_list'] = $this->Kitchen_model->get_open_order_list();
		$data['main_content'] = 'kitchen/open_order';
		$this->load->view('kitchen/includes/template', $data);
	}	
	
	public function Order_ready($id11=NULL)
	{
	//	$post_data = $this->input->post();
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Kitchen_model->Order_ready($id11);
			if($query){
				redirect('kitchen/kitchen/Ready','refresh');
			}else{
				redirect('kitchen/kitchen/Ready','refresh');
			}
	}		
		public function Ready()
	{		
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Ready'] = 'active';
		$data['title'] = 'Ready';	
		$data['order_list'] = $this->Kitchen_model->get_ready_order_list();
		$data['main_content'] = 'kitchen/ready';
		$this->load->view('kitchen/includes/template', $data);
	}
	
		public function order_complete($id11=NULL)
	{
	//	$post_data = $this->input->post();
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Kitchen_model->order_complete($id11);
			if($query){
				redirect('kitchen/kitchen/Ready','refresh');
			}else{
				redirect('kitchen/kitchen/Ready','refresh');
			}
	}	
}?>