<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Model {

	public function isEmailExists($data)
	{
		$this->db->select('email');
		$this->db->from('user');
		$this->db->where("email" , $data['email']);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function loginAuthentication($data){
		$this->db->select('*');
		$this->db->from('user');
		$parameter = array(
			"email" => $data['email'],
			"password" => $data['password']
		);

		$this->db->where($parameter);

		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}
}



/* End of file logins.php */
/* Location: ./application/models/logins.php */