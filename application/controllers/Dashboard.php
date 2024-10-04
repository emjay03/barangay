<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Resident_model");
        $this->load->library("form_validation");
        $this->load->helper('security');
    }

    public function index()
    {

        $data['female_count'] = $this->Resident_model->get_female_residents();
        $data['male_count'] = $this->Resident_model->get_male_residents();
        $data['all_resident'] = $this->Resident_model->get_all_resident_count();

        $this->load->view("admin/Dashboard", $data);
    }
}
