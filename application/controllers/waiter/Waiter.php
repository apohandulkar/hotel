<?php
Class Waiter Extends MY_Controller{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('waiter_api/Waiter_model');
        
        //date_default_timezone_set("Asia/Kolkata");
        //date_default_timezone_get();		
	}
	
	public function Edit_waiter()
	{	
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Update Profile Details';	
		$data['waiter'] = $this->Waiter_model->get_waiter_details($id);
		$data['main_content'] = 'waiter/edit_new_waiter';
		$this->load->view('waiter/includes/template', $data);			
	}
	
	public function update_waiter()
	{
		$post_data = $this->input->post();
		
			$query=$this->Waiter_model->update_waiter($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Waiter Update successfully!');
				redirect('waiter/waiter/Edit_waiter','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Waiter!');
				redirect('waiter/waiter/Edit_waiter','refresh');
			}
	}
	
	
	
	public function order()
	{	
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Order Details';	
		$data['order_list'] = $this->Waiter_model->get_order_list();
		$data['main_content'] = 'waiter/order';
		$this->load->view('waiter/includes/template', $data);			
	}
	
		
	public function Edit_order($oid)
	{	
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Order Details';	
		$data['order_details'] = $this->Waiter_model->get_order_details($oid);
		$data['main_content'] = 'waiter/edit_order';
		$this->load->view('waiter/includes/template', $data);			
	}
	
	
	public function update_order()
	{
		$post_data = $this->input->post();
		
			$query=$this->Waiter_model->update_order($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Order Update successfully!');
				redirect('waiter/waiter/order','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to update order!');
				redirect('waiter/waiter/order','refresh');
			}
	}
		
	public function Takeaway()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Takeaway'] = 'active';
		$data['title'] = 'Takeaway';	
		$data['order_list'] = $this->Waiter_model->get_takeaway_order_list();
		$data['main_content'] = 'waiter/takeaway';
		$this->load->view('waiter/includes/template', $data);
	}	

	public function Table_order()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Takeaway'] = 'active';
		$data['title'] = 'Table Order';	
		$data['order_list'] = $this->Waiter_model->get_table_order_list();
		$data['main_content'] = 'waiter/table_order';
		$this->load->view('waiter/includes/template', $data);
	}
	
	public function cash()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_cash'] = 'active';
		$data['title'] = 'cash';	
		$data['order_list'] = $this->Waiter_model->get_cash_order_list();
		$data['main_content'] = 'waiter/cash';
		$this->load->view('waiter/includes/template', $data);
	}
	
	public function Deliver()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Deliver'] = 'active';
		$data['title'] = 'Deliver';	
		$data['order_list'] = $this->Waiter_model->get_deliver_order_list();
		$data['main_content'] = 'waiter/deliver';
		$this->load->view('waiter/includes/template', $data);
	}	
	
	public function Reserve()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Reserve'] = 'active';
		$data['title'] = 'Reserve';	
		$data['order_list'] = $this->Waiter_model->get_reserve_order_list();
		$data['main_content'] = 'waiter/reserve';
		$this->load->view('waiter/includes/template', $data);
	}	
	
	public function Call()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Call'] = 'active';
		$data['title'] = 'Call';	
		$data['order_list'] = $this->Waiter_model->get_call_order_list();
		$data['main_content'] = 'waiter/call';
		$this->load->view('waiter/includes/template', $data);
	}	
	
	public function Kitchen()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_kitchen'] = 'active';
		$data['title'] = 'Kitchen';	
		$data['order_list'] = $this->Waiter_model->get_kitchen_order_list();
		$data['main_content'] = 'waiter/kitchen';
		$this->load->view('waiter/includes/template', $data);
	}	
	
	public function Ready()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_Ready'] = 'active';
		$data['title'] = 'Ready';	
		$data['order_list'] = $this->Waiter_model->get_ready_order_list();
		$data['main_content'] = 'waiter/ready';
		$this->load->view('waiter/includes/template', $data);
	}
	
		
	public function Order_Accept($id11=NULL,$type=NULL)
	{
	//	$post_data = $this->input->post();
			$id=$this->session->userdata('waiter_id');
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Waiter_model->Order_Accept($id11);
			if($query){
				redirect('waiter/waiter/'.$type,'refresh');
			}else{
				redirect('waiter/waiter/'.$type,'refresh');
			}
	}			
		
		
	public function payment_recived($id11=NULL,$type=NULL)
	{
	//	$post_data = $this->input->post();
			$id=$this->session->userdata('waiter_id');
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Waiter_model->payment_recived($id11);
			if($query){
				redirect('waiter/waiter/'.$type,'refresh');
			}else{
				redirect('waiter/waiter/'.$type,'refresh');
			}
	}			
	
	public function Order_Decline($id11=NULL,$type=NULL)
	{
	//	$post_data = $this->input->post();
			$id=$this->session->userdata('waiter_id');
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Waiter_model->Order_Decline($id11);
			if($query){
				redirect('waiter/waiter/'.$type,'refresh');
			}else{
				redirect('waiter/waiter/'.$type,'refresh');
			}
	}		
		
	public function Order_send_to_kitchen($id11=NULL)
	{
	//	$post_data = $this->input->post();
			$id=$this->session->userdata('waiter_id');
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Waiter_model->Order_send_to_kitchen($id11);
			if($query){
				redirect('waiter/waiter/Kitchen','refresh');
			}else{
				redirect('waiter/waiter/Kitchen','refresh');
			}
	}		
	
	public function Order_ready($id11=NULL)
	{
	//	$post_data = $this->input->post();
			$id=$this->session->userdata('waiter_id');
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Waiter_model->Order_ready($id11);
			if($query){
				redirect('waiter/waiter/Ready','refresh');
			}else{
				redirect('waiter/waiter/Ready','refresh');
			}
	}		
	
	public function order_complete($id11=NULL)
	{
	//	$post_data = $this->input->post();
			$id=$this->session->userdata('waiter_id');
			$hotel_id=$this->session->userdata('hotel_id');
			$query=$this->Waiter_model->order_complete($id11);
			if($query){
				redirect('waiter/waiter/Ready','refresh');
			}else{
				redirect('waiter/waiter/Ready','refresh');
			}
	}		
	
	public function open_order()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_kitchen'] = 'active';
		$data['title'] = 'Kitchen';	
		$data['order_list'] = $this->Waiter_model->get_open_order_list();
		$data['main_content'] = 'waiter/open_order';
		$this->load->view('waiter/includes/template', $data);
	}	
	public function Waiting_payment()
	{		
		$id=$this->session->userdata('waiter_id');
		$hotel_id=$this->session->userdata('hotel_id');
        $data['active_kitchen'] = 'active';
		$data['title'] = 'Kitchen';	
		$data['order_list'] = $this->Waiter_model->get_Waiting_payment_order_list();
		$data['main_content'] = 'waiter/Waiting_payment';
		$this->load->view('waiter/includes/template', $data);
	}
	public function UpdateReserveTableStatus()
	{
		$post_data = $this->input->post();
		 $res= $this->Waiter_model->update_reservetable($post_data);
		 header('Content-Type: application/json');
        echo json_encode( $res );
		
	}
	
}?>