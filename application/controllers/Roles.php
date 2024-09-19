<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Roles extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Role_model');
        $this->load->library('form_validation');
    }

    // Create a new role
    public function create()
    {
        $this->form_validation->set_rules('role_name', 'Role Name', 'required');

        if ($this->form_validation->run() === FALSE) {
            $response = [
                'status' => false,
                'message' => validation_errors()
            ];
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode($response));
        }

        $role_name = $this->input->post('role_name');

        // Check if the role already exists
        if ($this->Role_model->is_role_exists($role_name)) {
            $response = [
                'status' => false,
                'message' => 'Role already exists.'
            ];
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode($response));
        }

        // Prepare data for insertion
        $role_data = [
            'role_name' => $role_name,
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Insert role into the database
        if ($this->Role_model->create_role($role_data)) {
            $response = [
                'status' => true,
                'message' => 'Role created successfully.'
            ];
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        } else {
            $response = [
                'status' => false,
                'message' => 'Role creation failed.'
            ];
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(500)
                ->set_output(json_encode($response));
        }
    }

    // Get all roles
    public function list()
    {
        $roles = $this->Role_model->get_all_roles();

        $response = [
            'status' => true,
            'data' => $roles
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
