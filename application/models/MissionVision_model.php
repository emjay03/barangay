<?php
class MissionVision_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load database
    }

    // Get mission
    public function get_mission()
    {
        $query = $this->db->get_where('missiontbl', array('id' => 1));
        return $query->row_array(); // Returns a single row as an associative array
    }

    // Get vision
    public function get_vision()
    {
        $query = $this->db->get_where('visiontbl', array('id' => 1));
        return $query->row_array(); // Returns a single row as an associative array
    }

    // Update mission
    public function update_mission($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('missiontbl', $data);
    }

    // Update vision
    public function update_vision($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('visiontbl', $data);
    }
}