<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function login(){
		//set rules
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		//check if the form is not submitted (first error)
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('login');
			} else {
				//get username and password
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				//get user_id if logged in successfully
				$user_id = $this->welcome_model->login($username,$password);
				if($user_id){
					//create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => 'true'
					);
					$this->session->set_userdata($user_data);
					redirect('index.php/admin');
				} else {
					$this->session->set_flashdata('login_failed','Login invalid .');
					redirect('');
				}
			}
	}
	//register user 
	public function register(){
		//set rules for form_validation
		$this->form_validation->set_rules('username','Username','required|trim|callback_isUsernameExist');
		$this->form_validation->set_rules('email','Email','required|valid_email|trim|callback_isEmailExist');
		$this->form_validation->set_rules('password','Password','required|trim');
		//check if the form submitted has errors
		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		} else {
			//get form input data
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			//create user 
			$create_user = $this->welcome_model->create_user($username,$email,$password);
			// if true success else failed 
			if($create_user == TRUE){
				$this->session->set_flashdata('register_success','You are registered . You can now login ');
				redirect('');
			}else{
				$this->session->set_flashdata('register_failed','Registeration failed.Please try again or contact customercare');
				redirect('');
			} 
		}
	}
	public function isEmailExist($email) {
    //check in db
    $is_exist = $this->welcome_model->isEmailExist($email);

		if ($is_exist) {
			$this->form_validation->set_message('isEmailExist', 'Email address already exist.');    
			return false;
		} else {
			return true;
		}
	}
	public function isUsernameExist($username) {
    //check in db
    $is_exist = $this->welcome_model->isUsernameExist($username);

		if ($is_exist) {
			$this->form_validation->set_message('isUsernameExist', 'Username already exist.');    
			return false;
		} else {
			return true;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
