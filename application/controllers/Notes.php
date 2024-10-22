<?php

class Notes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Notes_model');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }

    public function create_note()
    {

        $this->form_validation->set_rules('note', 'Note', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            // Prepare data for insertion
            $data = array(
                'note' => $this->input->post('note'),

            );

            // Call the model to insert data
            if ($this->Notes_model->create_note($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add question and answer.'));
            }
        }
    }
}
