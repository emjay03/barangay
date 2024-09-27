<?php

class Book  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Books_model");
        $this->load->library("form_validation");
        $this->load->helper("security");
    }
    public function create_books()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            // Prepare data for insertion
            $data = array(
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author')
            );

            // Call the model to insert data
            if ($this->Books_model->create_books($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add question and answer.'));
            }
        }
    }

    public function list()
    {
        $books = $this->Books_model->get_all_books();

        $response = [
            'status' => true,
            'data' => $books
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
