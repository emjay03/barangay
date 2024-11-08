<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->library('session');
    }


    public function index()
    {
        $this->load->view('signin');
    }

    // User login
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Set flash data for validation errors
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth');
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode([
                    'status' => false,
                    'message' => validation_errors()
                ]));
        }

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->User_model->login_user($email, $password);


        if ($user) {
            $this->session->set_userdata('user_data', $user);
            redirect('dashboard');
        } else {
            // Set flash data for invalid login
            $this->session->set_flashdata('error', 'Invalid email or password.');
            redirect('auth');
        }
    }

    public function logout()
    {




        $this->session->sess_destroy();


        redirect('auth/login');
    }
}
