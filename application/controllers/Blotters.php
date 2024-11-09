<?php

class Blotters extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Blotters_model');
        $this->load->model('Settlement_model');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }

    public function index()
    {
        $data['all_blotters'] = $this->Blotters_model->get_all_blotters();
        $user = $this->session->userdata('user_data');

        if (!$user) {
            redirect('auth');
        }
        $this->load->view('admin/Blotter_record', array_merge($data, ['user' => $user]));
    }

    public function create_blotters()
    {
        $this->form_validation->set_rules('incident_type', 'Incident_Type', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('schedule', 'Schedule', 'required');
        $this->form_validation->set_rules('date_reported', 'Date_reported', 'required');
        $this->form_validation->set_rules('time_reported', 'Time_reported', 'required');
        $this->form_validation->set_rules('date_incident', 'Date_incident', 'required');
        $this->form_validation->set_rules('time_incident', 'Time_incident', 'required');
        $this->form_validation->set_rules('incident_location', 'Incident_location', 'required');
        $this->form_validation->set_rules('incident_narrative', 'Incident_narrative', 'required');


        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => false, 'msg' => validation_errors()));
        } else {
            $data = array(
                'incident_type' => $this->input->post('incident_type'),
                'status' => $this->input->post('status'),
                'schedule' => $this->input->post('schedule'),
                'date_reported' => $this->input->post('date_reported'),
                'time_reported' => $this->input->post('time_reported'),
                'date_incident' => $this->input->post('date_incident'),
                'time_incident' => $this->input->post('time_incident'),
                'incident_location' => $this->input->post('incident_location'),
                'incident_narrative' => $this->input->post('incident_narrative'),


            );

            if ($this->Blotters_model->create_blotters($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add.'));
            }
        }
    }









    public function create_blotter_and_settlement()
    {
        // Set validation rules for Blotter
        $this->form_validation->set_rules('ComplaintType', 'ComplaintType', 'required');
        $this->form_validation->set_rules('Description', 'Description', 'required');
        $this->form_validation->set_rules('ReportedBy', 'ReportedBy', 'required');
        $this->form_validation->set_rules('AssignedTo', 'AssignedTo', 'required');
        $this->form_validation->set_rules('Status', 'Status', 'required');
        $this->form_validation->set_rules('ActionTaken', 'ActionTaken', 'required');
        $this->form_validation->set_rules('ComplainantName', 'ComplainantName', 'required');
        $this->form_validation->set_rules('RespondentName', 'RespondentName', 'required');

        // Run form validation
        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => false, 'msg' => validation_errors()));
        } else {

            $blotterId = rand(100000, 999999);


            $blotter_data = array(
                'BlotterID' => $blotterId,
                'ComplaintType' => $this->input->post('ComplaintType'),
                'Description' => $this->input->post('Description'),
                'ReportedBy' => $this->input->post('ReportedBy'),
                'AssignedTo' => $this->input->post('AssignedTo'),
                'Status' => $this->input->post('Status'),
                'ActionTaken' => $this->input->post('ActionTaken'),
                'ComplainantName' => $this->input->post('ComplainantName'),
                'RespondentName' => $this->input->post('RespondentName'),
            );


            if ($this->Blotters_model->create_blotterss($blotter_data)) {


                $case_number = rand(100000, 999999);
                $ComplaintType = $this->input->post('ComplaintType');
                $Description = $this->input->post('Description');
                $ComplainantName = $this->input->post('ComplainantName');

                $settlement_data = array(
                    'BlotterID' => $blotterId,
                    'case_number' => $case_number,
                    'status' => 'Unscheduled',
                    'type_of_case' => $ComplaintType,
                    'details' => $Description,
                    'name' => $ComplainantName,



                );


                if ($this->Settlement_model->create_settlement($settlement_data)) {
                    echo json_encode(array('status' => 'success', 'message' => 'Blotter and settlement added successfully.'));
                } else {
                    echo json_encode(array('status' => 'error', 'message' => 'Failed to add settlement.'));
                }
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add blotter.'));
            }
        }
    }




    public function update_blotters($id)
    {
        // Set validation rules
        $this->form_validation->set_rules('incident_type', 'Incident Type', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('schedule', 'Schedule', 'required');
        $this->form_validation->set_rules('date_reported', 'Date Reported', 'required');
        $this->form_validation->set_rules('time_reported', 'Time Reported', 'required');
        $this->form_validation->set_rules('date_incident', 'Date Incident', 'required');
        $this->form_validation->set_rules('time_incident', 'Time Incident', 'required');
        $this->form_validation->set_rules('incident_location', 'Incident Location', 'required');
        $this->form_validation->set_rules('incident_narrative', 'Incident Narrative', 'required');

        // Validate the input
        if ($this->form_validation->run() === FALSE) {
            $errors = validation_errors();
            log_message('error', 'Validation errors: ' . $errors);
            echo json_encode(array('status' => false, 'msg' => $errors));
        } else {
            // Prepare data for update
            $data = [
                'incident_type' => $this->input->post('incident_type'),
                'status' => $this->input->post('status'),
                'schedule' => $this->input->post('schedule'),
                'date_reported' => $this->input->post('date_reported'),
                'time_reported' => $this->input->post('time_reported'),
                'date_incident' => $this->input->post('date_incident'),
                'time_incident' => $this->input->post('time_incident'),
                'incident_location' => $this->input->post('incident_location'),
                'incident_narrative' => $this->input->post('incident_narrative')
            ];

            // Update the blotter in the database
            if ($this->Blotters_model->update_blotters($data, $id)) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Incident updated successfully.'
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Failed to update incident. Please check the data and try again.'
                ]);
            }
        }
    }

    public function list()
    {
        $blotters = $this->Blotters_model->get_all_blotters();

        $response = [
            'status' => true,
            'data' => $blotters
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
