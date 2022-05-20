<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {
	
	public function __construct(){
	   parent::__construct();
		$this->load->model('admin_api/Home_model');
		$this->load->model('hotel_api/Hotel_model');
		$this->load->model('hotel_api/Table_model');
		
		$this->load->library('session');

	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function index($id=NULL)
	{	
		$id=$this->uri->segment(2);
		$data['active_home'] = 'active';
		$data['title'] = 'Home';	
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['home_list'] = $this->Home_model->get_hotel_list();
		$post_data = $this->input->post();
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
		$data['items'] = $this->cart->contents();
		$data['cart_total'] = $this->cart->total();

		$data['home_lists']=$this->Home_model->get_city_hotel_list($post_data);
		$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
		$data1=array(
				'city'=> $city,
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$this->load->view('home', $data);
	}

	/* public function home()
	{	
		$data['active_home'] = 'active';
		$data['title'] = 'Home';	
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['home_list'] = $this->Home_model->get_hotel_list();
		//$data['main_content'] = 'home';
		$this->load->view('home', $data);
	} */

	public function restaurants()
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'Restaurants';
		$post_data = $this->input->post();
		$city=$post_data['city'];
		$id=$post_data['id'];
		$contain=$post_data['contain'];
/* 		$this->session->set_userdata('city', $city);
		$this->session->set_userdata('id', $id); */
		$data1=array(
				'city'=> $city,
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$this->session->set_userdata('contain', $contain);
		$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
	//	redirect("home/index");

		$this->load->view('restaurants', $data);
		
	}
	
	
		public function get_city()
		{
				$db = get_instance()->db->conn_id;
			$type = $_POST['type'];
			$name =  $_POST['name_startsWith'];
			
			$query = "SELECT DISTINCT city FROM hotel p 
			 where p.IsActive=0 and  UPPER(p.$type) LIKE '".strtoupper($name)."%'";
			$result = mysqli_query($db, $query);
			$data = array();
			while ($row = mysqli_fetch_assoc($result))
			{
				$city=$row['city'];
			
				$name = $city;
				
				array_push($data, $name);
			}	
		echo json_encode($data);
	
		}			
		
		
	
		public function get_contain()
		{
			$db = get_instance()->db->conn_id;
			$type = $_POST['type'];
			$name =  $_POST['name_startsWith'];
			
			$query = "select DISTINCT `menu` as v From hotel_menu where UPPER(menu) LIKE '".strtoupper($name)."%' and `menu` is not null and IsActive=0 and parent_menu IS NOT NULL union all
					select DISTINCT name as v from hotel where name is not null and IsActive=0 and UPPER(name) LIKE '".strtoupper($name)."%'";
			 
			$result = mysqli_query($db, $query);
			$data = array();
			while ($row = mysqli_fetch_assoc($result))
			{
				$city=$row['v'];
			
				$name = $city;
				
				array_push($data, $name);
			}	
		echo json_encode($data);
	
		}			
		
		
	public function Restaurant_details($id=NULL,$cid=NULL)
	{	
		$data['active_Restaurant_details'] = 'active';
		$data['title'] = 'Restaurant details';
		$this->session->set_userdata('id', $cid);
		$data1=array(
				'id'=>$cid,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['hotel_details'] = $this->Home_model->get_hotel_details($id);
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$this->load->view('restaurant_details', $data);
		
	}
	
	public function men($id=NULL,$tid=NULL,$cid=NULL)
	{	
		$data['active_OnlineTakeaway'] = 'active';
		$data['title'] = 'Menu';
		$this->session->set_userdata('id', $cid);
		$data1=array(
				'id'=>$cid,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		// $data['table_details'] = $this->Table_model->get_hotel_details($id);
		$data['table'] = $this->Table_model->get_table_details($tid);
		$data['hotel_details'] = $this->Home_model->get_hotel_details($id);
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$this->load->view('table_order', $data);
		
	}		
	
	public function Emenu($id=NULL,$cid=NULL)
	{	
		$data['active_Emenu'] = 'active';
		$data['title'] = 'Emenu';
		$this->session->set_userdata('id', $cid);
		$data1=array(
				'id'=>$cid,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['hotel_details'] = $this->Home_model->get_hotel_details($id);
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$this->load->view('emenu', $data);
		
	}	
	
	public function menu($id=NULL,$tid=NULL,$cid=NULL)
	{	
		$data['active_OnlineTakeaway'] = 'active';
		$data['title'] = 'Menu';
		$this->session->set_userdata('id', $cid);
		$data1=array(
				'id'=>$cid,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['hotel_details'] = $this->Home_model->get_hotel_details($id);
		$data['table'] = $this->Table_model->get_table_details($tid);
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$this->load->view('table_take', $data);
		
	}	
	

	
	//cart
	
		function add_to_cart(){ 
		$data = array(
			'id' => $this->input->post('product_id'), 
			'menu_id' => $this->input->post('menu_id'), 
			'name' => $this->input->post('product_name'), 
			'price' => $this->input->post('product_price'), 
			'productcat' => $this->input->post('productcat'), 
			'qty' => $this->input->post('quantity'), 
			'hotel_id' => $this->input->post('hotel_id'), 
			'producttype' => $this->input->post('producttype'), 
		);
		//print_r($date);
		
		$this->cart->insert($data);
		echo $this->show_cart(); 
	}

	function show_cart(){ 
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			if($items['qty'] > 0)
				{
			$no++;
		 	$output .= "
			<tr>
					<td width='50%' style='padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;'>";
					if($items['productcat']!="Veg")
					{
						$output .= "<img src='http://localhost/KOT/ui/img/nonveg.png' alt='Food logo'>".' '.$items['name']. "</td>";
					}
					else
					{
						$output .= "<img src='http://localhost/KOT/ui/img/veg.png' alt='Food logo'>".' '.$items['name']. "</td>";
					} 
							 		  
			$output .='
						
					<td width="50%" style="text-align:right;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;">
					<i class="fa fa-rupee"></i>'.number_format($items['subtotal']).'
					<br />
					<input type="button" value="-" id="'.$items['rowid'].'"menu_id="'.$items['menu_id'].'"
					product_name="'.$items['name'].'"product_price="'.$items['price'].'"hotel_id="'.$items['hotel_id'].'"producttype="'.$items['producttype'].'"
					quantity="'.$items['qty'].'"productcat="'.$items['productcat'].'" class="romove_cart" style="color:red;border: 0px solid #fff;width:20%;border-radius: 9px 3px 0px;">
					
					<input type="button" value="'.$items['qty'].'" class="" style="margin-left: -5px;border: 0px solid #fff;width:30%;background: pink;">
					
					<input type="button" id="'.$items['rowid'].'"menu_id="'.$items['menu_id'].'" 
					product_name="'.$items['name'].'"product_price="'.$items['price'].'"hotel_id="'.$items['hotel_id'].'"producttype="'.$items['producttype'].'"
					quantity="'.$items['qty'].'"productcat="'.$items['productcat'].'"  value="+" class="add_qty_cart" style="margin-left: -5px;color:green;border: 0px solid #fff;width:20%;border-radius: 0px 2px 6px;">
					</td>
					
				</tr>
				
			';
			}
			
		}
		
		return $output;
	}	
	
	/* function show_cart(){ 
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			if($items['qty'] > 0)
				{
			$no++;
			$output .='
				<tr>
					<td width="30%">'.$items['name'].'</td>
					<td width="40%"><input type="button" value="-" id="'.$items['rowid'].'"menu_id="'.$items['menu_id'].'"
					product_name="'.$items['name'].'"product_price="'.$items['price'].'"hotel_id="'.$items['hotel_id'].'"
					quantity="'.$items['qty'].'" class="romove_cart" style="color:red;border: 0px solid #fff;width:30%">
					<input type="button" value="'.$items['qty'].'" class="" style="margin-left: -5px;border: 0px solid #fff;width:30%">
					<input type="button" id="'.$items['rowid'].'"menu_id="'.$items['menu_id'].'" 
					product_name="'.$items['name'].'"product_price="'.$items['price'].'"hotel_id="'.$items['hotel_id'].'"
					quantity="'.$items['qty'].'" value="+" class="add_qty_cart" style="margin-left: -5px;color:green;border: 0px solid #fff;width:30%"></td>
					
					<td width="20%"><i class="fa fa-rupee"></i>'.number_format($items['subtotal']).'</td>
					<td width="5%">
					
					<button type="button" id="'.$items['rowid'].'" 
					product_name="'.$items['name'].'"product_price="'.$items['price'].'"
					quantity="'.$items['qty'].'" class="romove_cart1 btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i>
</button></td>
				</tr>
			';
			}
		}
		$output .= '
			<tr>
				<th colspan="1"></th>
				<th colspan="1"></th>
				<th colspan="2">'.'Total <i class="fa fa-rupee"></i>'.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	} */

	function load_cart(){ 
		echo $this->show_cart();
	}

	function delete_cart1(){ 
		$data = array(
			'id' =>$this->input->post('row_id'), 
			'menu_id' => $this->input->post('menu_id'), 
			'name' => $this->input->post('product_name'), 
			'price' =>$this->input->post('product_price'), 
			'productcat' =>$this->input->post('productcat'), 
			'hotel_id' =>$this->input->post('hotel_id'), 
			'producttype' =>$this->input->post('producttype'), 
			'qty' => 1, 
		);
		$this->cart->insert1($data);
		echo $this->show_cart();
	}	
	
	
	function add_qty_cart(){ 
		$data = array(
			'id' =>$this->input->post('row_id'), 
			'menu_id' => $this->input->post('menu_id'), 
			'name' => $this->input->post('product_name'), 
			'price' =>$this->input->post('product_price'), 
			'productcat' =>$this->input->post('productcat'), 
			'hotel_id' =>$this->input->post('hotel_id'), 
			'producttype' =>$this->input->post('producttype'), 
			'qty' => 1, 
		);
		$this->cart->insert_new($data);
		echo $this->show_cart();
	}
	
	function delete_cart(){ 
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	} 
	
	public function I_am_restaurant($id=NULL)
	{	
		$data['active_I_am_restaurant'] = 'active';
		$data['title'] = 'I am Restaurants';
		$post_data = $this->input->post();
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data1=array(
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$this->load->view('inroll_restorent', $data);
		
	}
	
		
	public function save_hotel()
	{
		$post_data = $this->input->post();
		$maxid=$post_data['maxid'];
		$img=$_FILES["logo"]["name"];
		$img = str_replace(' ','_',$img);
		$upload_dir = "logo/$maxid";


	if(!is_dir($upload_dir))
	{
		mkdir($upload_dir, 0755);
		chmod($upload_dir, 0755);
	}

		$path="http://localhost/KOT/logo/$maxid/$img";

	move_uploaded_file($_FILES["logo"]["tmp_name"], "$upload_dir/" . $img);	
	
	
	$img1=$_FILES["banner"]["name"];
		$img1 = str_replace(' ','_',$img1);
		$upload_dir1 = "banner/$maxid";


	if(!is_dir($upload_dir1))
	{
		mkdir($upload_dir1, 0755);
		chmod($upload_dir1, 0755);
	}

		$path1="http://localhost/KOT/banner/$maxid/$img1";

	move_uploaded_file($_FILES["banner"]["tmp_name"], "$upload_dir1/" . $img1);
	
	
			$query=$this->Home_model->save_hotel($post_data,$path,$path1);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Added successfully!');
				redirect('Home/I_am_restaurant','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Hotel!');
				redirect('Home/I_am_restaurant','refresh');
			}
	}	
	
	public function save_customer()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$city=$post_data['city'];
		$this->session->set_userdata('city', $city);
			$query=$this->Home_model->save_customer($post_data);
			if($query){
			$data1=array(
				'city'=> $city,
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
				$this->load->view('restaurants', $data);
			}
		
	}	
	
	public function update_customer()
	{
		$post_data = $this->input->post();
			$query=$this->Home_model->update_customer($post_data);
			if($query){
			$data1=array(
				'city'=> $city,
				'id'=>$query,
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($data1);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				$this->load->view('profile', $data);
			}
		
	}	
	
	public function validate_user()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$city=$post_data['city'];
		$this->session->set_userdata('city', $city);
			$query=$this->Home_model->validate_user($post_data);
			if($query){
			
				
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'city'=> $city,
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
			
				//redirect("home/restaurants");

				$this->load->view('restaurants', $data);
			}
			else
			{
					$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
			
								$this->load->view('restaurants', $data);

			}
	}
	
		
	public function checkout($hotel_id=NULL,$tid=NULL,$id=NULL,$producttype=NULL)
	{	
		$data['active_checkout'] = 'active';
		$data['title'] = 'checkout';
		$data['home_info'] = $this->Home_model->get_home_page_setting();
				$data['items'] = $this->cart->contents();
				$data['cart_total'] = $this->cart->total();
				$this->session->set_userdata('id', $id);
		$data1=array(
				'id'=>$id,
				'hotel_id'=>$hotel_id,
				'producttype'=>$producttype,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['table'] = $this->Table_model->get_table_details($tid);
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);

		$this->load->view('table_checkout', $data);
		
	}		
	
	
	
	public function save_customer_checkout()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$id=$post_data['city'];
		$hotel_id=$post_data['hotel_id'];
		$producttype=$post_data['type'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$data['cart_total'] = $this->cart->total();
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);
		
		$query=$this->Home_model->save_customer($post_data);

			if($query){
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'producttype'=>$producttype,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				
				//redirect("home/restaurants");

				$this->load->view('table_checkout', $data);
			}
		
	}	
	
	public function validate_user_checkout()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$id=$post_data['city'];
		$hotel_id=$post_data['hotel_id'];
		$producttype=$post_data['type'];
		echo $table_id;
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$data['table'] = $post_data['table_id'];
		$data['cart_total'] = $this->cart->total();
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);
		$query=$this->Home_model->validate_user($post_data);
			if($query){
				
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'producttype'=>$producttype,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
			
				//redirect("home/restaurants");

				$this->load->view('table_checkout', $data);
			}
			else
			{
					$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
				$this->load->view('table_checkout', $data);

			}
	}

	
	public function save_address()
	{
	
		$post_data = $this->input->post();
		$id=$post_data['id'];
		$hotel_id=$post_data['hotel_id'];
		$producttype=$post_data['producttype'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$data['cart_total'] = $this->cart->total();
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);
		$query=$this->Home_model->save_address($post_data);

			if($query){
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'producttype'=>$producttype,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				
				redirect("home/checkout/$hotel_id/$id/$producttype");

				//$this->load->view('checkout', $data);
			}
		
	}

function clear()
 {
  $this->load->library("cart");
  $this->cart->destroy();
  echo $this->view();
 }

	public function profile($id=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Profile';
		$post_data = $this->input->post();

		$data1=array(
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$this->session->set_userdata('contain', $contain);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$this->load->view('profile', $data);
		
	}
	
	public function address($id=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Address';
		$post_data = $this->input->post();

		$data1=array(
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$this->load->view('address', $data);
		
	}	
	
	public function delete_address($id=NULL,$aid=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Address';
		$post_data = $this->input->post();
		$query=$this->Home_model->delete_address($aid);

		$data1=array(
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		//$data['home_list'] = $this->Home_model->get_hotel_list();
	//	$this->load->view('address', $data);
		$this->load->view('address', $data);


	}
	
	public function update_address()
	{
		$post_data = $this->input->post();
			$query=$this->Home_model->update_address($post_data);
			if($query){
			$data1=array(
				'id'=>$query,
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($data1);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				$this->load->view('address', $data);
			}
		
	}	
	
	public function save_address_profile()
	{
	
		$post_data = $this->input->post();
		$id=$post_data['id'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$query=$this->Home_model->save_address_profile($post_data);

			if($query){
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				
				$this->load->view('address', $data);

				//$this->load->view('checkout', $data);
			}
		
	}	
	
	public function save_cart()
	{
	
		$post_data = $this->input->post();
		$id=$post_data['id'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$query=$this->Home_model->save_cart($post_data);
		$hotel_id=$post_data['hotel_id'];
		$table_id=$post_data['table_id'];
		$producttype=$post_data['producttype'];
			if($query)
			{
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'producttype'=>$producttype,
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($data1);
				
				redirect("home/order/$id");
			    //redirect("home/order/$id");
				//$this->load->view('checkout', $data);
			}
			else
			{
				redirect("table/checkout/$hotel_id/$table_id/$id/$producttype");
				//redirect("home/order1/$id");
			}
		
	}
	
	public function orderHistory($id=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Order';
		$post_data = $this->input->post();

		$data1=array(
				'id'=>$id,
				'hotel_id'=>$hotel_id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['order_list'] = $this->Home_model->get_order_list($id);
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$this->load->view('order', $data);
		
	}	
	 
	public function search($id=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'Search';
		$post_data = $this->input->post();
		$data1=array(
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		

		$this->load->view('search', $data);
		
	}
	
	public function order($id=NULL)
	{	
		$data['active_order'] = 'active';
		$data['title'] = 'track order';
		$data1=array(
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['order_list'] = $this->Home_model->get_order_list_not_deliver($id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		

		$this->load->view('track_order', $data);
		
	}
	
	//ofline
	public function ofTakeaway($id=NULL,$cid=NULL)
	{	
		$data['active_ofTakeaway'] = 'active';
		$data['title'] = 'Menu';
		$this->session->set_userdata('id', $cid);
		$data1=array(
				'id'=>$cid,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['hotel_details'] = $this->Home_model->get_hotel_details($id);
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$this->load->view('offlinetakeaway/menu_oftakeaway', $data);
		
	}
			
	public function validate_user_checkout_of()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$id=$post_data['city'];
		$hotel_id=$post_data['hotel_id'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$data['cart_total'] = $this->cart->total();
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);
		$query=$this->Home_model->validate_user($post_data);
			if($query){
				
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
			
				//redirect("home/restaurants");
				if (isset($post_data['redirect'])) {
				redirect('home/reserveTable/'.$hotel_id, 'refresh');
				}else{
				$this->load->view('offlinetakeaway/checkout', $data);	
				}
				
			}
			else
			{
					$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
				if (isset($post_data['redirect'])) {
				redirect('home/reserveTable/'.$hotel_id, 'refresh');
				}else{
				$this->load->view('offlinetakeaway/checkout', $data);	
				}
				

			}
	}
	
	public function Offcheckout($hotel_id=NULL,$id=NULL,$producttype=NULL)
	{	
		$data['active_checkout'] = 'active';
		$data['title'] = 'checkout';
		$data['home_info'] = $this->Home_model->get_home_page_setting();
				$data['items'] = $this->cart->contents();
				$data['cart_total'] = $this->cart->total();
				$this->session->set_userdata('id', $id);
		$data1=array(
				'id'=>$id,
				'hotel_id'=>$hotel_id,
				'producttype'=>$producttype,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);

		$this->load->view('offlinetakeaway/checkout', $data);
		
	}

	public function reserveTable($hotel_id=NULL)
	{	
		$data['active_checkout'] = 'active';
		$data['title'] = 'checkout';
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);

		$this->load->view('offlinetakeaway/reserve_table', $data);
		
	}
	
	
	public function save_customer_of()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$city=$post_data['city'];
		$this->session->set_userdata('city', $city);
			$query=$this->Home_model->save_customer($post_data);
			if($query){
			$data1=array(
				'city'=> $city,
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
				$this->load->view('offlinetakeaway/restaurants', $data);
			}
		
	}	
	
	public function update_customer_of()
	{
		$post_data = $this->input->post();
			$query=$this->Home_model->update_customer($post_data);
			if($query){
			$data1=array(
				'city'=> $city,
				'id'=>$query,
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($data1);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				$this->load->view('offlinetakeaway/profile', $data);
			}
		
	}	
	
	public function validate_user_of()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$city=$post_data['city'];
		$this->session->set_userdata('city', $city);
			$query=$this->Home_model->validate_user($post_data);
			if($query){
			
				
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'city'=> $city,
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
			
				//redirect("home/restaurants");

				$this->load->view('offlinetakeaway/restaurants', $data);
			}
			else
			{
					$data['home_list']=$this->Home_model->get_city_hotel_list($post_data);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				//$data['home_list'] = $this->Home_model->get_hotel_list();
				$data['home_count'] = $this->Home_model->get_city_hotel_count($post_data);
			
								$this->load->view('offlinetakeaway/restaurants', $data);

			}
	}
	
	
	public function save_customer_checkout_of()
	{
		$post_data = $this->input->post();
		$controller=$post_data['controller'];
		$id=$post_data['city'];
		$hotel_id=$post_data['hotel_id'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$data['cart_total'] = $this->cart->total();
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);
		$query=$this->Home_model->save_customer($post_data);

			if($query){
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				
				//redirect("home/restaurants");
				if (isset($post_data['redirect'])) {
				redirect('home/reserveTable/'.$hotel_id, 'refresh');
				}else{
				$this->load->view('offlinetakeaway/checkout', $data);	
				}
			
			}
		
	}

	public function addReserveTable()
	{
		$post_data = $this->input->post();

		 $res= $this->Home_model->save_reservetable($post_data);
		 header('Content-Type: application/json');
        echo json_encode( $res );
		
	}

		
	


	
	public function save_address_of()
	{
	
		$post_data = $this->input->post();
		$id=$post_data['id'];
		$hotel_id=$post_data['hotel_id'];
		$producttype=$post_data['producttype'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['items'] = $this->cart->contents();
		$data['cart_total'] = $this->cart->total();
		$data['hotel_details'] = $this->Home_model->get_hotel_details($hotel_id);
		$query=$this->Home_model->save_address($post_data);

			if($query){
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'producttype'=>$producttype,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				
				redirect("home/Offcheckout/$hotel_id/$id/$producttype");

				//$this->load->view('checkout', $data);
			}
		
	}


	public function profileof($hotel_id=NULL,$id=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Profile';
		$post_data = $this->input->post();

		$data1=array(
				'id'=>$id,
				'hotel_id'=>$hotel_id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$this->session->set_userdata('contain', $contain);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$this->load->view('offlinetakeaway/profile', $data);
		
	}
	
	public function addressof($hotel_id=NULL,$id=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Address';
		$post_data = $this->input->post();

		$data1=array(
				'id'=>$id,
				'hotel_id'=>$hotel_id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$this->load->view('offlinetakeaway/address', $data);
		
	}	
	
	public function delete_address_of($id=NULL,$aid=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Address';
		$post_data = $this->input->post();
		$query=$this->Home_model->delete_address($aid);

		$data1=array(
				'id'=>$id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		//$data['home_list'] = $this->Home_model->get_hotel_list();
	//	$this->load->view('address', $data);
		$this->load->view('offlinetakeaway/address', $data);


	}
	
	public function update_address_of()
	{
		$post_data = $this->input->post();
			$query=$this->Home_model->update_address($post_data);
			if($query){
			$data1=array(
				'id'=>$query,
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($data1);
				$data['home_info'] = $this->Home_model->get_home_page_setting();
				$this->load->view('offlinetakeaway/address', $data);
			}
		
	}	
	
	public function save_address_profile_of()
	{
	
		$post_data = $this->input->post();
		$id=$post_data['id'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$query=$this->Home_model->save_address_profile($post_data);

			if($query){
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
				
				$this->load->view('offlinetakeaway/address', $data);

				//$this->load->view('checkout', $data);
			}
		
	}	
	
	public function save_cart_of()
	{
	
		$post_data = $this->input->post();
		$id=$post_data['id'];
		$this->session->set_userdata('id', $id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$query=$this->Home_model->save_cart($post_data);
		$hotel_id=$post_data['hotel_id'];
		$producttype=$post_data['producttype'];
			if($query)
			{
			/* 	$this->session->set_userdata('city', $city);
				$this->session->set_userdata('id', $query); */
						$data1=array(
				'id'=>$query,
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($data1);
				
				redirect("home/orderof/$hotel_id/$id");
			    //redirect("home/order/$id");
				//$this->load->view('checkout', $data);
			}
			else
			{
				redirect("home/Offcheckout/$hotel_id/$id/$producttype");
				//redirect("home/order1/$id");
			}
		
	}
	
	public function orderHistoryof($hotel_id=NULL,$id=NULL)
	{	
		$data['active_restaurants'] = 'active';
		$data['title'] = 'My Order';
		$post_data = $this->input->post();

		$data1=array(
				'id'=>$id,
				'hotel_id'=>$hotel_id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		$data['order_list'] = $this->Home_model->get_order_list($id);
		//$data['home_list'] = $this->Home_model->get_hotel_list();
		$this->load->view('offlinetakeaway/order', $data);
		
	}	

	
	public function orderof($hotel_id=NULL,$id=NULL)
	{	
		$data['active_order'] = 'active';
		$data['title'] = 'track order';
		$data1=array(
				'id'=>$id,
				'hotel_id'=>$hotel_id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data1);
		$data['order_list'] = $this->Home_model->get_order_list_not_deliver($id);
		$data['home_info'] = $this->Home_model->get_home_page_setting();
		

		$this->load->view('offlinetakeaway/track_order', $data);
		
	}
}
