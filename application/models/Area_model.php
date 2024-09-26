<?php
class Area_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function create_area($data)
    {
        return $this->db->insert('area_settings', $data);
    }
}
