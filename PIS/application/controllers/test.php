<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
  public function index(){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else {
		//get test list from database
		$data['tests'] = $this->test_model->getlists();
		//view doctors content
		$this->load->view('templates/header');
		$this->load->view('test/index',$data);
		$this->load->view('templates/footer');
	  }
	}
  //add new Test
  public function add(){
    if(!$this->session->userdata('logged_in')){
        redirect('');
      } else {
    //set form rules
    $this->form_validation->set_rules('name','Test Name','required');
    $this->form_validation->set_rules('unit','Units','required');
    $this->form_validation->set_rules('range','Normal Range','required');
    $this->form_validation->set_rules('price','Price','required');
    //if not submitted then show the page
    if($this->form_validation->run() == FALSE){
    $this->load->view('templates/header');
    $this->load->view('test/add');
    $this->load->view('templates/footer');
    } else {
      //send in the data to model for insert
      $data = array(
        'name' 			=> $this->input->post('name'),
        'unit' 		  => $this->input->post('unit'),
        'range'     => $this->input->post('range'),
        'price'     => $this->input->post('price')
      );
      $add = $this->test_model->add($data);
      if($add == FALSE){
        redirect('index.php/test/index');
      }else {
        redirect('index.php/test/index');
      }
    }
    }
  }
  //view medicine specific
    public function view($slug){
    if(!$this->session->userdata('logged_in')){
        redirect('');
      } else {
    //get specific doctor data
    $data['details'] = $this->test_model->view($slug);
    // show the doctor data
    $this->load->view('templates/header');
    $this->load->view('test/view',$data);
    $this->load->view('templates/footer');
    }
  }
  //edit medicine data
  public function edit($slug){
    if(!$this->session->userdata('logged_in')){
        redirect('');
      } else {
    //set form rules
    $this->form_validation->set_rules('name','Test Name','required');
    $this->form_validation->set_rules('unit','Units','required');
    $this->form_validation->set_rules('range','Normal Range','required');
    $this->form_validation->set_rules('price','Price','required');
    //if not submitted then show the page
      if($this->form_validation->run() == FALSE){
        //get specific doctor data
        $data['details'] = $this->test_model->view($slug);
        // show the doctor data
        $this->load->view('templates/header');
        $this->load->view('test/edit',$data);
        $this->load->view('templates/footer');
      } else {
      //get new userdata
      $data = array(
        'name' 			=> $this->input->post('name'),
        'unit' 		  => $this->input->post('unit'),
        'range'     => $this->input->post('range'),
        'price'     => $this->input->post('price')
      );
      $update = $this->test_model->update($slug,$data);
      if($update){
        redirect('index.php/test/index');
      } else {
        redirect('index.php/test/index');
      }
      }
    }
    }
    //delete doctor
    public function delete($slug){
      $delete = $this->test_model->delete($slug);
      redirect('index.php/test/index');
    }


}
