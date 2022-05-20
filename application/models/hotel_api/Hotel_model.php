<?php
class Hotel_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	
	public function get_hotel_details($id)
	{
        $sql = "SELECT * FROM hotel where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function Update_hotel($post_data,$path,$path1)
	{
		$maxid=$post_data['maxid'];
		$name=$post_data['name'];
		$address=$post_data['address'];
		$city=$post_data['city'];
		$state=$post_data['state'];
		$country=$post_data['country'];
		$mobile=$post_data['mobile'];
		$alternate_mobile_no=$post_data['alternate_mobile_no'];
		$email=$post_data['email'];
		$no_of_table=$post_data['no_of_table'];
		$register_date=$post_data['register_date'];
		$expired_date=$post_data['expired_date'];
		$pincode=$post_data['pincode'];
		$status=$post_data['status'];
		$gstno=$post_data['gstno'];
		$reserv_no=$post_data['reserv_no'];
		$call_no=$post_data['call_no'];
		$logo=$path;
		$banner=$path1;
		
		$opning_hr=$post_data['opning_hr'];
		$closing_hr=$post_data['closing_hr'];
		$hotel_description=$post_data['hotel_description'];
		$sunday=$post_data['sunday'];
		$monday=$post_data['monday'];
		$tuesday=$post_data['tuesday'];
		$wednesday=$post_data['wednesday'];
		$thursday=$post_data['thursday'];
		$friday=$post_data['friday'];
		$saturday=$post_data['saturday'];
		
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		
		
		$array_client=array('name'=>$name,'address'=>$address,'city'=>$city, 'state'=>$state, 
		 'country'=>$country,'mobile'=>$mobile,'alternate_mobile_no'=>$alternate_mobile_no,'email'=>$email,'no_of_table'=>$no_of_table
		 ,'register_date'=>$register_date,'expired_date'=>$expired_date,'status'=>$status,
		 'logo'=>$logo,'banner'=>$banner,'pincode'=>$pincode,'gstno'=>$gstno,'hotel_description'=>$hotel_description,'opning_hr'=>$opning_hr,
		 'closing_hr'=>$closing_hr,'sunday'=>$sunday,'monday'=>$monday,'tuesday'=>$tuesday,'wednesday'=>$wednesday,'thursday'=>$thursday,
		 'friday'=>$friday,'saturday'=>$saturday,'reserv_no'=>$reserv_no,'call_no'=>$call_no);

		 $this->db->where('id',$maxid);
		return $this->db->Update('hotel',$array_client);


	}	
	
	public function get_main_menu()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM hotel_menu where IsActive=0 and hotel_id='$hotel_id' and parent_menu Is NULL";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	public function get_sample_menu()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM menu where IsActive=0 and parent_menu Is NULL";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function Save_main_menu($post_data)
	{
      
	    $hotel_id=$this->session->userdata('hotel_id');
		$menu=$post_data['menu'];		
		$category=$post_data['category'];		
		$description=$post_data['description'];		
		$price=$post_data['price'];		
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('menu'=>$menu,'category'=>$category,'description'=>$description,'price'=>$price,'CreatedAt'=>$CreatedAt,'hotel_id'=>$hotel_id);
		return $this->db->insert('hotel_menu',$array_client);
	}
	public function get_main_menu_details($id)
	{
        $sql = "SELECT * FROM hotel_menu where id=$id";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function Update_main_menu($post_data)
	{
      
	  $hotel_id=$this->session->userdata('hotel_id');
		$id=$post_data['id'];		
		$menu=$post_data['menu'];		
		$category=$post_data['category'];	
		$description=$post_data['description'];		
		$price=$post_data['price'];				
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('menu'=>$menu,'category'=>$category,'CreatedAt'=>$CreatedAt,'description'=>$description,'price'=>$price);
		$this->db->where('id',$id);
		$this->db->where('hotel_id',$hotel_id);
		return $this->db->update('hotel_menu',$array_client);
	}
	
	public function Delete_menu($id)
	{
		
		$array_client=array('IsActive'=>'1');
		 $this->db->where('id',$id);
		return $this->db->Update('hotel_menu',$array_client);
	}	
	
	public function get_sub_menu()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM hotel_menu where IsActive=0 and parent_menu!='' and hotel_id='$hotel_id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function get_sample_submenu()
	{
		$hotel_id=$this->session->userdata('hotel_id');
        $sql = "SELECT * FROM menu where IsActive=0 and parent_menu!=''";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function Save_sub_menu($post_data)
	{
		$hotel_id=$this->session->userdata('hotel_id');
		$parent_menu=$post_data['parent_menu'];		
		$menu=$post_data['menu'];		
		$category=$post_data['category'];
		$description=$post_data['description'];		
		$price=$post_data['price'];				
		$tax_category=$post_data['tax_category'];				
		$gst_in_ex=$post_data['gst_in_ex'];				
		
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('menu'=>$menu,'parent_menu'=>$parent_menu,'category'=>$category,'description'=>$description,
		'price'=>$price,'CreatedAt'=>$CreatedAt,'hotel_id'=>$hotel_id,'tax_category'=>$tax_category,'gst_in_ex'=>$gst_in_ex);
		return $this->db->insert('hotel_menu',$array_client);
	}
	public function get_sub_menu_details($id)
	{
        $sql = "SELECT * FROM hotel_menu where id=$id";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function Update_sub_menu($post_data)
	{
      
		$id=$post_data['id'];		
		$menu=$post_data['menu'];		
		$parent_menu=$post_data['parent_menu'];		
		$category=$post_data['category'];
		$description=$post_data['description'];		
		$price=$post_data['price'];				
		$hotel_id=$this->session->userdata('hotel_id');
		
		$tax_category=$post_data['tax_category'];				
		$gst_in_ex=$post_data['gst_in_ex'];				


		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('menu'=>$menu,'category'=>$category,'parent_menu'=>$parent_menu,'description'=>$description,'price'=>$price,
		'CreatedAt'=>$CreatedAt,'hotel_id'=>$hotel_id,'tax_category'=>$tax_category,'gst_in_ex'=>$gst_in_ex);
		$this->db->where('id',$id);
		return $this->db->update('hotel_menu',$array_client);
	}
	
	public function Delete_submenu($id)
	{
		
		$array_client=array('IsActive'=>'1');
		 $this->db->where('id',$id);
		return $this->db->Update('hotel_menu',$array_client);
	}
	
	 public function insertRecord($record){
	 $hotel_id=$this->session->userdata('hotel_id');
		if(count($record) > 0){
	 
		  // Check user
		  $this->db->select('*');
		  $this->db->where('menu', $record[0]);
		  $this->db->where('category', $record[1]);
		  $this->db->where('hotel_id', $hotel_id);
		  $this->db->where('IsActive', '0');
		  $q = $this->db->get('hotel_menu');
		  $response = $q->result_array();
	 
		  // Insert record
		  if(count($response) == 0){
			$newuser = array(
			  "menu" => trim($record[0]),
			  "category" => trim($record[1]),
			  "description" => trim($record[2]),
			  "price" => trim($record[3]),
			  "hotel_id" => $hotel_id
			);

			$this->db->insert('hotel_menu', $newuser);
		  }
	 
		}
	 
	  }
	  
	 public function insertRecord1($record){
	 $hotel_id=$this->session->userdata('hotel_id');
		if(count($record) > 0){
	 
		  // Check user
		  $this->db->select('*');
		  $this->db->where('menu', $record[0]);
		  $this->db->where('parent_menu', $record[1]);
		  $this->db->where('category', $record[2]);
		  $this->db->where('hotel_id', $hotel_id);
		  $this->db->where('IsActive', '0');
		  $q = $this->db->get('hotel_menu');
		  $response = $q->result_array();
	 
		  // Insert record
		  if(count($response) == 0){
			$newuser = array(
			  "menu" => trim($record[0]),
			  "parent_menu" => trim($record[1]),
			  "category" => trim($record[2]),
			  "description" => trim($record[3]),
			  "price" => trim($record[4]),
			  "hotel_id" => $hotel_id
			);
			$this->db->insert('hotel_menu', $newuser);
		  }
	 
		}
	 
	  }
	
	
	public function Save_renewal($post_data)
	{
      
		$hid=$post_data['hid'];		
		$renewal_year=$post_data['renewal_year'];		
		$renewal_amount=$post_data['renewal_amount'];		
		date_default_timezone_set("Asia/Kolkata");
		$renewal_date=date('Y-m-d');
		$expired_date=date("Y-m-d", strtotime($renewal_date. " + $renewal_year year"));
		
		$array_client=array('renewal_date'=>$renewal_date,'renewal_amount'=>$renewal_amount,'expired_date'=>$expired_date);
		$this->db->where('id',$hid);
		return $this->db->update('hotel',$array_client);
	}
	
	public function Save_notification($post_data)
	{
      
		$wating=$post_data['wating'];		
		$payment_done=$post_data['payment_done'];		
		$order_confirm=$post_data['order_confirm'];		
		$order_receive=$post_data['order_receive'];		
		$kictchen_order_receive=$post_data['kictchen_order_receive'];		
		$kitchen_food_prepared=$post_data['kitchen_food_prepared'];		
		$kitchen_order_done=$post_data['kitchen_order_done'];
		
			$array_client=array('wating'=>$wating,'payment_done'=>$payment_done,'order_confirm'=>$order_confirm,'order_receive'=>$order_receive,
			'kictchen_order_receive'=>$kictchen_order_receive,'kitchen_food_prepared'=>$kitchen_food_prepared,'kitchen_order_done'=>$kitchen_order_done);
		$this->db->where('id','1');
		return $this->db->update('notification',$array_client);
	}
	public function get_notification_list()
	{
        $sql = "SELECT * FROM notification where id='1'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

}?>