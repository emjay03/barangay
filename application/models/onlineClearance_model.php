<?php
class OnlineCertificate_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Create certificate method
    public function create_certificate($data)
    {
        return $this->db->insert('online_certificate', $data);
    }

    // Method to get all online certificates
    public function get_all_online_certificates()
    {
        // Fetching all the records from the online_certificate table
        $query = $this->db->get('online_certificate');
        return $query->result();  // returning the result as an array of objects
    }

    public function get_max_control_number($year)
    {
        // Get the highest control number for the current year
        $this->db->like('control_number', $year, 'after'); // Match any control number starting with the year
        $this->db->order_by('control_number', 'DESC'); // Order by control number descending to get the highest number
        $this->db->limit(1); // Get only one result
        $query = $this->db->get('online_certificate');

        // If a record exists, return the highest control number
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->control_number;
        }

        // If no records exist, return null
        return null;
    }


    public function update_certificate_status($certificate_id, $data)
    {
        $this->db->where('id', $certificate_id);
        return $this->db->update('online_certificate', $data);
    }

    // Get all residents (unchanged)
    public function get_all_resident()
    {
        $query = $this->db->get('resident_infos');
        return $query->result_array();
    }

    // Check if the barangayid exists
    public function check_barangayid_exists($barangayid)
    {
        $this->db->where('barangayid', $barangayid);
        $query = $this->db->get('resident_infos');
        return $query->num_rows() > 0; // Returns true if the barangayid exists
    }

    // Get fullname based on barangayid
    // Update this function in the model
    // Update this function in the model
    public function get_fullname_by_barangayid($barangayid)
    {
        // Select fullname and address fields
        $this->db->select('firstname, middlename, lastname, suffix, area, building_house_number, street, purok, subdivision');
        $this->db->where('barangayid', $barangayid);
        $query = $this->db->get('resident_infos');

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result;  // Return the whole row
        }
        return null;  // Return null if no result found
    }

    public function generate_control_number()
    {
        // Get the current year
        $current_year = date('Y');

        // Get the latest control number for the current year
        $this->db->like('control_number', $current_year . '-', 'before'); // Look for records that start with the current year
        $this->db->order_by('control_number', 'DESC');
        $query = $this->db->get('online_certificate', 1);

        if ($query->num_rows() > 0) {
            // If we have records for the current year, extract the last control number
            $last_control_number = $query->row()->control_number;

            // Extract the number part after the dash and increment it by 1
            $last_number = (int) substr($last_control_number, -5);  // Get the last 5 digits
            $new_number = $last_number + 1;
        } else {
            // If no records exist for the current year, start from 10000
            $new_number = 10000;
        }

        // Generate the new control number
        $new_control_number = $current_year . '-' . str_pad($new_number, 5, '0', STR_PAD_LEFT);

        return $new_control_number;
    }
}

