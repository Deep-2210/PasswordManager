<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		if ($this->session->has_userdata('name')) {
			$session_array = array('name', 'id');
        	$this->session->unset_userdata($session_array);
        	redirect('home');
        }
        else{
        	redirect('/');
        }
       
	}

}

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */