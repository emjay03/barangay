<?php
class Notes_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function create_note($data)
    {
        return $this->db->insert('notes', $data);
    }

    public function get_notes()
    {
        $query = $this->db->get('notes');
        return $query->result_array(); // Return results as an array
    }

    public function edit_note($id, $data)
    {
        $this->db->where('id', $id); // Assuming 'id' is your primary key
        return $this->db->update('notes', $data);
    }

    public function delete_note($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('notes');
    }
}
