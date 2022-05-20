<?php
class Waiter_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	public function get_waiter_details($id)
	{
        $sql = "SELECT * FROM waiter where IsActive=0 and id='$id' ";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function update_waiter($post_data)
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
		return $this->db->update('waiter',$array_client);
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
	
	
	public function get_takeaway_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where order_status='Waiting' and  IsActive=0 and hotel_id='$hotel_id' and comming_from='Takeaway'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	public function get_table_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where order_status='Waiting' and  IsActive=0 and hotel_id='$hotel_id' and comming_from='Table'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}		
	
	public function get_cash_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where order_status='WaitingForPayment' and  IsActive=0 and hotel_id='$hotel_id' and comming_from='Takeaway'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_deliver_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and order_status='Waiting' and hotel_id='$hotel_id' and comming_from='Deliver'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_reserve_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
		$date=date('Y-m-d');
		$time=date('H:i:s');
         $sql = "SELECT * FROM  reserve_table where IsActive=0 and (order_status='Waiting' OR order_status='Accept') and ((`reserve_timing`>'$time' and `date`='$date') OR  `reserve_timing` IS NULL ) and hotel_id='$hotel_id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_call_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM call_table where IsActive=0 and order_status='Waiting' and hotel_id='$hotel_id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_kitchen_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and order_status='Kitchen' and hotel_id='$hotel_id' and `food_status`!='deliver'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_open_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and `order_status`='Accept' and `food_status`!='deliver' and waiting_for_payment='no'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
		
	public function get_Waiting_payment_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and `order_status`='Accept' and `food_status`!='deliver'
		and waiting_for_payment='yes'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_ready_order_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and `food_status`!='deliver' and `order_status`='Ready' ";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function Order_Accept($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$sql = "SELECT * FROM order_tbl where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        $aa=$record->result_array();
		$state=$aa[0]['state'];
		$payment_method=$aa[0]['payment_method'];
		if($state=='offline' && $payment_method=='Cash On delivery')
		{
		$array_client=array('order_status'=>'WaitingForPayment','food_status'=>'Order Accept');
		}
		else
		{
		$array_client=array('order_status'=>'Accept','food_status'=>'Order Accept');
		}
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}	
	public function payment_recived($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$array_client=array('order_status'=>'Accept','food_status'=>'Order Accept');
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}	
	
	public function Order_send_to_kitchen($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$array_client=array('order_status'=>'Kitchen','food_status'=>'Preparing your order');
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}	
	
	public function Order_Decline($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$array_client=array('order_status'=>'Decline','food_status'=>'Order Cancel');
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}	
	
	public function Order_ready($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$array_client=array('order_status'=>'Ready','food_status'=>'Out for delivery');
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}
	
	public function order_complete($id)
	{
				$hotel_id=$this->session->userdata('hotel_id');

		$array_client=array('order_status'=>'Complete','food_status'=>'deliver');
		
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('order_tbl',$array_client);
	}

	public function update_reservetable($post_data)
	{
		date_default_timezone_set("Asia/Kolkata");
		$hotel_id=$this->session->userdata('hotel_id');
		if ($post_data['status']=='Accept') {
		$sql = "SELECT * FROM hotel where  id=".$hotel_id;
        $record = $this->db->query($sql);	
        $record= $record->result_array();
        if ($record[0]['table_reserve_time']!=NUll) {
        	$date = date("Y-m-d H:i:s");
			$currentDate = strtotime($date);
			$futureDate = $currentDate+(60*$record[0]['table_reserve_time']);
			$reserve_timing = date("H:i:s", $futureDate);
        }else{
        	$date = date("Y-m-d H:i:s");
			$currentDate = strtotime($date);
			$futureDate = $currentDate+(60*15);
			$reserve_timing = date("H:i:s", $futureDate);
	        }
		$array_client=array('reserve_timing'=>$reserve_timing,'accept_time'=>date('Y-m-d H:i:s'),'order_status'=>$post_data['status']);
		$res=array("sucess"=>true,'reserve_timing'=>$reserve_timing);
		}else{
		  $array_client=array('order_status'=>$post_data['status']);
		  $res=array("sucess"=>true,'reserve_timing'=>'');
		}
		
		$this->db->where('id',$post_data['id']);
		 $this->db->update('reserve_table',$array_client);
		return $res;
	}
}?>