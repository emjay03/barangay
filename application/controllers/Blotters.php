<?php

class Blotters   extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Blotters_model');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }

    public function index()
    {
        $this->load->view('admin/Blotter_record');
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
