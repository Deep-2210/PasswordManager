<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('about_website');
		$this->load->view('middle');
		$this->load->view('footer');
	}

	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */