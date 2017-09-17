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
    public function oldpassExist($oldpass){
      $this->db->select('id');
      $this->db->where('password',$oldpass);
      $query = $this->db->get('admin');
      if($query->num_rows() > 0 ){
        return true;
      } else {
        return false;
      }
    }
  }
