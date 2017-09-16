<?php
  class Test_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }
	public function getlists(){
		$query = $this->db->get('pis_test');
		return $query->result();
	}

	public function add($data){
		if($query = $this->db->insert('pis_test',$data)){
			return true;
		} else {
			return false;
		}
	}
	public function view($slug){
		$this->db->where('id',$slug);
		$query = $this->db->get('pis_test');
		return $query->row();
	}
	public function update($slug,$data){
		$this->db->where('id',$slug);
		$query = $this->db->update('pis_test',$data);
		if($query){
			return true;
		} else {
			return false;
		}
	}
	public function delete($slug){
		$this->db->where('id',$slug);
		$query = $this->db->delete('pis_test');
	}
  }
