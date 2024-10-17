<?php

class Settlement_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }



    public function create_settlement($data)
    {
        return $this->db->insert('settlement', $data);
    }

    public function get_all_settlement()
    {
        $query = $this->db->get('settlement');
        return $query->result_array();
    }
}
