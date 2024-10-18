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
    public function update_settlement($id, $data)
    {
        return $this->db->where('id', $id)->update('settlement', $data);
    }
    public function get_settlement_files($id)
    {

        $this->db->select('signature_file1, signature_file2, signature_file3');
        $this->db->from('settlement');
        $this->db->where('id', $id);
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

        return null;
    }
}
