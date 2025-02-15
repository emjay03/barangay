<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Announcement extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Announcement_model'); // Load the Announcement model
    }

    // public function index()
    // {
    //     $data['all_announcements'] = $this->Blotters_model->get_all_announcements();
    //     $user = $this->session->userdata('user_data');

    //     if (!$user) {
    //         redirect('auth');
    //     }
    //     $this->load->view('admin/Blotter_record', array_merge($data, ['user' => $user]));
    // }

    public function index()
    {
        // Load the model that fetches announcements
        $this->load->model('Announcement_model');

        // Fetch all announcements from the model
        $data['all_announcements'] = $this->Announcement_model->get_all_announcements();

        // Check if user is logged in
        $user = $this->session->userdata('user_data');
        if (!$user) {
            redirect('auth');
        }

        // Pass the data to the view
        $this->load->view('admin/dashboard', array_merge($data, ['user' => $user]));
    }

    // View a specific announcement
    public function view($id)
    {
        // Get announcement by ID
        $data['announcement'] = $this->Announcement_model->get_announcement_by_id($id);

        // Check if the announcement exists
        if (empty($data['announcement'])) {
            show_404(); // Show 404 if announcement is not found
        }

        // Pass the data to the view
        $this->load->view('admin/announcement_view', $data);
    }

    // Create a new announcement
    public function create()
    {
        // Check if form is submitted
        if ($this->input->post()) {
            $data = array(
                'title' => $this->input->post('title'),
                'details' => $this->input->post('details'),
            );

            // Insert the new announcement into the database
            $this->Announcement_model->insert_announcement($data);

            // Redirect to the announcements list
            redirect('announcement');
        }

        // Load the view for creating a new announcement
        $this->load->view('admin/create_announcement');
    }

    // Update an existing announcement
    public function edit($id)
    {
        // Fetch the announcement to edit
        $data['announcement'] = $this->Announcement_model->get_announcement_by_id($id);

        // Check if the announcement exists
        if (empty($data['announcement'])) {
            show_404();
        }

        // Check if form is submitted
        if ($this->input->post()) {
            $updated_data = array(
                'title' => $this->input->post('title'),
                'details' => $this->input->post('details'),
            );

            // Update the announcement in the database
            $this->Announcement_model->update_announcement($id, $updated_data);

            // Redirect to the announcements list
            redirect('announcement');
        }

        // Load the edit view
        $this->load->view('admin/edit_announcement', $data);
    }

    // Delete an announcement
    public function delete($id)
    {
        // Delete the announcement
        $this->Announcement_model->delete_announcement($id);

        // Redirect to the announcements list
        redirect('announcement');
    }
}
?>