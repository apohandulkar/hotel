<?php 
$config['exotel_sid'] = "satorihealth"; 
$config['exotel_token'] = "7971518e1648cf0ab1cdb742a2da457cb2b45054";


$config['notification_for_attend_event'] = array("name is attending eventName event'","attend_event"); 
$config['notification_for_canceled_event'] = array("name won't be attend","canceled_event"); 

$config['notification_for_post_comment'] = array("name commented on your event","comment_event"); 
$config['notification_for_comment_reply'] = array("name has replied to your comment","comment_event"); 

$config['notification_for_invite_friends'] = array("name has sent you an invite to eventName event","my_invitation_event_list"); 

$config['notification_for_accept_invitation'] = array("name is attending eventName event","accept_invitation");

$config['notification_for_decline_invitation'] = array("name has declined invite","decline_invitation");


$config['notification_add_event_in_favourite_category'] = array("name is hosting a new event","fav_event_created"); 


$config['notification_facebook_invitation'] = array("name has sent you an invite to eventName event","invitation_event_list"); 

$config['notification_for_organizer_event_canceled'] = array("The event is canceled by organizer","event_list"); 

////////////////////////////////////////////////////

$gender = array(  ''  => 'Please Select',
					  'Male'    => 'Male',
					  'Female'    => 'Female'
					);
$config['gender'] = $gender; 

/* For studio status*/
$active = array(  ''  => 'Please Select',
                 'Yes'    => 'Yes',
                 'No'    => 'No'
               );

$config['active'] = $active;

$autorenew = array(  ''  => 'Please Select',
                 'No'    => 'No',
                 'Yes'    => 'Yes'
               );
$config['autorenew'] = $autorenew;


/* Add Customer form validation */
$config['save_customer'] = array(
               array(
                     'field'   => 'Client_name',
                     'label'   => 'Business Name of the client',
                     'rules'   => 'trim|required'
                  ),               
				  array(
                     'field'   => 'address',
                     'label'   => 'Address of the Client',
                     'rules'   => 'trim|required'
                  ),	
				  array(
                     'field'   => 'Contact_Person_name',
                     'label'   => 'Contact Person',
                     'rules'   => 'trim|required'
                  ),
				  array(
                     'field'   => 'Mobile_No_of_Concerned_Person',
                     'label'   => 'Mobile',
                     'rules'   => 'trim|required|integer|min_length[10]|max_length[10]'
                  ),
				  array(
                     'field'   => 'Email_id',
                     'label'   => 'Email id',
                     'rules'   => 'trim|required|valid_email'
                  ),
				  array(
                     'field'   => 'pan_no',
                     'label'   => 'pan no',
                     'rules'   => 'trim|required'
                  )			  
            ); 
			
			/* Update Customer form validation */
$config['update_customer'] = array(
                           array(
                     'field'   => 'Client_name',
                     'label'   => 'Name of the client',
                     'rules'   => 'trim|required'
                  ),               
				  array(
                     'field'   => 'address',
                     'label'   => 'Address of the Client',
                     'rules'   => 'trim|required'
                  ),	
				  array(
                     'field'   => 'Contact_Person_name',
                     'label'   => 'Contact Person',
                     'rules'   => 'trim|required'
                  ),
				  array(
                     'field'   => 'Mobile_No_of_Concerned_Person',
                     'label'   => 'Mobile',
                     'rules'   => 'trim|required|integer|min_length[10]|max_length[10]'
                  ),
				  array(
                     'field'   => 'Email_id',
                     'label'   => 'Email id',
                     'rules'   => 'trim|required|valid_email'
                  )	  
            ); 		

			/* Update Customer form validation */
$config['save_JE'] = array(
                  array(
                     'field'   => 'client_id',
                     'label'   => 'Name of the client',
                     'rules'   => 'trim|required'
                  ),               
				  array(
                     'field'   => 'JE_date',
                     'label'   => 'JE Date',
                     'rules'   => 'trim|required'
                  ),	
				  array(
                     'field'   => 'from_date',
                     'label'   => 'From date',
                     'rules'   => 'trim|required'
                  ),
				  array(
                     'field'   => 'to_date',
                     'label'   => 'To date',
                     'rules'   => 'trim|required'
                  ),
				  array(
                     'field'   => 'mode_of_payment',
                     'label'   => 'Mode Of Payment',
                     'rules'   => 'trim|required'
                  )
			 
            ); 					
			
			
		

?>