<?php
class Announcement_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load database
    }

    // Get all announcements
    public function get_all_announcements()
    {
        // Query to fetch all announcements
        $query = $this->db->get('announcements');
        
        // Return the result as an associative array
        return $query->result_array();
    }

    // Get a specific announcement by ID
    public function get_announcement_by_id($id)
    {
        $query = $this->db->get_where('announcements', array('id' => $id));
        return $query->row_array(); // Returns a single row as an associative array
    }

    // Insert a new announcement
    public function insert_announcement($data)
    {
        return $this->db->insert('announcements', $data);
    }

    // Update an existing announcement
    public function update_announcement($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('announcements', $data);
    }

    // Delete an announcement
    public function delete_announcement($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('announcements');
    }
}
?>
