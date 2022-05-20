<?php
Class Hotel Extends MY_Controller{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('hotel_api/Hotel_model');
		$this->load->model('hotel_api/Table_model');

        
        //date_default_timezone_set("Asia/Kolkata");
        //date_default_timezone_get();		
	}
	

	public function Register_hotel()
	{	
        $data['active_dashboard'] = 'active';
		$data['title'] = 'New Hotel Register';	
		$data['main_content'] = 'hotel/hotel/add_new_hotel';
		$this->load->view('hotel/includes/template', $data);			
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
	
	
			$query=$this->Hotel_model->save_hotel($post_data,$path,$path1);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Added successfully!');
				redirect('hotel/Hotel/Hotel','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Hotel!');
				redirect('hotel/Hotel/Hotel','refresh');
			}
	}	


	public function Hotel()
	{	
        $data['active_Hotel'] = 'active';
		$data['title'] = 'All Register Hotel';	
		$data['hotelinfo'] = $this->Hotel_model->get_hotel_list();
		$data['main_content'] = 'hotel/hotel/hotel_list';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function ReserveTableQrCode()
	{	
       $data['active_Hotel'] = 'active';
		$data['title'] = 'All Register Hotel';	
		$data['main_content'] = 'hotel/hotel/qr_code_reserve_table';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function Edit_hotel()
	{	
		$id=$this->session->userdata('hotel_id');
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Update Hotel Details';	
		$data['hostel_info'] = $this->Hotel_model->get_hotel_details($id);
		$data['main_content'] = 'hotel/hotel/edit_new_hotel';
		$this->load->view('hotel/includes/template', $data);			
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
			$query=$this->Hotel_model->Update_hotel($post_data,$path,$path1);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Update successfully!');
				redirect('hotel/Hotel/Edit_hotel','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Hotel!');
				redirect('hotel/Hotel/Edit_hotel','refresh');
			}
	}
	public function Delete_hotel($id)
	{	
        $query=$this->Hotel_model->Delete_hotel($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Delete successfully!');
				redirect('hotel/Hotel/Hotel','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Hotel!');
				redirect('hotel/Hotel/Hotel','refresh');
			}	
	}
	
	public function view_hotel($id)
	{	
        $data['active_Hotel'] = 'active';
		$data['title'] = 'Hotel Details';	
		$data['hostel_info'] = $this->Hotel_model->get_hotel_details($id);
		$data['main_content'] = 'hotel/Hotel/generate_hotel';
		$this->load->view('hotel/includes/template', $data);			
	}
	
	public function sample_menu()
	{	
        $data['active_sample_menu'] = 'active';
		$data['title'] = 'Sample Menu';	
		$data['menu'] = $this->Hotel_model->get_sample_menu();
		$data['main_content'] = 'hotel/menu/sample_menu';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function sample_submenu()
	{	
        $data['active_sample_submenu'] = 'active';
		$data['title'] = 'Sample Sub Menu';	
		$data['menu'] = $this->Hotel_model->get_sample_submenu();
		$data['main_content'] = 'hotel/menu/sample_submenu';
		$this->load->view('hotel/includes/template', $data);			
	}
	public function Main_menu()
	{	
        $data['active_Main_menu'] = 'active';
		$data['title'] = 'Main Menu';	
		$data['menu'] = $this->Hotel_model->get_main_menu();
		$data['main_content'] = 'hotel/menu/main_menu';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function add_main_menu()
	{	
        $data['active_Main_menu'] = 'active';
		$data['title'] = 'Main Menu';	
		$data['main_content'] = 'hotel/menu/add_main_menu';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function Save_main_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Hotel_model->Save_main_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Main Menu Added successfully!');
				redirect('hotel/Hotel/Main_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Menu!');
				redirect('hotel/Hotel/Main_menu','refresh');
			}
	}
	public function Update_menu($id)
	{	
        $data['active_Main_menu'] = 'active';
		$data['title'] = 'Main Menu';	
		$data['menu_details'] = $this->Hotel_model->get_main_menu_details($id);
		$data['menu'] = $this->Hotel_model->get_main_menu();
		$data['main_content'] = 'hotel/menu/add_main_menu';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function Update_main_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Hotel_model->Update_main_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Main Menu Update successfully!');
				redirect('hotel/Hotel/Main_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Menu!');
				redirect('hotel/Hotel/Main_menu','refresh');
			}
	}
	
	public function Delete_menu($id)
	{	
        $query=$this->Hotel_model->Delete_menu($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Menu Delete successfully!');
				redirect('hotel/Hotel/Main_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Menu!');
				redirect('hotel/Hotel/Main_menu','refresh');
			}	
	}
		
	public function Sub_menu()
	{	
        $data['active_Sub_menu'] = 'active';
		$data['title'] = 'Sub Menu';	
		$data['menu'] = $this->Hotel_model->get_sub_menu();
		$data['main_content'] = 'hotel/menu/sub_menu';
		$this->load->view('hotel/includes/template', $data);			
	}
		
	public function add_sub_menu()
	{	
        $data['active_Sub_menu'] = 'active';
		$data['title'] = 'Sub Menu';	
		$data['main_content'] = 'hotel/menu/add_sub_menu';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function Save_sub_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Hotel_model->Save_sub_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Sub Menu Added successfully!');
				redirect('hotel/Hotel/Sub_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Sub Menu!');
				redirect('hotel/Hotel/Sub_menu','refresh');
			}
	}
	public function Update_submenu($id)
	{	
        $data['active_Sub_menu'] = 'active';
		$data['title'] = 'Sub Menu';	
		$data['menu_details'] = $this->Hotel_model->get_sub_menu_details($id);
		$data['menu'] = $this->Hotel_model->get_sub_menu();
		$data['main_content'] = 'hotel/menu/add_sub_menu';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function Update_sub_menu()
	{	
		$post_data = $this->input->post();
		
		
			$query=$this->Hotel_model->Update_sub_menu($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Sub Menu Update successfully!');
				redirect('hotel/Hotel/Sub_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Update Sub /menu!');
				redirect('hotel/Hotel/Sub_menu','refresh');
			}
	}
	
	public function Delete_submenu($id)
	{	
        $query=$this->Hotel_model->Delete_submenu($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Sub Menu Delete successfully!');
				redirect('hotel/Hotel/Sub_menu','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Sub Menu!');
				redirect('hotel/Hotel/Sub_menu','refresh');
			}	
	}
	
	public function qr_code($id)
	{	
        $data['active_qr_code'] = 'active';
		$data['title'] = 'QR Code';	
		$data['hostel_info'] = $this->Hotel_model->get_hotel_details($id);
		$data['main_content'] = 'hotel/hotel/qr_code';
		$this->load->view('hotel/includes/template', $data);			
	}

	public function import_menu()
	{	
        $data['active_import_menu'] = 'active';
		$data['title'] = 'Import Menu';	
		$data['main_content'] = 'hotel/menu/import_menu';
		$this->load->view('hotel/includes/template', $data);			
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
                  $this->Hotel_model->insertRecord($userdata);
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
				redirect('hotel/Hotel/Main_menu','refresh');
    }else{
      // load view 
				redirect('hotel/Hotel/Main_menu','refresh');
    }

  }  	
  
	public function import_submenu()
	{	
        $data['active_import_submenu'] = 'active';
		$data['title'] = 'Import Sub Menu';	
		$data['main_content'] = 'hotel/menu/import_submenu';
		$this->load->view('hotel/includes/template', $data);			
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
                  $this->Hotel_model->insertRecord1($userdata);
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
				redirect('hotel/hotel/Sub_menu','refresh');
    }else{
      // load view 
				redirect('hotel/hotel/Sub_menu','refresh');
    }

  }       
	public function renewal()
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'Hotel renewal';
		$data['hotelinfo'] = $this->Hotel_model->get_hotel_expired_list();
		$data['main_content'] = 'hotel/Hotel/renewal';
		$this->load->view('hotel/includes/template', $data);			
	} 
	
	public function Renew_hotel($id)
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'Hotel renewal';
		$data['hotelinfo'] = $this->Hotel_model->get_hotel_details($id);
		$data['main_content'] = 'hotel/Hotel/hotel_renewal';
		$this->load->view('hotel/includes/template', $data);			
	}   
	
	public function Save_renewal()
	{	
		$post_data = $this->input->post();		
			$query=$this->Hotel_model->Save_renewal($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Hotel Renew successfully!');
				redirect('hotel/hotel/renewal','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Renew Hotel!');
				redirect('hotel/hotel/renewal','refresh');
			}
	}
	public function notification()
	{	
        $data['active_renewal'] = 'active';
		$data['title'] = 'notification';
		$data['notification'] = $this->Hotel_model->get_notification_list();
		$data['main_content'] = 'hotel/Hotel/notification';
		$this->load->view('hotel/includes/template', $data);			
	}   
	
	public function Save_notification()
	{	
		$post_data = $this->input->post();		
			$query=$this->Hotel_model->Save_notification($post_data);
			if($query){
				$this->session->set_flashdata('success_message', 'Notification Renew successfully!');
				redirect('hotel/Hotel/notification','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Add Notification!');
				redirect('hotel/Hotel/notification','refresh');
			}
	}

	public function Table()
	{
		// $data['active_Table'] = 'active';
		// $data['title'] = 'Table Management';	
		// $data['waiter'] = $this->Table_model->get_table_list();
		// $data['main_content'] = 'hotel/table/list';
		// $this->load->view('hotel/includes/template', $data);	

		$data['active_qr_code'] = 'active';
		$data['title'] = 'Table QR Code Management';	
		$data['main_content'] = 'hotel/table/table_qrcode';
		$this->load->view('hotel/includes/template', $data);
	}

	public function Add_table()
	{
		$data['active_Table'] = 'active';
		$data['title'] = 'Add table';	
		$data['main_content'] = 'hotel/table/add';
		$this->load->view('hotel/includes/template', $data);
	}
	public function List_table()
	{
		$id=$this->session->userdata('hotel_id');
		$data['active_Table'] = 'active';
		$data['title'] = 'List table';
		$data['uid'] =$this->session->userdata('hotel_id');	
		$data['menu'] = $this->Table_model->get_table_list();
		$data['hostel_info'] = $this->Hotel_model->get_hotel_details($id);
		$data['main_content'] = 'hotel/table/list';
		$this->load->view('hotel/includes/template', $data);
	}

	public function save_table()
	{
		$post_data = $this->input->post();
		$query=$this->Table_model->Save_table($post_data);
		if($query){
			$this->session->set_flashdata('success_message', 'Table Added successfully!');
			redirect('hotel/Hotel/Table','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to Add Table!');
			redirect('hotel/Hotel/Table','refresh');
		}
	}

	public function Edit_table($id)
	{
		$data['active_Table'] = 'active';
		$data['title'] = 'Add table';	
		$data['main_content'] = 'hotel/table/edit';
		$data['table'] = $this->Table_model->get_table_details($id);
		$this->load->view('hotel/includes/template', $data);
	}

	public function update_table()
	{
		$post_data = $this->input->post();
		$query=$this->Table_model->update_table($post_data);
		if($query){
			$this->session->set_flashdata('success_message', 'Table update successfully!');
			redirect('hotel/Hotel/Table','refresh');
		}else{
			$this->session->set_flashdata('failure_message', 'You are fail to update Table!');
			redirect('hotel/Hotel/Table','refresh');
		}
	}

	public function Delete_table($id)
	{	
        $query=$this->Table_model->Delete_table($id);
			if($query){
				$this->session->set_flashdata('success_message', 'Table Delete successfully!');
				redirect('hotel/Hotel/Table','refresh');
			}else{
				$this->session->set_flashdata('failure_message', 'You are fail to Delete Table!');
				redirect('hotel/Hotel/Table','refresh');
			}	
	}

	public function print($hid=NULL,$tid=NULL)
	{	
		$data['title'] = 'Print QR';
		$data['hid'] = $hid;
		$data['tid'] = $tid;
		$this->load->view('hotel/table/print', $data);
	  
	}
	
	

	 	
	
}?>