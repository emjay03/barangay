<?php
class OnlineCertificate_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function create_certificate($data)
    {
        return $this->db->insert('online_certificate', $data);
    }

    public function get_all_areas()
    {
        $query = $this->db->get('online_certificate');
        return $query->result_array();
    }
}
