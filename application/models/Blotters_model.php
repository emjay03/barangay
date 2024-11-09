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


    public function create_blotterss($data)
    {
        return $this->db->insert('blotterss', $data);
    }


    public function update_blotters($data, $id)
    {
        return $this->db->where('id', $id)->update('blotterss', $data);
    }

    public function get_all_blotters()
    {
        $query = $this->db->get('blotterss');
        return $query->result_array();
    }
}
