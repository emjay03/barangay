<?php
class Chat_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Get answer by question
    public function get_answer($question)
    {
        $this->db->like('question', $question);
        $query = $this->db->get('questions');
        return $query->row();
    }

    // Insert a new question and answer
    public function insert_question($data)
    {
        return $this->db->insert('questions', $data);
    }
}
