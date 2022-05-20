<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table1 = 'student';    
  
    public function register($post_data)
    {  
        $password = $post_data['password'];
        if(! empty($password)){
           $post_data['password'] = do_hash($password); 
        }
        

        $profile_picture = array_key_exists("profile_picture",$post_data);
        if($profile_picture){
            unset($post_data['profile_picture']);
            $post_data['profile_picture'] = $_POST['profile_picture1'];   
        }      
        return $this->db->insert($this->table1, $post_data);
    }    
        
    
     public function email_check($email)
    {
        $sql1 = "SELECT student_id FROM student WHERE email='".$email."'";
        $record1 = $this->db->query($sql1);
        if ($record1->num_rows()>0) {
            return true;
        }
    }

    public function login($post_data)
    {    

        $email = $post_data['email'];
        $password = $post_data['password'];
        $password = do_hash($password);
        $device_token = $post_data['device_token'];
        $sql1 = "SELECT * FROM student WHERE email = '".$email."' AND password = '".$password."'";
        $record1 = $this->db->query($sql1);
        if ($record1->num_rows()>0) {
            $device_token_update = "UPDATE student SET device_token ='' WHERE device_token='".$device_token."'";
                $result = $this->db->query($device_token_update);
            return $record1->result_array();            
        }
        else{
            return false;
        }
    }

    public function logout($post_data)
    {
        $student_id = $post_data['student_id'];
        $sql1 = "SELECT student_id FROM $this->table1 WHERE student_id = '".$student_id."'";
        $record1 = $this->db->query($sql1);
        if ($record1->num_rows()>0) {
                $device_token_update = "UPDATE student SET device_token ='' WHERE student_id='".$student_id."'";
                $result = $this->db->query($device_token_update);
            return true;
        }

    }

    /*function for make sure the  student id exists*/
    public function user_check($student_id)
    {
        $sql1 = "SELECT s.student_id FROM student s WHERE s.student_id ='".$student_id."'";
        $record = $this->db->query($sql1);
        if ($record->num_rows()>0) {
            return true;
        }   
    }  
  

    public function login_with_facebook($post_data)
    {        
        $facebook_token = $post_data['facebook_token'];
        $device_token = $post_data['device_token'];
        $sql1 = "SELECT student_id,firstname,lastname,email,profile_picture,dob,address_1,address_2,city,state_code,zipcode,country_code,phone_no,'password' loggedin_with FROM student WHERE facebook_token = '".$facebook_token."'";
        $record1 = $this->db->query($sql1);
        if ($record1->num_rows()>0) {
                $device_token_update = "UPDATE student SET device_token ='' WHERE device_token='".$device_token."'";
                $result = $this->db->query($device_token_update);
            return $record1->result_array();
        }        
    }

    public function save_token_with_expiry($post_data,$email)
    {
        if (empty($post_data['latitude'])) {
            unset($post_data['latitude']);
        }
        if (empty($post_data['longitude'])) {
            unset($post_data['longitude']);
        }
        unset($post_data['email']);
        unset($post_data['password']);
        unset($post_data['profile_picture']);
        return $this->db->where('email',$email)->update($this->table1, $post_data);
    }

    public function refresh_token_check($refresh_token)
    {
        $sql = "SELECT refresh_token_expiry FROM student WHERE refresh_token='".$refresh_token."'";
        $record = $this->db->query($sql);        
        if ($record->num_rows()>0) {
            return $record->row('refresh_token_expiry');            
        }
    }

    public function access_token($post_data)
    {
        if (empty($post_data['latitude'])) {
            unset($post_data['latitude']);
        }
        if (empty($post_data['longitude'])) {
            unset($post_data['longitude']);
        }

        return $this->db->where('refresh_token',$post_data['refresh_token'])->update($this->table1, $post_data);
    }
	
	
    /*****************************************************************************************/

    /*function for check email exists or not */
     public function email_exists($email)
    {

        $sql1 = "SELECT student_id FROM student WHERE email='".$email."'";
        $record1 = $this->db->query($sql1);        
        if ($record1->num_rows()>0) {
            return true;
        }else
        {
           return false;
        }
        
    }

    /* forgot password */
    public function fogotPassword($post_data)
    {
        $email = $post_data['email'];
        $sql = "SELECT student_id FROM student WHERE email='".$email."'";
        $record = $this->db->query($sql);
        if ($record->num_rows()>0) {
                return $record->row('student_id');
        }else{
                return false;
            }
    }    
    
    

    
}?>