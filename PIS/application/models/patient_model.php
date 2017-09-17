<?php
  class Patient_model extends CI_Model {
    public function __construct(){
      $this->load->database();
    }
    public function getlists(){
      $this->db->select('*');
      $this->db->from('pis_patient');
      $this->db->join('pis_doctor','pis_doctor.id = pis_patient.doctor_id');
      $query = $this->db->get();
      return $query->result();
    }
    public function add($data){
      if($query = $this->db->insert('pis_patient',$data)){
  			return true;
  		} else {
  			return false;
  		}
    }
    public function getdoctors(){
      $query = $this->db->get('pis_doctor');
      return $query->result_array();
    }
    public function getmedicines(){
      $query = $this->db->get('pis_medicine');
      return $query->result_array();
    }
    public function gettests(){
      $query = $this->db->get('pis_test');
      return $query->result_array();
    }
  }
