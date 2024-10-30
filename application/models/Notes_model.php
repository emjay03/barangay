<?php
class Notes_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function create_note($data)
    {
        return $this->db->insert('notes', $data);
    }
}
