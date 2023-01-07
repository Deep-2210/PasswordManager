<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail_model extends CI_Model {

	public function isEmailExists($email){
		$this->db->select('email , id');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		$result = $query->row();
		
		if(!empty($result)){
			return $result;
		}
		else{
			return 0;
		}

	}

	function token($token , $id){
		$this->db->set('token', $token);
		$this->db->where('id', $id);
		$this->db->update('user');
	}

	function updatePassword($data , $token){
		$this->db->set('password', $data['password']);
		$this->db->where('token', $token);
		if($this->db->update('user')==1){
			return 1;
		}
		else{
			return 0;
		}
	}

	function resetToken($token){
		$this->db->set('token', '');
		$this->db->where('token', $token);
		return $this->db->update('user');
	}

}

/* End of file sendmail_model.php */
/* Location: ./application/models/sendmail_model.php */