<?php
class passwordReset_model extends CI_Model {
	function __construct()
	{
		parent::__construct();

	}

	public function update_password()
	{
		$post_data = $this->input->post();
		$student_id = $post_data['user_id'];
		$password = $post_data['password'];
		/* encrypt the password using sha1 algorithm */
		$password = do_hash($password);

		$sql = "SELECT student_id from student where student_id='".$student_id."'";
		$record = $this->db->query($sql);
        if ($record->num_rows()>0) {
                $data  = array('password' =>$password);
                $this->db->where('student_id', $student_id);
                return $this->db->update('student',$data);                
        }else{
                return false;
            }
	}


}