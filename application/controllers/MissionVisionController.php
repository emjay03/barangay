<?php
class MissionVisionController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MissionVision_model');
    }

    public function index()
    {
        // Fetch the mission and vision data
        $data['mission'] = $this->MissionVision_model->get_mission();
        $data['vision'] = $this->MissionVision_model->get_vision();

        // Load the view with the mission and vision data
        $this->load->view('admin/dashboard', $data);
    }

    public function update_mission()
    {
        $mission = $this->input->post('mission');
        
        // Update the mission value in the database
        $this->MissionVision_model->update_mission(1, array('mission' => $mission));
        
        // Redirect or load the updated page
        redirect('/dashboard');
    }

    public function update_vision()
    {
        $vision = $this->input->post('vision');
        
        // Update the vision value in the database
        $this->MissionVision_model->update_vision(1, array('vision' => $vision));
        
        // Redirect or load the updated page
        redirect('/dashboard');
    }
}
