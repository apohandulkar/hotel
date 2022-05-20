<?php
class Home_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
date_default_timezone_set("Asia/Kolkata");
	}
	
	public function get_home_page_setting()
	{
        $sql = "SELECT * FROM home_page_setting where id='1'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_hotel_list()
	{
        $sql = "SELECT * FROM hotel where IsActive=0 and status='Active'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_hotel_count()
	{
        $sql = "SELECT count(*) as count FROM hotel where IsActive=0 and status='Active'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_city_hotel_list($post_data)
	{
		$city=$post_data['city'];
		if($city=='')
		{
		$city='Pune';
		}
		else
		{
		$city=$post_data['city'];
		} 
		$contain=$post_data['contain'];
        $sql = "SELECT * FROM hotel where IsActive=0 and city='$city' and status='Active'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}		
	
	public function get_city_hotel_count($post_data)
	{
		$city=$post_data['city'];
		if($city=='')
		{
		$city='Pune';
		}
		else
		{
		$city=$post_data['city'];
		}
		$contain=$post_data['contain'];
        $sql = "SELECT count(*) as count FROM hotel where IsActive=0 and city='$city' and status='Active'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	

	public function get_hotel_details($id)
	{
        $sql = "SELECT * FROM hotel where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	
	//cart
	
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
		
		$website_link='http://scanjee.com/kot/'.$last_id;
		
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
	
	public function save_customer($post_data)
	{
		$name=$post_data['name'];
		$mobile= $post_data['mobile'];
		$email=$post_data['email'];
		$password=$post_data['password'];
		
		$array_client=array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'password'=>$password);
	 	
		$s1=$this->db->insert('customer',$array_client);
		 $id=$this->db->insert_id();
		  return $id;
		

	}
	public function update_customer($post_data)
	{
		$name=$post_data['name'];
		$mobile= $post_data['mobile'];
		$email=$post_data['email'];
		$id=$post_data['id'];
		
		$array_client=array('name'=>$name,'mobile'=>$mobile,'email'=>$email);
	 	 $this->db->where('id',$id);
		$s1=$this->db->UPDATE('customer',$array_client);
		  return $id;
		

	}
	
	public function get_customer_details($id)
	{
	
        $sql = "SELECT * FROM customer where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}
	
	
		
	function validate_user()
	{		
		// $password = do_hash($this->input->post('password'));
		$password = $this->input->post('password');
		$mobile = $this->input->post('mobile');
		
		
		$this->db->where('mobile',$this->input->post('mobile'));
		$this->db->where('password',$password);
		$this->db->where('IsActive','0');		
		$q1=$this->db->get('customer');
	//	print_r($q);exit();
		$user_id=$q1->row('id');

			
			$data1=array(
				'id'=>$q1->row('id'),
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
			return $q1->row('id');
			
		}
		
			
	public function save_address($post_data)
	{
		$address=$post_data['address'];
		$city= $post_data['city'];
		$pincode=$post_data['pincode'];		
		$landmark=$post_data['landmark'];		
		$id=$post_data['id'];		

		$array_client=array('address'=>$address,'city'=>$city,'pincode'=>$pincode,'cust_id'=>$id,'landmark'=>$landmark);
	 	
		$this->db->insert('customer_address',$array_client);
		  return $id;
		

	}
	
	public function delete_address($aid)
	{
				
		$array_client=array('IsActive'=>'1');
	 	 $this->db->where('id',$aid);
		$s1=$this->db->UPDATE('customer_address',$array_client);
		  return TRUE;
		

	}
	
	public function update_address($post_data)
	{
		$address=$post_data['address'];
		$city= $post_data['city'];
		$pincode=$post_data['pincode'];		
		$id=$post_data['id'];		
		$landmark=$post_data['landmark'];		
		$aid=$post_data['aid'];		

		$array_client=array('address'=>$address,'city'=>$city,'pincode'=>$pincode,'landmark'=>$landmark);
	 	 $this->db->where('cust_id',$id);
	 	 $this->db->where('id',$aid);

		$this->db->update('customer_address',$array_client);
		  return $id;
		

	}
	
	public function save_address_profile($post_data)
	{
		$address=$post_data['address'];
		$city= $post_data['city'];
		$pincode=$post_data['pincode'];		
		$landmark=$post_data['landmark'];		
		$id=$post_data['id'];		

		$array_client=array('address'=>$address,'city'=>$city,'pincode'=>$pincode,'cust_id'=>$id,'landmark'=>$landmark);
	 	
		$this->db->insert('customer_address',$array_client);
		  return $id;
		

	}
	public function save_cart($post_data)
	{
		$id=$post_data['id'];		
		$table_id=$post_data['table_id'];	
		$address=$post_data['address'];		
		$payment_method=$post_data['payment_method'];	
		$comming_from=$post_data['radio'];	
		$state=$post_data['state'];	
	date_default_timezone_set("Asia/Kolkata");
	$numItems = count($this->cart->contents());
	$i = 0;
	foreach($this->cart->contents() as $key) {
	if($i+1 == $numItems) {
	$saved_rowid = $key['hotel_id'];
	}
	$i++;
	}
//echo '765765'.$saved_rowid;

		$sql = "SELECT max(order_id) as order_id FROM order_tbl where IsActive=0 and hotel_id='$saved_rowid'";
        $record = $this->db->query($sql);
        $oid=$record->result_array();
		$order_id=$oid[0]['order_id']+1;
		
		$cust_id=$id;
		$table=$table_id;
		$addtress_id=$address;
		$payment_method=$payment_method;
		$order_status='Waiting';
		$date=date('Y-m-d');
		$total_amount=$this->cart->total();
		$time=date('H:i:s');
		if($payment_method=='Cash On delivery')
		{
		  $waiting_for_payment=no;
		}
		else
		{
		  $waiting_for_payment=yes;
		}
		if($saved_rowid!='')
		{
		$array_client=array('order_id'=>$order_id,'hotel_id'=>$saved_rowid,'cust_id'=>$cust_id,'addtress_id'=>$addtress_id,
		'payment_method'=>$payment_method,'order_status'=>$order_status,'date'=>$date,'total_amount'=>$total_amount,'time'=>$time,
		'comming_from'=>$comming_from,'waiting_for_payment'=>$waiting_for_payment,'state'=>$state);
		$this->db->insert('order_tbl',$array_client);
		$order_id_row=$this->db->insert_id();
		foreach($this->cart->contents() as $items)
		{
			$menu_id=$items['menu_id'];
			//$hotel_id=$items['hotel_id'];
			$qty=$items['qty'];
			
			if($qty > 0)
			{
			//$time=
		$array_client=array('order_id'=>$order_id_row,'menu_id'=>$menu_id,'qty'=>$qty);
		$this->db->insert('order_menu',$array_client);
			}
	 	}
		
		 $this->load->library("cart");
		$this->cart->destroy();
		  return $id;
		}
		else
		{
			return false;
		}
		

	}
	public function get_order_list($id)
	{
        $sql = "SELECT * FROM order_tbl where IsActive=0 and cust_id='$id'";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
	
	public function get_order_list_not_deliver($id)
	{
		date_default_timezone_set("Asia/Kolkata");
		$date=date("Y-m-d");
		
	   $sql = "SELECT * FROM order_tbl where (`comming_from`='Deliver' OR `comming_from`='Takeaway') AND IsActive=0 and `food_status`!='deliver'  and `cust_id`='$id' and date='$date' order by id DESC";
        $record = $this->db->query($sql);
        return $record->result_array();
	}	
}?>