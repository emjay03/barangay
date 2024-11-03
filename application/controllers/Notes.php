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
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('note', 'Note', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            $data = array(
                'note' => $this->input->post('note'),
                'email' => $this->input->post('email')
            );
            if ($this->Notes_model->create_note($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'Note added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add note.'));
            }
        }
    }

    public function get_notes()
    {
        $notes = $this->Notes_model->get_notes();
        echo json_encode(array('status' => 'success', 'data' => $notes));
    }


    public function get_notes_by_email()
    {
        $email = $this->input->get('email');

        if (!$email) {
            echo json_encode(array('status' => 'error', 'message' => 'Email is required.'));
            return;
        }


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array('status' => 'error', 'message' => 'Invalid email format.'));
            return;
        }


        $notes = $this->Notes_model->get_notes_by_email($email);


        if (!empty($notes)) {
            echo json_encode(array('status' => 'success', 'data' => $notes));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'No notes found for this email.'));
        }
    }

    public function edit_note()
    {
        $this->form_validation->set_rules('id', 'ID', 'required|integer');
        $this->form_validation->set_rules('note', 'Note', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            $data = array('note' => $this->input->post('note'));
            $id = $this->input->post('id');

            if ($this->Notes_model->edit_note($id, $data)) {
                echo json_encode(array('status' => 'success', 'message' => 'Note updated successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to update note.'));
            }
        }
    }

    public function delete_note()
    {
        $this->form_validation->set_rules('id', 'ID', 'required|integer');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {
            $id = $this->input->post('id');

            if ($this->Notes_model->delete_note($id)) {
                echo json_encode(array('status' => 'success', 'message' => 'Note deleted successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to delete note.'));
            }
        }
    }
}
