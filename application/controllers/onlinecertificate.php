<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OnlineCertificate extends CI_Controller
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
        // Load only the Certificate Ensurance view
        $this->load->view('online_certificate');
    }

    public function create_certificate()
    {
        // Set validation rules
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('purpose', 'Purpose');
        $this->form_validation->set_rules('date', 'Date');
        $this->form_validation->set_rules('birthdate', 'Birthdate');
        $this->form_validation->set_rules('placebirth', 'Placebirth');
        $this->form_validation->set_rules('findings', 'Findings');
        $this->form_validation->set_rules('status', 'Status');

        // Run the validation
        if ($this->form_validation->run() === FALSE) {
            // Validation failed, return errors as JSON
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            // Prepare the data for insertion
            $data = array(
                'type' => $this->input->post('type'),
                'fullname' => $this->input->post('fullname'),
                'address' => $this->input->post('address'),
                'purpose' => $this->input->post('purpose'),
                'date' => $this->input->post('date'),
                'birthdate' => $this->input->post('birthdate'),
                'placebirth' => $this->input->post('placebirth'),
                'findings' => $this->input->post('findings'),
                'status' => $this->input->post('status')
            );

            // Call the model to insert data
            if ($this->OnlineCertificate_model->create_certificate($data)) {
                // Success, return success message
                echo json_encode(array('status' => 'success', 'message' => 'Certificate added successfully.'));
                redirect(base_url('OnlineCertificate'));
            } else {
                // Failure, return failure message
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add certificate.'));
            }
        }
    }
}
