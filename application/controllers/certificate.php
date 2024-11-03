<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Certificate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Certificate_model");
        $this->load->library("form_validation");
        $this->load->helper("security");
    }
    public function index()
    {
        $this->load->view("admin/Certificate_ensurance");
    }

    public function create_certificate()
    {

        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('purpose', 'Purpose', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {

            $data = array(
                'type' => $this->input->post('type'),
                'fullname' => $this->input->post('fullname'),
                'address' => $this->input->post('address'),
                'purpose' => $this->input->post('purpose'),
                'date' => $this->input->post('date')
            );


            if ($this->Certificate_model->create_certificate($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add'));
            }
        }
    }
}
