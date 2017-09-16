<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicine extends CI_Controller {
	public function index(){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 
		//get medicine list from database
		$data['meds'] = $this->medicine_model->getlists();
		//view doctors content
		$this->load->view('templates/header');
		$this->load->view('medicine/index',$data);
		$this->load->view('templates/footer');
	  }
	}
	//add new medicine 
	public function add(){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 
		//set form rules 
		$this->form_validation->set_rules('name','Medicine Name','required');
		$this->form_validation->set_rules('stock','Stock','required');
		$this->form_validation->set_rules('price','Price','required');
		//if not submitted then show the page 
		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header');
		$this->load->view('medicine/add');
		$this->load->view('templates/footer');
		} else {
			//send in the data to model for insert 
			$data = array(
				'name' 			=> $this->input->post('name'),
				'stock' 		=> $this->input->post('stock'),
				'price' => $this->input->post('price')
			);
			$add = $this->medicine_model->add($data);
			if($add == FALSE){
				redirect('index.php/medicine/index');
			}else {
				redirect('index.php/medicine/index');
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
		$data['details'] = $this->medicine_model->view($slug);
		// show the doctor data
		$this->load->view('templates/header');
		$this->load->view('medicine/view',$data);
		$this->load->view('templates/footer');
	  }
	}
	//edit medicine data
	public function edit($slug){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 	
		//set form rules 
		$this->form_validation->set_rules('name','Medicine Name','required');
		$this->form_validation->set_rules('stock','Stock','required');
		$this->form_validation->set_rules('price','Price','required');
		//if not submitted then show the page 
			if($this->form_validation->run() == FALSE){
			  //get specific doctor data
				$data['details'] = $this->medicine_model->view($slug);
				// show the doctor data
				$this->load->view('templates/header');
				$this->load->view('medicine/edit',$data);
				$this->load->view('templates/footer');
			} else {
			//get new userdata
			$data = array(
				'name' 			=> $this->input->post('name'),
				'stock' 		=> $this->input->post('stock'),
				'price' 		=> $this->input->post('price')
			);
			$update = $this->medicine_model->update($slug,$data);
			if($update){
				redirect('index.php/medicine/index');
			} else {
				redirect('index.php/medicine/index');
			}
		  }
		}
	  }
	  //delete doctor 
	  public function delete($slug){
		  $delete = $this->medicine_model->delete($slug);
		  redirect('index.php/medicine/index');
	  }
}
