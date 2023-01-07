<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
                $this->load->library('session'); 

        if ($this->session->has_userdata('name')) {
        	# code...
        	redirect('dashboard_area/dashboard');
        }


	}

	public function index()
	{
		// $this->load->view('header');
		$this->load->view('login');
		// $this->load->view('footer');
		 
	}

	public function loginAuth(){

		$login_validations = array(

        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'The %s is Required',
                ),

        ),
       
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'This %s is Required',
                ),

        ),
);

	$this->form_validation->set_rules($login_validations);

 	if ($this->form_validation->run() == FALSE) { 
 		$this->session->set_flashdata('login_error','Please fill all required fields'); 
        $this->index();
	}
 	else{
 		$this->load->library('encryption');
 		$form_data = $this->input->post();
 		$data = array(
 			'email' => $form_data['username'],
 			'password' => $form_data['password']
 		);

 		$this->load->model('logins');
 		$checkEmailExist = $this->logins->isEmailExists($data);

 		if(!empty($checkEmailExist)){
 			$user_info = $this->logins->loginAuthentication($data);	
 			if(!empty($user_info)){
 				echo "Login Success";
 				$session_array = array(
 					"name" => $user_info ->first_name, 
 					"id" => $user_info ->id 
 				);
 				$this->session->set_userdata($session_array);
 				redirect('dashboard_area/dashboard');
 			}
 			else{
 				$this->session->set_flashdata('Wrong_Password','Wrong Credentials');
 				$this->index();
 			}
 		}
 		else{
 			$this->session->set_flashdata('Email_Not','Email is not registerd'); 
 			$this->index();
 		}
 	}

		
}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */