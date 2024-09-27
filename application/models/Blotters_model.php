<?php

class Blotters_model extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }


    public function create_blotters($data)
    {
        return $this->db->insert('blotters', $data);
    }

    public function get_all_blotters()
    {
        $query = $this->db->get('blotters');
        return $query->result_array();
    }
}
