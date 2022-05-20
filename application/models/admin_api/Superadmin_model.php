<?php
class Superadmin_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}
	public function get_max_hotel_id()
	{
        $sql = "SELECT max(id) as id FROM hotel";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	
	public function save_hotel($post_data,$path,$path1)
	{
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
		$usename=$post_data['usename'];
		$pincode=$post_data['pincode'];
		$password=$mobile;
		$status=$post_data['status'];
		$gstno=$post_data['gstno'];
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
		$gstno=$post_data['gstno'];

		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$sql = "SELECT count(*) as count FROM hotel where IsActive=0 and email='$email'";
        $record = $this->db->query($sql);
        $aa=$record->result_array();
		$count=$aa[0]['count'];
		if($count < 1)
		{
		
		$array_client=array('name'=>$name,'address'=>$address,'city'=>$city, 'state'=>$state, 
		 'country'=>$country,'mobile'=>$mobile,'alternate_mobile_no'=>$alternate_mobile_no,'email'=>$email,'no_of_table'=>$no_of_table
		 ,'register_date'=>$register_date,'expired_date'=>$expired_date,'usename'=>$email,'status'=>$status,'password'=>$password,
		 'logo'=>$logo,'banner'=>$banner,'pincode'=>$pincode,'gstno'=>$gstno,'hotel_description'=>$hotel_description,'opning_hr'=>$opning_hr,
		 'closing_hr'=>$closing_hr,'sunday'=>$sunday,'monday'=>$monday,'tuesday'=>$tuesday,'wednesday'=>$wednesday,'thursday'=>$thursday,
		 'friday'=>$friday,'saturday'=>$saturday);
	 	$ss=$this->db->insert('hotel',$array_client);
		//return true;
		$last_id = $this->db->insert_id();
		
		$website_link='http://localhost/KOT/';
		
		// send mail
		 $to = $email;
         $subject = "Login Details";
         
         $message = "<b>Login Details For Hotel Portal</b>";
         $message .= "Username: $email<br /> Password: $password";
         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         mail ($to,$subject,$message,$header);
		
		$customer_service=array('website_link'=>$website_link);
		 $this->db->where('id',$last_id);
		return $this->db->Update('hotel',$customer_service);
		}
		else
		{
			return FALSE;
		}

	}
	
	
	public function get_hotel_list()
	{
        $sql = "SELECT * FROM hotel where IsActive=0";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_deleted_hotel_list()
	{
        $sql = "SELECT * FROM hotel where IsActive=1";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_hotel_details($id)
	{
        $sql = "SELECT * FROM hotel where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function get_qr_info()
	{
        $sql = "SELECT * FROM qr_code_info where id='1'";
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
		 'friday'=>$friday,'saturday'=>$saturday);

		 $this->db->where('id',$maxid);
		return $this->db->Update('hotel',$array_client);


	}	
	
	public function Delete_hotel($id)
	{
		
		$array_client=array('IsActive'=>'1');
		 $this->db->where('id',$id);
		return $this->db->Update('hotel',$array_client);
	}
	
	public function Activate_hotel($id)
	{
		
		$array_client=array('IsActive'=>'0');
		 $this->db->where('id',$id);
		return $this->db->Update('hotel',$array_client);
	}
	
	public function get_main_menu()
	{
        $sql = "SELECT * FROM menu where IsActive=0 and parent_menu Is NULL";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function Save_main_menu($post_data)
	{
      
		$menu=$post_data['menu'];		
		$category=$post_data['category'];		
		$description=$post_data['description'];		
		$price=$post_data['price'];		
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('menu'=>$menu,'category'=>$category,'description'=>$description,'price'=>$price,'CreatedAt'=>$CreatedAt);
		return $this->db->insert('menu',$array_client);
	}
	public function get_main_menu_details($id)
	{
        $sql = "SELECT * FROM menu where id=$id";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function Update_main_menu($post_data)
	{
      
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
		return $this->db->update('menu',$array_client);
	}
	
	public function Delete_menu($id)
	{
		
		$array_client=array('IsActive'=>'1');
		 $this->db->where('id',$id);
		return $this->db->Update('menu',$array_client);
	}	
	
	public function get_sub_menu()
	{
        $sql = "SELECT * FROM menu where IsActive=0 and parent_menu!=''";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function Save_sub_menu($post_data)
	{
      
		$parent_menu=$post_data['parent_menu'];		
		$menu=$post_data['menu'];		
		$category=$post_data['category'];
		$description=$post_data['description'];		
		$price=$post_data['price'];				
		
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('menu'=>$menu,'parent_menu'=>$parent_menu,'category'=>$category,'description'=>$description,'price'=>$price,'CreatedAt'=>$CreatedAt);
		return $this->db->insert('menu',$array_client);
	}
	public function get_sub_menu_details($id)
	{
        $sql = "SELECT * FROM menu where id=$id";
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
		
		date_default_timezone_set("Asia/Kolkata");
		$CreatedAt=date('Y-m-d H:i:s');
		$date=date('Y-m-d');
		
		$array_client=array('menu'=>$menu,'category'=>$category,'parent_menu'=>$parent_menu,'description'=>$description,'price'=>$price,'CreatedAt'=>$CreatedAt);
		$this->db->where('id',$id);
		return $this->db->update('menu',$array_client);
	}
	
	public function Delete_submenu($id)
	{
		
		$array_client=array('IsActive'=>'1');
		 $this->db->where('id',$id);
		return $this->db->Update('menu',$array_client);
	}
	
	 public function insertRecord($record){
	 
		if(count($record) > 0){
	 
		  // Check user
		  $this->db->select('*');
		  $this->db->where('menu', $record[0]);
		  $this->db->where('IsActive', '0');
		  $q = $this->db->get('menu');
		  $response = $q->result_array();
	 
		  // Insert record
		  if(count($response) == 0){
			$newuser = array(
			  "menu" => trim($record[0]),
			  "category" => trim($record[1]),
			  "description" => trim($record[2]),
			  "price" => trim($record[3])
			);

			$this->db->insert('menu', $newuser);
		  }
	 
		}
	 
	  }
	  
	 public function insertRecord1($record){
	 
		if(count($record) > 0){
	 
		  // Check user
		  $this->db->select('*');
		  $this->db->where('menu', $record[0]);
		  $this->db->where('IsActive', '0');
		  $q = $this->db->get('menu');
		  $response = $q->result_array();
	 
		  // Insert record
		  if(count($response) == 0){
			$newuser = array(
			  "menu" => trim($record[0]),
			  "parent_menu" => trim($record[1]),
			  "category" => trim($record[2]),
			  "description" => trim($record[3]),
			  "price" => trim($record[4])

			);
			$this->db->insert('menu', $newuser);
		  }
	 
		}
	 
	  }
	  
	public function get_hotel_expired_list()
	{
				
		date_default_timezone_set("Asia/Kolkata");
		$date=date("Y-m-d");
        $sql = "SELECT * FROM hotel where IsActive=0 and expired_date<='$date'";
        $record = $this->db->query($sql);
        return $record->result_array();
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
	
	public function Save_qr_code($post_data,$path)
	{
      
		$top_des=$post_data['top_des'];		
		$bottom_des=$post_data['bottom_des'];		
		
		$array_client=array('top_des'=>$top_des,'bottom_des'=>$bottom_des,'logo'=>$path);
		$this->db->where('id','1');
		return $this->db->update('qr_code_info',$array_client);	
	}	
	
	public function Save_portal_logo($path)
	{
      
		$logo=$post_data['logo'];		
		
		$array_client=array('logo'=>$path);
		$this->db->where('id','1');
		return $this->db->update('home_page_setting',$array_client);	
	}
	public function Save_home_banner($path)
	{
		$array_client=array('banner'=>$path);
		$this->db->where('id','1');
		return $this->db->update('home_page_setting',$array_client);	
	}
	public function Save_middle_images($path)
	{
		$array_client=array('middle_image'=>$path);
		$this->db->where('id','1');
		return $this->db->update('home_page_setting',$array_client);	
	}
	public function Save_footer_image($path)
	{
		$array_client=array('footer_image'=>$path);
		$this->db->where('id','1');
		return $this->db->update('home_page_setting',$array_client);	
	}

	public function Save_banner_text($post_data)
	{
		$btext=$post_data['btext'];
		$array_client=array('btext'=>$btext);
		$this->db->where('id','1');
		return $this->db->update('home_page_setting',$array_client);	
	}
	
	public function get_home_page_setting()
	{
        $sql = "SELECT * FROM home_page_setting where id='1'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function get_gst_tax()
	{
        $sql = "SELECT * FROM gst_tax_category where IsActive='0'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}

	public function save_gst_tax($post_data)
	{
		$cat=$post_data['cat'];
		$gst_percent=$post_data['gst_percent'];
		$array_client=array('cat'=>$cat,'gst_percent'=>$gst_percent);
		return $this->db->insert('gst_tax_category',$array_client);	
	}
	

	
	public function get_gst_cat_details($id)
	{
		 $sql = "SELECT * FROM gst_tax_category where id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	public function Update_tax_category($post_data)
	{
		$id=$post_data['id'];
		$cat=$post_data['cat'];
		$gst_percent=$post_data['gst_percent'];
		$array_client=array('cat'=>$cat,'gst_percent'=>$gst_percent);
		$this->db->where('id',$id);
		return $this->db->Update('gst_tax_category',$array_client);	
	}
	
	public function Delete_category($id)
	{
		$array_client=array('IsActive'=>'1');
		$this->db->where('id',$id);
		return $this->db->Update('gst_tax_category',$array_client);	
	}

}?>