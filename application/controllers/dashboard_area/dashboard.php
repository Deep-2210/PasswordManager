<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('PasswordModel');
        
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
        $password_data = $this->PasswordModel->fetchPasswords($this->session->id);
        $this->load->view('dashboard/show_accounts', $password_data);
        $this->load->view('dashboard/footer');  
    }
    
    // generate password

    public function generate_password()
    {
        $this->load->view('dashboard/box_spacing');
        $this->load->view('generate_password');
        $this->load->view('dashboard/footer');
    }

    // For Insert Data
    public function add_new_form()
    {
        $this->load->view('dashboard/add_password');
        $this->load->view('dashboard/footer');
    }
    
    public function StorePassword()
    {
        
        $StorePassword_validations = array(
            
            array(
                'field' => 'title',
                'label' => 'Site Title',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'This %s is Required'
                )
                
            ),
            array(
                'field' => 'euname',
                'label' => 'User Name or email',
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
        
        $this->form_validation->set_rules($StorePassword_validations);
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pswd_store_error', 'Something Error Occured');
            $this->add_new_form();
        } else {
            
            $form_data = $this->input->post();
            $data      = array(
                'site_name' => $form_data['title'],
                'email_username' => $form_data['euname'],
                'passwords' => $form_data['passwords'],
                'user_id' => $this->session->id
            );
            
            
            $this->load->model('PasswordModel');
            $this->PasswordModel->storePassword($data);
            redirect('dashboard_area/dashboard');
        }
        
    }
    
    // For getting id
    public function accountUpdateId($pswd_id)
    {
        $data['account'] = $this->PasswordModel->get_account_data($pswd_id);
        
        $this->load->view('dashboard/update_password', $data);

        $this->load->view('dashboard/footer');
    }
    
    // For Update Data
    
    public function update_data(){
    	$data = $this->input->post();
        $password_id = $data['id'];

        $UpdatePassword_validations = array(
            
            array(
                'field' => 'title',
                'label' => 'Site Title',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'This %s is Required'
                )
                
            ),
            array(
                'field' => 'email',
                'label' => 'User Name or email',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'The %s is Required'
                )
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'The %s is Required'
                )
            )
            
        );

        $this->form_validation->set_rules($UpdatePassword_validations);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pswd_update_error', 'Something Error Occured');
            $this->accountUpdateId($password_id);
        }
        else{
        	$updated_data = array(
            "site_name" => $data['title'],
            "email_username" => $data['email'],
            "passwords" => $data['password']
        	);        
			$this->PasswordModel->updateData($password_id, $updated_data);
            $this->session->set_flashdata('update_success', 'Update Successfully');
        	redirect('dashboard_area/dashboard');
        }        
    }
    
    
    // For Delete Data
    
    public function delete_data($pswd_id){        
        if (!empty($pswd_id)) {
            if ($this->PasswordModel->deleteData($pswd_id)) {
                $this->session->set_flashdata('del_success', 'Delete Successfully');
                redirect('dashboard_area/dashboard');
            } else {
                $this->session->set_flashdata('del_failed', 'Delete Failed');
            }
        }
    }
    
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */