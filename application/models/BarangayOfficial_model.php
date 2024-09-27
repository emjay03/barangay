<?php

class BarangayOfficial_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_bofficial($data)
    {
        return $this->db->insert('brgy_officials', $data);
    }

    public function get_all_bofficial()
    {
        $query = $this->db->get('brgy_officials');
        return $query->result_array();
    }
}
