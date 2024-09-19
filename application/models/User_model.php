<?php
class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Insert new user into the database
    public function register_user($data)
    {
        return $this->db->insert('users', $data);
    }

    // Check if the email is already registered
    public function is_email_exists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->num_rows() > 0;
    }

    // Validate user login credentials
    public function login_user($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        // If the user exists
        if ($query->num_rows() === 1) {
            $user = $query->row();

            // Verify the password
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }

        return false;
    }
}
