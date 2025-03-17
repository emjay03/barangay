<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OnlineIndigency extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Certificate_model");
        $this->load->library("form_validation");
        $this->load->helper("security");
    }
     // Method for displaying certificates
     public function index()
     {
         // Load only the Certificate Ensurance view
         $this->load->view('online_indigency');
     }

    public function create_certificate()
    {

        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('purpose', 'Purpose');
        $this->form_validation->set_rules('date', 'Date');
        $this->form_validation->set_rules('birthdate', 'Birthdate');
        $this->form_validation->set_rules('findings', 'Placebirth');
        $this->form_validation->set_rules('findings', 'Findings');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {

            $data = array(
                'type' => $this->input->post('type'),
                'fullname' => $this->input->post('fullname'),
                'address' => $this->input->post('address'),
                'purpose' => $this->input->post('purpose'),
                'date' => $this->input->post('date'),
                'birthdate' => $this->input->post('birthdate'),
                'placebirth' => $this->input->post('placebirth'),
                'findings' => $this->input->post('findings')

            );


            if ($this->Certificate_model->create_certificate($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add'));
            }
        }
    }
}

