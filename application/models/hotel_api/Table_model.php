<?php
class Table_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	public function get_table_list()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM tables where hotel_id='$hotel_id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}


	public function get_table_details($id)
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM tables where id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function Save_table($post_data)
	{
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$array_client=array('name'=>$post_data['name'],'number'=>$post_data['number'],'status'=>$post_data['status'],'hotel_id'=>$this->session->userdata('hotel_id'),'created_at'=>$CreatedAt);
		return $this->db->insert('tables',$array_client);


	}	
	
	public function update_table($post_data)
	{
		$array_client=array('name'=>$post_data['name'],'number'=>$post_data['number'],'status'=>$post_data['status']);
		$this->db->where('id',$post_data['id']);
		return $this->db->update('tables',$array_client);
	}
	
	public function Delete_table($id)
	{
		date_default_timezone_set("Asia/Kolkata");
		$array_client=array('deleted_at'=>date('Y-m-d H:i:s'));
		 $this->db->where('id',$id);
		return $this->db->Update('tables',$array_client);
	}



}?>