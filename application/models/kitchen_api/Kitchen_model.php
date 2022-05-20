<?php
class Kitchen_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	public function get_kitchen_details($id)
	{
        $sql = "SELECT * FROM kitchen where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function update_kitchen($post_data)
	{
		$hotel_id=$this->session->userdata('hotel_id');
		$id=$post_data['id'];		
		$name=$post_data['name'];
		$mobile=$post_data['mobile'];
		$address=$post_data['address'];
		$username=$post_data['username'];
		$password=$post_data['password'];
		$status=$post_data['status'];
		$hotel_id=$this->session->userdata('hotel_id');
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('name'=>$name,'address'=>$address,'mobile'=>$mobile,'username'=>$username,'password'=>$password,'status'=>$status,
		'hotel_id'=>$hotel_id,'createdAt'=>$CreatedAt);
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('kitchen',$array_client);
	}
	
	public function get_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and hotel_id='$hotel_id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function get_order_details($oid)
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and id='$oid' and hotel_id='$hotel_id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function update_order($post_data)
	{
		$hotel_id=$this->session->userdata('hotel_id');
		$id=$post_data['id'];		
		$order_id_row=$post_data['order_id_row'];
	
		$status=$post_data['status'];
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('order_status'=>$status,'waiter_handle'=>$id,'order_satus_updated_time'=>$CreatedAt);
		
		$this->db->where('id',$order_id_row);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}
	
	
	public function get_open_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and order_status='Kitchen' and hotel_id='$hotel_id' and `food_status`!='deliver'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
		
	public function Order_ready($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$array_client=array('order_status'=>'Ready','food_status'=>'Out for delivery');
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}
	
	public function get_ready_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and `food_status`!='deliver' and `order_status`='Ready' ";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function order_complete($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$array_client=array('order_status'=>'Complete','food_status'=>'deliver');
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}

}?>