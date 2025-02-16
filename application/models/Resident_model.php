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

    public function update_resident($data, $id)
    {
        return $this->db->where('resident_id', $id)->update('resident_infos', $data);
    }

    public function archive_resident($data, $id)
    {
        return $this->db->where('resident_id', $id)->update('resident_infos', $data);
    }

    public function get_all_resident()
    {
        $query = $this->db->get('resident_infos');
        return $query->result_array();
    }

    public function get_female_residents()
    {
        $this->db->where('gender', 'female');
        return $this->db->count_all_results('resident_infos');
    }

    public function get_male_residents()
    {
        $this->db->where('gender', 'male');
        return $this->db->count_all_results('resident_infos');
    }

    public function get_residents_age_60_above()
    {
        $this->db->where('age >=', 60); // This filters the rows where the age is 60 or greater
        return $this->db->count_all_results('resident_infos');
    }

    public function get_all_resident_count()
    {
        return $this->db->count_all_results('resident_infos');
    }

    public function get_all_registered_voter()
    {
        $this->db->where('voterstatus', 'registered');
        return $this->db->count_all_results('resident_infos');
    }
}
