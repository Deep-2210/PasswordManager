<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
 
	 public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('profilemodel');
        
        $name = array(
            'name' => $this->session->name
        );
        
        $this->load->view('dashboard/sidehead_bar', $name);
        
        if (!$this->session->has_userdata('name')) {
            redirect('login');
        }
    }

	public function index()
	{
        $this->load->view('dashboard/profile');
		$this->load->view('dashboard/footer'); 
	}

    public function getProfileData(){

        $profile_user_data['profile_data'] = $this->profilemodel->get_profile_data($this->session->id);
        $this->load->view('dashboard/profile' , $profile_user_data);

        $this->load->view('dashboard/footer'); 
    }

     public function profileUpdate()
    {
        $data = $this->input->post();
        // $profile_id = $data['id'];

        $UpdateProfile_validations = array(
            
            array(
                'field' => 'fname',
                'label' => 'First Name',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'This %s is Required'
                )
                
            ),
            array(
                'field' => 'lname',
                'label' => 'Last Name',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'The %s is Required'
                )
            ),
            array(
                'field' => 'passwords',
                'label' => 'Password',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'The %s is Required'
                )
            )
            
        );

        $this->form_validation->set_rules($UpdateProfile_validations);
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('profile_update_error', 'Something Error Occured');
            $this->getProfileData();
        }
        else{
            $updated_data = array(
            "first_name" => $data['fname'],
            "last_name" => $data['lname'],
            "password" => $data['passwords']
            );        
            $this->profilemodel->profile_update($this->session->id, $updated_data);
            $this->session->set_flashdata('profile_update_success', 'Profile Update Successfully');
            redirect('dashboard_area/dashboard');
        } 

    }
    public function deleteProfilePage(){
        $this->load->view('dashboard/profile_delete');
        $this->load->view('dashboard/footer'); 
    }
    public function deleteProfile(){
        if (!empty($this->session->id)) {
            if ($this->profilemodel->profile_delete($this->session->id)) {
                $this->session->set_flashdata('profile_del_success', 'Delete Your Account Successfully');
                redirect('./logout');
            } else {
                $this->session->set_flashdata('profile_del_failed', 'Delete Your Profile Failed');
            }
        }
    }

}

/* End of file profile.php */
/* Location: ./application/controllers/dashboard_area/profile.php */