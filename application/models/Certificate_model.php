<?php
class Certificate_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function create_certificate($data)
    {
        return $this->db->insert('certicate', $data);
    }

    public function get_all_areas()
    {
        $query = $this->db->get('certicate');
        return $query->result_array();
    }
}
