<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordModel extends CI_Model {

public function storePassword($data){
	$this->db->insert('password_storage' , $data);
}

public function fetchPasswords($user_id){

	$this->db->select("id, site_name, email_username, passwords");
	$this->db->from('password_storage');
	$this->db->where('user_id', $user_id);
	$query = $this->db->get();
	$result['password_data'] = $query->result();
	if ($query->num_rows() > 0) {
		return $result;
	}
	else{
		return 0;
	}

}

public function get_account_data($account_id){
	$this->db->select('id, site_name , email_username, passwords');
	$this->db->from(' password_storage');
	$this->db->where('id', $account_id);
	$query = $this->db->get();
	return $query->row();
}

public function updateData($id, $updated_data){

	$this->db->where('id', $id);
	return $this->db->update('password_storage', $updated_data);

}

public function deleteData($id){
	$this->db->where('id', $id);
	return $this->db->delete('password_storage');
}

}

/* End of file showPasswords.php */
/* Location: ./application/models/showPasswords.php */