<?php
class Role_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Insert new role into the database
    public function create_role($data)
    {
        return $this->db->insert('roles', $data);
    }

    // Check if the role already exists
    public function is_role_exists($role_name)
    {
        $this->db->where('role_name', $role_name);
        $query = $this->db->get('roles');
        return $query->num_rows() > 0;
    }

    // Get all roles
    public function get_all_roles()
    {
        $query = $this->db->get('roles');
        return $query->result_array();
    }
}
