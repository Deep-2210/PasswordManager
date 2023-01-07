<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('sendmail_model');
    }

	public function index(){
		$this->load->view('forget_password');
	}

	public function sendEmail(){
		$sendEmail_validations = array(

        array(
                'field' => 'forget_mail',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email',
                'errors' => array(
                        'required' => 'The %s is Required',
                        'valid_email' => 'Email Is Invalid'
               	),

        ),       
	);
		$this->form_validation->set_rules($sendEmail_validations);

		if ($this->form_validation->run() == FALSE) { 
 		$this->session->set_flashdata('mail_error','Something Error Occured'); 
        $this->index();
	}
	else{
 		$form_data = $this->input->post();
 		$email = $form_data['forget_mail'];
 		
 		$data = $this->sendmail_model->isEmailExists($email);

 		if($data->id){
 			
		$this->load->library('email');
		$token = rand(1000 , 99999);
		$token_data = $this->sendmail_model->token($token , $data->id);

		$config = array(
    		'protocol'  => 'smtp',
    		'smtp_host' => 'ssl://smtp.googlemail.com',
    		'smtp_port' => 465,
    		'smtp_user' => 'akhilsachan143@gmail.com',
    		'smtp_pass' => '7389844858akhil',
    		'mailtype'  => 'html',
    		'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");


		$htmlContent = "<div style='margin: auto; width: 30%; border: 1px solid black;  font-size: 18px; font-style: '><div style='padding: 0px!important;  background-color: #ed3929;'><h1 style='padding: 10px; text-align:center ; margin: 0px; color: white'>Password Vault</h1></div><div style='padding: 20px;'><p>Click  the below Reset Button to Reset your password and Create a New One</p><p style'text-align: center;'>One Time accessable Link</p><p><br>";


		$htmlContent .= "<a href='".base_url('send_email/reset?token=').$token."' style='background-color: #003366; border: none; color: white; padding: 15px;text-align: center;text-decoration: none;  font-size: 16px;cursor: pointer; border-radius: 10px; '><strong>Reset Password</strong></a>";

		$htmlContent .= "</p></div><div style='padding: 0px!important;  background-color: #ed3929;'><h4 style='padding: 10px; text-align: center; margin: 0px; color: white'>Thank You for being with us.</h4></div></div>";
		$this->email->set_newline("\r\n");
		
		
		$this->email->to($data->email);
		$this->email->from('akhilsachan143@gmail.com','Password Vault');
		$this->email->subject('Reset Your Password');
		$this->email->message($htmlContent);
		
		if ($this->email->send()) {
			$this->session->set_flashdata('mail_send','Reset Password link sent successfully');
			redirect('login');
		}
		else{
			$this->session->set_flashdata('mail_not_send','Mail not Send');
			redirect('send_email');
		}


 		}
 		else{
 			$this->session->set_flashdata('mail_not_found_error','This email is not registered with us'); 
 			redirect('send_email');
 		}

 	}
}

public function reset(){
	$data = $this->input->get('token');
	$this->session->set_userdata('token' , $data);
	$this->load->view('new_password');
}
public function change_password(){


	 $change_passwords_validation =   array(
	 	array(
                'field' => 'new_password',
                'label' => 'Password',
                'rules' => 'required|trim|regex_match[/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/]|min_length[8]',
                'errors' => array(
                        'required' => 'This %s is Required',
                        'regex_match' => 'Password must contain Alpha-numeric, special characters ',
                        'min_length' => 'Password must contain atleast 8 characters'
                ),

        ),  
        array(
                'field' => 'con_new_password',
                'label' => 'Confirm Password',
                'rules' => 'required|trim|matches[new_password]',
                'errors' => array(
                        'required' => 'This %s is Required',
                        'matches' => 'Password & Confirm Password doesn\'t match'
                        
                ),
        ),
	 );
	 $this->form_validation->set_rules($change_passwords_validation);
	 if ($this->form_validation->run() == FALSE) { 
 	$this->session->set_flashdata('error_reset_pswd','Something Error Occured'); 
       $this->load->view('new_password');
	}
	else{

		$data = $this->input->post();
		$datas = array('password' => $data['new_password']);
		$result = $this->sendmail_model->updatePassword($datas , $this->session->token);
		if($result){
			$this->session->set_flashdata('pswd_changed_success','Please Login');
			$this->sendmail_model->resetToken($this->session->token);
			$this->session->unset_userdata('token');
			redirect('login');
		}
		else{
			$this->session->set_flashdata('pswd_changed_error','vapas Proccess Repead Karo'); 
			$this->load->view('new_password');
		}
		
	}




}
}

/* End of file send_email.php */
/* Location: ./application/controllers/send_email.php */