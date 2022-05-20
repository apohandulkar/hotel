<?php
Class Superadmin Extends MY_Controller{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('admin_api/Superadmin_model');	
	}
	

	public function Register_hotel()
	{	
        $data['active_dashboard'] = 'active';
		$data['title'] = 'New Hotel Register';	
		$data['maxid'] = $this->Superadmin_model->get_max_hotel_id();
		$data['main_content'] = 'superadmin/hotel/add_new_hotel';
		$this->load->view('superadmin/includes/template', $data);			
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
	
	
			$query=$this->Superadmin_model->save_hotel($post_data,$path,$path1);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Added successfully!');
				redirect('superadmin/Superadmin/Hotel','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Hotel!');
				redirect('superadmin/Superadmin/Hotel','refresh');
			}
	}	


	public function Hotel()
	{	
        $data['active_Hotel'] = 'active';
		$data['title'] = 'All Register Hotel';	
		$data['hotelinfo'] = $this->Superadmin_model->get_hotel_list();
		$data['main_content'] = 'superadmin/hotel/hotel_list';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function Deleted_hotel()
	{	
        $data['active_Hotel'] = 'active';
		$data['title'] = 'All Register Hotel';	
		$data['hotelinfo'] = $this->Superadmin_model->get_deleted_hotel_list();
		$data['main_content'] = 'superadmin/hotel/Deleted_hotel_list';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function Edit_hotel($id)
	{	
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Update Hotel Details';	
		$data['hostel_info'] = $this->Superadmin_model->get_hotel_details($id);
		$data['main_content'] = 'superadmin/hotel/edit_new_hotel';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function Update_hotel()
	{
		$post_data = $this->input->post();
		$maxid=$post_data['maxid'];
		$logo1=$post_data['logo1'];
		$banner1=$post_data['banner1'];
		$img=$_FILES["logo"]["name"];
		$img = str_replace(' ','_',$img);
		if($img!='')
		{
		$upload_dir = "logo/$maxid";


			if(!is_dir($upload_dir))
			{
				mkdir($upload_dir, 0755);
				chmod($upload_dir, 0755);
			}

				$path="http://localhost/KOT/logo/$maxid/$img";

			move_uploaded_file($_FILES["logo"]["tmp_name"], "$upload_dir/" . $img);	
			
		}
		else
		{
				$path=$logo1;
		}
		
		$img1=$_FILES["banner"]["name"];
		$img1 = str_replace(' ','_',$img1);
		if($img1!='')
		{
		$upload_dir1 = "banner/$maxid";


		if(!is_dir($upload_dir1))
		{
			mkdir($upload_dir1, 0755);
			chmod($upload_dir1, 0755);
		}

			$path1="http://localhost/KOT/banner/$maxid/$img1";

		move_uploaded_file($_FILES["banner"]["tmp_name"], "$upload_dir1/" . $img1);
		
		}
		else
		{
				$path1=$banner1;

		}
			$query=$this->Superadmin_model->Update_hotel($post_data,$path,$path1);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Update successfully!');
				redirect('superadmin/Superadmin/Hotel','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Hotel!');
				redirect('superadmin/Superadmin/Hotel','refresh');
			}
	}
	public function Delete_hotel($id)
	{	
        $query=$this->Superadmin_model->Delete_hotel($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Delete successfully!');
				redirect('superadmin/Superadmin/Hotel','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Hotel!');
				redirect('superadmin/Superadmin/Hotel','refresh');
			}	
	}

	public function Activate_hotel($id)
	{	
        $query=$this->Superadmin_model->Activate_hotel($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Activate successfully!');
				redirect('superadmin/Superadmin/Deleted_hotel','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Activate Hotel!');
				redirect('superadmin/Superadmin/Deleted_hotel','refresh');
			}	
	}
	
	public function view_hotel($id)
	{	
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Hotel Details';	
		$data['hostel_info'] = $this->Superadmin_model->get_hotel_details($id);
		$data['main_content'] = 'superadmin/hotel/generate_hotel';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function Main_menu()
	{	
        $data['active_Main_menu'] = 'active';
		$data['title'] = 'Main Menu';	
		$data['menu'] = $this->Superadmin_model->get_main_menu();
		$data['main_content'] = 'superadmin/menu/main_menu';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function add_main_menu()
	{	
        $data['active_Main_menu'] = 'active';
		$data['title'] = 'Main Menu';	
		$data['main_content'] = 'superadmin/menu/add_main_menu';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function Save_main_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Superadmin_model->Save_main_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Main Menu Added successfully!');
				redirect('superadmin/Superadmin/Main_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Menu!');
				redirect('superadmin/Superadmin/Main_menu','refresh');
			}
	}
	public function Update_menu($id)
	{	
        $data['active_Main_menu'] = 'active';
		$data['title'] = 'Main Menu';	
		$data['menu_details'] = $this->Superadmin_model->get_main_menu_details($id);
		$data['menu'] = $this->Superadmin_model->get_main_menu();
		$data['main_content'] = 'superadmin/menu/add_main_menu';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function Update_main_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Superadmin_model->Update_main_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Main Menu Update successfully!');
				redirect('superadmin/Superadmin/Main_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Menu!');
				redirect('superadmin/Superadmin/Main_menu','refresh');
			}
	}
	
	public function Delete_menu($id)
	{	
        $query=$this->Superadmin_model->Delete_menu($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Menu Delete successfully!');
				redirect('superadmin/Superadmin/Main_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Menu!');
				redirect('superadmin/Superadmin/Main_menu','refresh');
			}	
	}
		
	public function Sub_menu()
	{	
        $data['active_Sub_menu'] = 'active';
		$data['title'] = 'Sub Menu';	
		$data['menu'] = $this->Superadmin_model->get_sub_menu();
		$data['main_content'] = 'superadmin/menu/sub_menu';
		$this->load->view('superadmin/includes/template', $data);			
	}
		
	public function add_sub_menu()
	{	
        $data['active_Sub_menu'] = 'active';
		$data['title'] = 'Sub Menu';	
		$data['main_content'] = 'superadmin/menu/add_sub_menu';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function Save_sub_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Superadmin_model->Save_sub_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Sub Menu Added successfully!');
				redirect('superadmin/Superadmin/Sub_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Sub Menu!');
				redirect('superadmin/Superadmin/Sub_menu','refresh');
			}
	}
	public function Update_submenu($id)
	{	
        $data['active_Sub_menu'] = 'active';
		$data['title'] = 'Sub Menu';	
		$data['menu_details'] = $this->Superadmin_model->get_sub_menu_details($id);
		$data['menu'] = $this->Superadmin_model->get_sub_menu();
		$data['main_content'] = 'superadmin/menu/add_sub_menu';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function Update_sub_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Superadmin_model->Update_sub_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Sub Menu Update successfully!');
				redirect('superadmin/Superadmin/Sub_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Sub /menu!');
				redirect('superadmin/Superadmin/Sub_menu','refresh');
			}
	}
	
	public function Delete_submenu($id)
	{	
        $query=$this->Superadmin_model->Delete_submenu($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Sub Menu Delete successfully!');
				redirect('superadmin/Superadmin/Sub_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Sub Menu!');
				redirect('superadmin/Superadmin/Sub_menu','refresh');
			}	
	}
	
	public function qr_code()
	{	
      $data['active_qr_code'] = 'active';
		$data['title'] = 'QR Code';	
		$data['hostel_info'] = $this->Superadmin_model->get_hotel_list();
		$data['main_content'] = 'superadmin/hotel/qr_code';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function qr_code_takeway()
	{	
        $data['active_qr_code'] = 'active';
		$data['title'] = 'QR Code';	
		$data['hostel_info'] = $this->Superadmin_model->get_hotel_list();
		$data['main_content'] = 'superadmin/hotel/qr_code_takeway';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function qr_code_reserve_table()
	{	
      $data['active_qr_code'] = 'active';
		$data['title'] = 'QR Code';	
		$data['hostel_info'] = $this->Superadmin_model->get_hotel_list();
		$data['main_content'] = 'superadmin/hotel/qr_code_reserve_table';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function qr_code_info()
	{	
        $data['active_qr_code_info'] = 'active';
		$data['title'] = 'QR Code Info';	
		$data['notification'] = $this->Superadmin_model->get_qr_info();
		$data['main_content'] = 'superadmin/hotel/qr_code_info';
		$this->load->view('superadmin/includes/template', $data);			
	}

	public function import_menu()
	{	
        $data['active_import_menu'] = 'active';
		$data['title'] = 'Import Menu';	
		$data['main_content'] = 'superadmin/menu/import_menu';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function save_import()
	{
		
 // Check form submit or not 
    if($this->input->post('upload') != NULL ){ 
       $data = array(); 
       if(!empty($_FILES['file']['name'])){ 
         // Set preference 
         $config['upload_path'] = 'assets/files/'; 
         $config['allowed_types'] = 'csv'; 
         $config['max_size'] = '10000000'; // max_size in kb 
         $config['file_name'] = $_FILES['file']['name'];

         // Load upload library 
         $this->load->library('upload',$config); 
 
         // File upload
         if($this->upload->do_upload('file')){ 
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            // Reading file
            $file = fopen("assets/files/".$filename,"r");
            $i = 0;
            $numberOfFields = 4; // Total number of fields
            $importData_arr = array();
 
            while (($filedata = fgetcsv($file, 10000000, ",")) !== FALSE) {
               $num = count($filedata );
               
               if($numberOfFields == $num){
                  for ($c=0; $c < $num; $c++) {
                     $importData_arr[$i][] = $filedata [$c];
                  }
               }
               $i++;
            }
            fclose($file);

            $skip = 0;

            // insert import data
            foreach($importData_arr as $userdata){

               // Skip first row
               if($skip != 0){
                  $this->Superadmin_model->insertRecord($userdata);
               }
               $skip ++;
            }
            $data['response'] = 'successfully uploaded '.$filename; 
         }else{ 
            $data['response'] = 'failed'; 
         } 
      }else{ 
         $data['response'] = 'failed'; 
      } 
      // load view 
				redirect('superadmin/Superadmin/Main_menu','refresh');
    }else{
      // load view 
				redirect('superadmin/Superadmin/Main_menu','refresh');
    }

  }  	
  
	public function import_submenu()
	{	
        $data['active_import_submenu'] = 'active';
		$data['title'] = 'Import Sub Menu';	
		$data['main_content'] = 'superadmin/menu/import_submenu';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function save_submenuimport()
	{
		
 // Check form submit or not 
    if($this->input->post('upload') != NULL ){ 
       $data = array(); 
       if(!empty($_FILES['file']['name'])){ 
         // Set preference 
         $config['upload_path'] = 'assets/files1/'; 
         $config['allowed_types'] = 'csv'; 
         $config['max_size'] = '10000000'; // max_size in kb 
         $config['file_name'] = $_FILES['file']['name'];

         // Load upload library 
         $this->load->library('upload',$config); 
 
         // File upload
         if($this->upload->do_upload('file')){ 
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            // Reading file
            $file = fopen("assets/files1/".$filename,"r");
            $i = 0;
            $numberOfFields = 5; // Total number of fields
            $importData_arr = array();
 
            while (($filedata = fgetcsv($file, 10000000, ",")) !== FALSE) {
               $num = count($filedata );
               
               if($numberOfFields == $num){
                  for ($c=0; $c < $num; $c++) {
                     $importData_arr[$i][] = $filedata [$c];
                  }
               }
               $i++;
            }
            fclose($file);

            $skip = 0;

            // insert import data
            foreach($importData_arr as $userdata){

               // Skip first row
               if($skip != 0){
                  $this->Superadmin_model->insertRecord1($userdata);
               }
               $skip ++;
            }
            $data['response'] = 'successfully uploaded '.$filename; 
         }else{ 
            $data['response'] = 'failed'; 
         } 
      }else{ 
         $data['response'] = 'failed'; 
      } 
      // load view 
				redirect('superadmin/Superadmin/Sub_menu','refresh');
    }else{
      // load view 
				redirect('superadmin/Superadmin/Sub_menu','refresh');
    }

  }       
	public function renewal()
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'Hotel renewal';
		$data['hotelinfo'] = $this->Superadmin_model->get_hotel_expired_list();
		$data['main_content'] = 'superadmin/hotel/renewal';
		$this->load->view('superadmin/includes/template', $data);			
	} 
	
	public function Renew_hotel($id)
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'Hotel renewal';
		$data['hotelinfo'] = $this->Superadmin_model->get_hotel_details($id);
		$data['main_content'] = 'superadmin/hotel/hotel_renewal';
		$this->load->view('superadmin/includes/template', $data);			
	}   
	
	public function Save_renewal()
	{	
		$post_data = $this->input->post();		
			$query=$this->Superadmin_model->Save_renewal($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Renew successfully!');
				redirect('superadmin/Superadmin/renewal','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Renew Hotel!');
				redirect('superadmin/Superadmin/renewal','refresh');
			}
	}
	public function notification()
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'notification';
		$data['notification'] = $this->Superadmin_model->get_notification_list();
		$data['main_content'] = 'superadmin/hotel/notification';
		$this->load->view('superadmin/includes/template', $data);			
	}   
	
	public function Save_notification()
	{	
		$post_data = $this->input->post();		
			$query=$this->Superadmin_model->Save_notification($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Notification Renew successfully!');
				redirect('superadmin/Superadmin/notification','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Notification!');
				redirect('superadmin/Superadmin/notification','refresh');
			}
	}
	
	public function Save_qr_code()
	{
		$post_data = $this->input->post();
		//$maxid=$post_data['maxid'];
		$img=$_FILES["logo"]["name"];
		$img = str_replace(' ','_',$img);
		$logoold=$post_data['logoold'];		

		$upload_dir = "Qrlogo";


		if(!is_dir($upload_dir))
		{
			mkdir($upload_dir, 0755);
			chmod($upload_dir, 0755);
		}
		if($img=='')
		{
		$path=$logoold;
		}
		else
		{
		$path="http://localhost/KOT/Qrlogo/$img";
		}

			move_uploaded_file($_FILES["logo"]["tmp_name"], "$upload_dir/" . $img);	
		
			$query=$this->Superadmin_model->Save_qr_code($post_data,$path);
			if($query){
				$this->session->set_flashdata('success_message', 'QR info added successfully!');
				redirect('superadmin/Superadmin/qr_code_info','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add QR  Info!');
				redirect('superadmin/Superadmin/qr_code_info','refresh');
			}
	}	

	public function Home_page_setting()
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'Home Page Setting';
		$data['home_info'] = $this->Superadmin_model->get_home_page_setting();
		$data['main_content'] = 'superadmin/home_page_setting';
		$this->load->view('superadmin/includes/template', $data);			
	}   
	
	public function Save_portal_logo()
	{	
		$post_data = $this->input->post();	

		$img=$_FILES["logo"]["name"];
		$img = str_replace(' ','_',$img);
		$logoold=$post_data['logoold'];		

		$upload_dir = "home_page/logo";


		if(!is_dir($upload_dir))
		{
			mkdir($upload_dir, 0755);
			chmod($upload_dir, 0755);
		}
		if($img=='')
		{
		$path=$logoold;
		}
		else
		{
		$path="http://localhost/KOT/home_page/logo/$img";
		}

		move_uploaded_file($_FILES["logo"]["tmp_name"], "$upload_dir/" . $img);	
		
		$query=$this->Superadmin_model->Save_portal_logo($path);
		if($query){
			$this->session->set_flashdata('success_message', 'Logo Save successfully!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to Add logo!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}
	}	
	
	public function Save_home_banner()
	{	
		$post_data = $this->input->post();	

		$img=$_FILES["banner"]["name"];
		$img = str_replace(' ','_',$img);
		$logoold=$post_data['bannerold'];		

		$upload_dir = "home_page/banner";


		if(!is_dir($upload_dir))
		{
			mkdir($upload_dir, 0755);
			chmod($upload_dir, 0755);
		}
		if($img=='')
		{
		$path=$bannerold;
		}
		else
		{
		$path="http://localhost/KOT/home_page/banner/$img";
		}

		move_uploaded_file($_FILES["banner"]["tmp_name"], "$upload_dir/" . $img);	
		
		$query=$this->Superadmin_model->Save_home_banner($path);
		if($query){
			$this->session->set_flashdata('success_message', 'Banner Save successfully!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to Add Banner!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}
	}
		
	public function Save_middle_images()
	{	
		$post_data = $this->input->post();	

		$img=$_FILES["middle_image"]["name"];
		$img = str_replace(' ','_',$img);
		$logoold=$post_data['bannerold'];		

		$upload_dir = "home_page/middle_image";


		if(!is_dir($upload_dir))
		{
			mkdir($upload_dir, 0755);
			chmod($upload_dir, 0755);
		}
		if($img=='')
		{
		$path=$bannerold;
		}
		else
		{
		$path="http://localhost/KOT/home_page/middle_image/$img";
		}

		move_uploaded_file($_FILES["middle_image"]["tmp_name"], "$upload_dir/" . $img);	
		
		$query=$this->Superadmin_model->Save_middle_images($path);
		if($query){
			$this->session->set_flashdata('success_message', 'Banner Save successfully!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to Add Banner!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}
	}
		
	public function Save_footer_image()
	{	
		$post_data = $this->input->post();	

		$img=$_FILES["footer_image"]["name"];
		$img = str_replace(' ','_',$img);
		$logoold=$post_data['bannerold'];		

		$upload_dir = "home_page/footer_image";


		if(!is_dir($upload_dir))
		{
			mkdir($upload_dir, 0755);
			chmod($upload_dir, 0755);
		}
		if($img=='')
		{
		$path=$bannerold;
		}
		else
		{
		$path="http://localhost/KOT/home_page/footer_image/$img";
		}

		move_uploaded_file($_FILES["footer_image"]["tmp_name"], "$upload_dir/" . $img);	
		
		$query=$this->Superadmin_model->Save_footer_image($path);
		if($query){
			$this->session->set_flashdata('success_message', 'Banner Save successfully!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to Add Banner!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}
	}
	
	public function Save_banner_text()
	{	
		$post_data = $this->input->post();	

		$query=$this->Superadmin_model->Save_banner_text($post_data);
		if($query){
			$this->session->set_flashdata('success_message', 'Banner Text Save successfully!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to Add Banner Text!');
			redirect('superadmin/Superadmin/Home_page_setting','refresh');
		}
	}	
	
	public function Gst_tax()
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'Gst Tax Category';
		$data['gst'] = $this->Superadmin_model->get_gst_tax();
		$data['main_content'] = 'superadmin/menu/gst_tax';
		$this->load->view('superadmin/includes/template', $data);			
	}   
	
	public function Add_tax_category()
	{	
        $data['active_Sub_menu'] = 'active';
		$data['title'] = 'Tax Category';	
		$data['main_content'] = 'superadmin/menu/add_tax_category';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function save_gst_tax()
	{	
		$post_data = $this->input->post();	

		$query=$this->Superadmin_model->save_gst_tax($post_data);
		if($query){
			$this->session->set_flashdata('success_message', 'Tax Save successfully!');
			redirect('superadmin/Superadmin/Gst_tax','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to Add Tax!');
			redirect('superadmin/Superadmin/Gst_tax','refresh');
		}
	}
	
	public function Update_gst_category($id)
	{	
        $data['active_Main_menu'] = 'active';
		$data['title'] = 'Update Tax Category';	
		$data['gst_details'] = $this->Superadmin_model->get_gst_cat_details($id);
		$data['main_content'] = 'superadmin/menu/add_tax_category';
		$this->load->view('superadmin/includes/template', $data);			
	}
	
	public function Update_tax_category()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Superadmin_model->Update_tax_category($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Tax Update successfully!');
				redirect('superadmin/Superadmin/Gst_tax','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Tax!');
				redirect('superadmin/Superadmin/Gst_tax','refresh');
			}
	}
	
	
		
	public function Delete_category($id)
	{	
        $query=$this->Superadmin_model->Delete_category($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Category Delete successfully!');
				redirect('superadmin/Superadmin/Gst_tax','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Category!');
				redirect('superadmin/Superadmin/Gst_tax','refresh');
			}	
	}
		
}?>