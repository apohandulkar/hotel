<?php
class Waiter_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	public function get_waiter_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM waiter where IsActive=0 and hotel_id='$hotel_id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function get_waiter_details($id)
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM waiter where IsActive=0 and hotel_id='$hotel_id' and id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function save_waiter($post_data)
	{
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
		return $this->db->insert('waiter',$array_client);


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
	
	public function Delete_waiter($id)
	{
		$hotel_id=$this->session->userdata('hotel_id');
		$array_client=array('IsActive'=>'1');
		 $this->db->where('id',$id);
		 $this->db->where('hotel_id',$hotel_id);
		return $this->db->Update('waiter',$array_client);
	}	


}?>