<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctors extends CI_Controller {
	public function index(){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 
		//get doctors list from database
		$data['lists'] = $this->doctor_model->getlists();
		//view doctors content
		$this->load->view('templates/header');
		$this->load->view('doctors/index',$data);
		$this->load->view('templates/footer');
	  }
	}
	public function add(){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 
		//set form rules 
		$this->form_validation->set_rules('name','Doctors Name','required');
		$this->form_validation->set_rules('qualification','Qualificaiton','required');
		$this->form_validation->set_rules('speciality','Speciality','required');
		$this->form_validation->set_rules('experience','Experience','required');
		//if not submitted then show the page 
		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header');
		$this->load->view('doctors/add');
		$this->load->view('templates/footer');
		} else {
			//send in the data to model for insert 
			$data = array(
				'name' 			=> $this->input->post('name'),
				'gender' 		=> $this->input->post('gender'),
				'qualification' => $this->input->post('qualification'),
				'speciality' 	=> $this->input->post('speciality'),
				'experience' 	=>$this->input->post('experience')
			);
			$add = $this->doctor_model->add($data);
			if($add == FALSE){
				redirect('index.php/doctors/index');
			}else {
				redirect('index.php/doctors/index');
			}
		}
	  }
	}
	public function view($slug){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 	
	  //get specific doctor data
		$data['details'] = $this->doctor_model->view($slug);
		// show the doctor data
		$this->load->view('templates/header');
		$this->load->view('doctors/view',$data);
		$this->load->view('templates/footer');
	  }
	}
	public function edit($slug){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 	
		//set form rules 
		$this->form_validation->set_rules('name','Doctors Name','required');
		$this->form_validation->set_rules('qualification','Qualificaiton','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('speciality','Speciality','required');
		$this->form_validation->set_rules('experience','Experience','required');
		//if not submitted then show the page 
			if($this->form_validation->run() == FALSE){
			  //get specific doctor data
				$data['details'] = $this->doctor_model->view($slug);
				// show the doctor data
				$this->load->view('templates/header');
				$this->load->view('doctors/edit',$data);
				$this->load->view('templates/footer');
			} else {
			//get new userdata
			$data = array(
				'name' 			=> $this->input->post('name'),
				'gender' 		=> $this->input->post('gender'),
				'qualification' => $this->input->post('qualification'),
				'speciality' 	=> $this->input->post('speciality'),
				'experience' 	=>$this->input->post('experience')
			);
			$update = $this->doctor_model->update($slug,$data);
			if($update){
				redirect('index.php/doctors/index');
			} else {
				redirect('index.php/doctors/index');
			}
		  }
		}
	  }
	  //delete doctor 
	  public function delete($slug){
		  $delete = $this->doctor_model->delete($slug);
		  redirect('index.php/doctors/index');
	  }
}