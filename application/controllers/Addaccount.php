<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addaccount extends CI_Controller
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
        $user = $this->session->userdata('user_data');
        if (!$user) {
            redirect('auth');
        }

        // Fetch all users
        $users = $this->User_model->get_all_users();
        $this->load->view('admin/add_account', array_merge(['user' => $user, 'users' => $users]));
    }

    // Handle registration
    public function register()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() === FALSE) {
            $response = ['status' => false, 'message' => validation_errors()];
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode($response));
        }

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role_id = $this->input->post('role_id');

        if ($this->User_model->is_email_exists($email)) {
            $response = ['status' => false, 'message' => 'Email is already registered.'];
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode($response));
        }

        $user_data = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role_id' => $role_id,
            'created_at' => date('Y-m-d H:i:s')
        ];

        if ($this->User_model->register_user($user_data)) {
            $response = ['status' => true, 'message' => 'User registered successfully.'];
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        } else {
            $response = ['status' => false, 'message' => 'User registration failed.'];
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(500)
                ->set_output(json_encode($response));
        }
    }

    // Fetch user data by ID for editing
    public function fetch_user_data($id)
    {
        $user = $this->User_model->get_user_by_id($id);
        if ($user) {
            $response = [
                'status' => true,
                'data' => $user
            ];
            echo json_encode($response);
        } else {
            $response = [
                'status' => false,
                'message' => 'User not found'
            ];
            echo json_encode($response);
        }
    }

    // Update user data
    public function update($id)
{
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('role_id', 'Role', 'required');

    // Only validate password if it's provided (not empty)
    if (!empty($this->input->post('password'))) {
        $this->form_validation->set_rules('password', 'Password', 'min_length[6]');
    }

    if ($this->form_validation->run() === FALSE) {
        $response = ['status' => false, 'message' => validation_errors()];
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode($response));
    }

    $email = $this->input->post('email');
    $role_id = $this->input->post('role_id');
    $password = $this->input->post('password');

    // Check if a new password is provided, and hash it if so
    if (!empty($password)) {
        $password = password_hash($password, PASSWORD_BCRYPT);  // Hash the password
    } else {
        // If no password is provided, don't update the password
        $password = null;
    }

    $user_data = [
        'email' => $email,
        'role_id' => $role_id,
    ];

    // If a new password is provided, add it to the update data
    if ($password) {
        $user_data['password'] = $password;
    }

    if ($this->User_model->update_user($id, $user_data)) {
        $response = ['status' => true, 'message' => 'User updated successfully.'];
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    } else {
        $response = ['status' => false, 'message' => 'User update failed.'];
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(500)
            ->set_output(json_encode($response));
    }
}


    // Delete user by ID
    public function delete($id)
    {
        if ($this->User_model->delete_user($id)) {
            $response = ['status' => true, 'message' => 'User deleted successfully.'];
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        } else {
            $response = ['status' => false, 'message' => 'User deletion failed.'];
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(500)
                ->set_output(json_encode($response));
        }
    }
}
