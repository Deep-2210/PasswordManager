<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signups extends CI_Model {

	public function insert_user($data){
		return $this->db->insert('user' , $data);
	}

}

/* End of file signup.php */
/* Location: ./application/models/signup.php */