<?php
defined('BASEPATH') or exit('No direct script access allowed');

class online extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Certificate_model");
        $this->load->library("form_validation");
        $this->load->helper("security");
    }

    // Method for displaying walkin table
    public function index()
    {
        // Load only the Certificate Ensurance view
        $this->load->view('online' );
    }

}

