<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Resident_model");
        $this->load->model("User_model");
        $this->load->library("form_validation");
        $this->load->helper('security');
        $this->load->library('session');
    }

    public function index()
    {

        $data['female_count'] = $this->Resident_model->get_female_residents();
        $data['male_count'] = $this->Resident_model->get_male_residents();
        $data['registered_voters'] = $this->Resident_model->get_all_registered_voter();
        $data['all_resident'] = $this->Resident_model->get_all_resident_count();


        $user = $this->session->userdata('user_data');

        // Check if user is logged in
        if (!$user) {
            redirect('login'); // Redirect to login if not logged in
        }

        // Pass the user object to the view
        $data['user'] = $user;
        $this->load->view("admin/Dashboard", $data);
    }
}
