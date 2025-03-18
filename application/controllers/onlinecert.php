<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Onlinecert extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("OnlineCertificate_model");
        $this->load->library("form_validation");
        $this->load->helper("security");
    }

    // Method for displaying certificates
    public function index()
    {
        // Fetch user session data
        $user = $this->session->userdata('user_data');

        if (!$user) {
            // Redirect to the authentication page if no user session exists
            redirect('auth');
        }

        // Fetch all online certificates
        $data = [
            'user' => $user,
            'certificates' => $this->OnlineCertificate_model->get_all_online_certificates()  // Use the updated method name
        ];

        // Load the view with the certificates data
        $this->load->view('admin/online_cert_table', $data);
    }

    public function update_status_to_done($certificate_id)
    {
        $data = array(
            'status' => 'Done',
            'updated_at' => date('Y-m-d H:i:s')
        );

        // Update the status to 'Done'
        $update_result = $this->OnlineCertificate_model->update_certificate_status($certificate_id, $data);

        if ($update_result) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to update status.'));
        }
    }

    // Other methods for certificate handling...
}
