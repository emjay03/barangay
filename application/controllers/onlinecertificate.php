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
        $this->form_validation->set_rules('barangayid', 'Barangay ID', 'required');
        $this->form_validation->set_rules('status', 'Status');

        // Run the validation
        if ($this->form_validation->run() === FALSE) {
            // Validation failed, return errors as JSON
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            // Get the barangay ID
            $barangay_id = $this->input->post('barangayid');

            // Check if the barangay ID exists in the residents table
            $is_valid_barangay_id = $this->OnlineCertificate_model->check_barangayid_exists($barangay_id);

            if (!$is_valid_barangay_id) {
                // Return error if barangay ID does not exist
                echo json_encode(array('status' => 'error', 'message' => 'This Barangay ID does not have data in Barangay 185.'));
                return;
            }

            // Generate the control number
            $control_number = $this->OnlineCertificate_model->generate_control_number();

            // Prepare the data for insertion
            $data = array(
                'type' => $this->input->post('type'),
                'fullname' => $this->input->post('fullname'),
                'address' => $this->input->post('address'),
                'purpose' => $this->input->post('purpose'),
                'date' => $this->input->post('date'),
                'barangayid' => $barangay_id,
                'status' => $this->input->post('status'),
                'control_number' => $control_number,  // Add the generated control number
                'created_at' => date('Y-m-d H:i:s'),  // Timestamp for when the certificate is created
                'updated_at' => date('Y-m-d H:i:s')   // Timestamp for when the certificate is updated
            );

            // Call the model to insert data
            if ($this->OnlineCertificate_model->create_certificate($data)) {
                // Success, return success message
                echo json_encode(array('status' => 'success', 'message' => 'Certificate added successfully.'));
                return;
            } else {
                // Failure, return failure message
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add certificate.'));
                return;
            }
        }
    }


    // Fetch fullname based on barangayid
    // Fetch fullname and address based on barangayid
    public function fetch_fullname_by_barangayid()
    {
        $barangayid = $this->input->get('barangayid');  // Get the barangayid from the request

        // Check if barangayid exists and fetch full name and address parts
        $resident_data = $this->OnlineCertificate_model->get_fullname_by_barangayid($barangayid);

        if ($resident_data) {
            // Return the parts of the fullname and address if found
            echo json_encode(array(
                'status' => 'success',
                'firstname' => $resident_data->firstname,
                'middlename' => $resident_data->middlename,
                'lastname' => $resident_data->lastname,
                'suffix' => $resident_data->suffix,
                'address' => $resident_data->area . ', ' . $resident_data->building_house_number . ', ' . $resident_data->street . ', ' . $resident_data->purok . ', ' . $resident_data->subdivision
            ));
        } else {
            // Return error if no data found
            echo json_encode(array('status' => 'error', 'message' => 'Barangay ID not found.'));
        }
    }
}

