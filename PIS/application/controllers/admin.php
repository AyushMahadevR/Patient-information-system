<?php
  class Admin extends CI_Controller {
    public function index(){
      if(!$this->session->userdata('logged_in')){
        redirect('');
      } else {
        $this->load->view('templates/header');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
      }
    }
    public function logout(){
      //unset userdata
      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('user_id');
      $this->session->unset_userdata('username');
      //set flashdata
      $this->session->set_flashdata('loggedout','You have been logged out');
      $this->session->sess_destroy();
      redirect('');
    }
  }
 ?>
