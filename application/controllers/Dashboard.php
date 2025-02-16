<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Resident_model");
        $this->load->model("User_model");
        $this->load->model("Settlement_model");
        $this->load->model("Announcement_model");  // Ensure this is loaded
        $this->load->model("MissionVision_model"); // Load the model for mission and vision
        $this->load->library("form_validation");
        $this->load->helper('security');
        $this->load->library('session');
    }

    public function index()
    {
        // Fetch counts and data from the Resident_model
        $data['mission'] = $this->MissionVision_model->get_mission(); // Fetch mission
        $data['vision'] = $this->MissionVision_model->get_vision(); // Fetch vision
        $data['female_count'] = $this->Resident_model->get_female_residents();
        $data['male_count'] = $this->Resident_model->get_male_residents();
        $data['registered_voters'] = $this->Resident_model->get_all_registered_voter();
        $data['all_announcements'] = $this->Announcement_model->get_all_announcements(); 
        $data['all_resident'] = $this->Resident_model->get_all_resident_count();
        $data['all_settlement'] = $this->Settlement_model->get_all_settlement();
        $data['get_Settled'] = $this->Settlement_model->get_Settled();
        $data['get_Unscheduled'] = $this->Settlement_model->get_Unscheduled();
        $data['get_Scheduled'] = $this->Settlement_model->get_Scheduled();
        $data['senior_count'] = $this->Resident_model->get_residents_age_60_above();
        

        // Retrieve user session data
        $user = $this->session->userdata('user_data');

        if (!$user) {
            redirect('auth');
        }

        // Pass the data (including announcements, mission, and vision) to the view
        $this->load->view("admin/Dashboard", array_merge($data, ['user' => $user]));
    }
}
