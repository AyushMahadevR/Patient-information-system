<?php
  class Admin_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }
    public function pass($id,$newpass){
      $pass = array(
        'password' => $newpass
      );
      $this->db->where('id',$id);
      $query = $this->db->update('admin',$pass);
      if($query){
        return true;
      } else {
        return false;
      }
    }
  }
