<?php
class Chat extends CI_Controller
{

    // end point for Chat
    // chat/get_response?question=question
    // chat/insert_question

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    

    // Chatbot response endpoint
    public function get_response()
    {
        // Retrieve the question from GET data
        $question = $this->input->get('question');

        if (!empty($question)) {
            // Fetch answer from the model
            $answer = $this->Chat_model->get_answer($question);

            // Check if answer exists
            if ($answer) {
                echo json_encode(array('status' => 'success', 'answer' => $answer->answer));
            } else {
                echo json_encode(array('status' => 'error', 'answer' => 'Sorry, I do not understand the question.'));
            }
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'No question provided.'));
        }
    }

    // Insert a new question and answer
    public function insert_question()
    {

        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answer', 'Answer', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            // Prepare data for insertion
            $data = array(
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer')
            );

            // Call the model to insert data
            if ($this->Chat_model->insert_question($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'Question and answer added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add question and answer.'));
            }
        }
    }
}
