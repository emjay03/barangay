<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Resident_model");
        $this->load->model("User_model");
        $this->load->model("Settlement_model");
        $this->load->library("form_validation");
        $this->load->helper('security');
        $this->load->library('session');
    }

    public function index()
    {
        // Fetch counts and data from the Resident_model
        $data['female_count'] = $this->Resident_model->get_female_residents();
        $data['male_count'] = $this->Resident_model->get_male_residents();
        $data['registered_voters'] = $this->Resident_model->get_all_registered_voter();
        $data['all_resident'] = $this->Resident_model->get_all_resident_count();
        $data['all_settlement'] = $this->Settlement_model->get_all_settlement();
        $data['get_Settled'] = $this->Settlement_model->get_Settled();
        $data['get_Unscheduled'] = $this->Settlement_model->get_Unscheduled();
        $data['get_Scheduled'] = $this->Settlement_model->get_Scheduled();

        // Retrieve user session data
        $user = $this->session->userdata('user_data');

        if (!$user) {
            redirect('auth');
        }


        $this->load->view("admin/Dashboard", array_merge($data, ['user' => $user]));
    }
}
