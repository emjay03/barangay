<?php
class Area extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Area');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }


    public function create_area()
    {

        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('population', 'Population', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            // Prepare data for insertion
            $data = array(
                'area' => $this->input->post('area'),
                'population' => $this->input->post('population')
            );

            // Call the model to insert data
            if ($this->Area_model->create_area($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add question and answer.'));
            }
        }
    }
}
