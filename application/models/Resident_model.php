<?php

class Resident_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function create_resident($data)
    {

        return $this->db->insert('resident_infos', $data);
    }

    public function get_all_resident()
    {
        $query = $this->db->get('resident_infos');
        return $query->result_array();
    }
}
