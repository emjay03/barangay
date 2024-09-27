<?php

class BarangayOfficial  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("BarangayOfficial_model");
        $this->load->library("form_validation");
        $this->load->helper("security");
    }
    public function create_bofficial()
    {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('official_committe', 'Official_committe', 'required');
        $this->form_validation->set_rules('year_of_service', 'year_of_service', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            // Prepare data for insertion
            $data = array(
                'name' => $this->input->post('name'),
                'position' => $this->input->post('position'),
                'official_committe' => $this->input->post('official_committe'),
                'year_of_service' => $this->input->post('year_of_service'),

            );

            // Call the model to insert data
            if ($this->BarangayOfficial_model->create_bofficial($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add question and answer.'));
            }
        }
    }

    public function list()
    {
        $bofficial = $this->BarangayOfficial_model->get_all_bofficial();

        $response = [
            'status' => true,
            'data' => $bofficial
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
