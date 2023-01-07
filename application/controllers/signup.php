<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
                $this->load->library('session'); 

	}

	public function index(){
		// $this->load->view('header');
		$this->load->view('signup');
		// $this->load->view('footer');
	}
	public function createAccount(){

		$signup_validations = array(

        array(
                'field' => 'fname',
                'label' => 'First Name',
                'rules' => 'required|alpha|trim',
                'errors' => array(
                        'required' => 'The %s is Required',
                        'alpha' => 'Only Alphabets are allowed'
                ),

        ),
        array(
                'field' => 'lname',
                'label' => 'Last Name',
                'rules' => 'required|alpha|trim',
                'errors' => array(
                        'required' => 'The %s is Required',
                        'alpha' => 'Only Alphabets are allowed'
                ),
        ),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|trim|is_unique[user.email]',
                'errors' => array(
                        'required' => 'The %s is Required',
                        'valid_email' => 'Invalid E-mail address',
                        'is_unique' => 'This email is already registered'
                ),
        ),
        array(
                'field' => 'pswd',
                'label' => 'Password',
                'rules' => 'required|trim|regex_match[/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/]|min_length[8]',
                'errors' => array(
                        'required' => 'This %s is Required',
                        'regex_match' => 'Password must contain Alpha-numeric, special characters ',
                        'min_length' => 'Password must contain atleast 8 characters'
                ),

        ),
        array(
                'field' => 'confirm_pswd',
                'label' => 'Confirm Password',
                'rules' => 'required|trim|matches[pswd]',
                'errors' => array(
                        'required' => 'This %s is Required',
                        'matches' => 'Password & Confirm Password doesn,t match'
                        
                ),
        ),
);

	$this->form_validation->set_rules($signup_validations);

 	if ($this->form_validation->run() == FALSE) { 
 	$this->session->set_flashdata('error','Something Error Occured'); 
        $this->index();
	}
 	else{
 		$form_data = $this->input->post();
 		$data = array(
 			'first_name' => $form_data['fname'],
 			'last_name' => $form_data['lname'],
 			'email' => $form_data['email'],
 			'password' => $form_data['pswd']
 		);

 		$this->load->model('signups');

 		if($this->signups->insert_user($data)){ 
 		     redirect('login');
 		}

 	}

		
}

}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */