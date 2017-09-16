<?php
  class Welcome_model extends CI_model{
    public function __construct(){
      $this->load->database();
    }
    public function login($username,$password){
      $this->db->where('username',$username);
      $this->db->where('password',$password);
      $result = $this->db->get('admin');
      if ($result->num_rows() == 1) {
          return $result->row(0)->id;
      } else {
          return false;
      }
    }
	public function create_user($username,$email,$password){
		$create_user = array(
			'username'	=> $username,
			'email'		=> $email,
			'password' 	=> $password
		);
		// insert into database 
		if($this->db->insert('admin',$create_user)){
			return true;
		}else{
			return false;
		}
	}
	//validation for email
	public function isEmailExist($email){
		$this->db->select('id');
		$this->db->where('email', $email);
		$query = $this->db->get('admin');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	//validation for username
	public function isUsernameExist($username){
		$this->db->select('id');
		$this->db->where('username', $username);
		$query = $this->db->get('admin');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
  }





 ?>
