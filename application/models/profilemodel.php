<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilemodel extends CI_Model {

	
	public function get_profile_data($profile_id){

	$this->db->select('first_name , last_name, email , password');
	$this->db->from(' user');
	$this->db->where('id', $profile_id);
	$query = $this->db->get();
	return $query->row();
}

function profile_update($id, $updated_data){

	$this->db->where('id', $id);
	return $this->db->update('user', $updated_data);
}
function profile_delete($id){

	$this->db->where('user_id', $id);
	$this->db->delete('password_storage');
	
	$this->db->where('id', $id);
	return $this->db->delete('user');
}
}

/* End of file profilemodel.php */
/* Location: ./application/models/profilemodel.php */