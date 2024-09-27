<?php

class Books_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_books($data)
    {
        return $this->db->insert('books', $data);
    }

    public function get_all_books()
    {
        $query = $this->db->get('books');
        return $query->result_array();
    }
}
