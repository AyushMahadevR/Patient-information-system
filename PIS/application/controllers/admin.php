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
    public function pass(){
      if(!$this->session->userdata('logged_in')){
        redirect('');
      } else {
        $this->form_validation->set_rules('oldpass','Old Password','required|callback_oldpassExist');
        $this->form_validation->set_rules('password1','Password','required');
        $this->form_validation->set_rules('password2','Confirm password','required|matches[password1]');
        if($this->form_validation->run() == FALSE){
          $this->load->view('templates/header');
          $this->load->view('admin/pass');
          $this->load->view('templates/footer');
        } else {
          $id = $this->session->userdata('user_id');
          $newpass = md5($this->input->post('password2'));
          $update = $this->admin_model->pass($id,$newpass);
          if($update){

            $this->session->set_flashdata('pass_change','Password changed successfully');
            redirect('index.php/admin/index');
          } else {
            $this->session->set_flashdata('pass_fail','Sorry Password was not updated');
            redirect('index.php/admin/index');
          }
        }
      }
    }
    public function oldpassExist($oldpass){
      $old = md5($oldpass);
      //check in db
      $is_exist = $this->admin_model->oldpassExist($old);

      if($is_exist){
        return true;
      } else {
        $this->form_validation->set_message('oldpassExist','Wrong Old Password');
        return false;
      }
    }
  }
 ?>
