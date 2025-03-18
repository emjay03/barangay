<?php

class Resident extends CI_Controller
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
        $data['all_resident'] = $this->Resident_model->get_all_resident();

        $user = $this->session->userdata('user_data');
        if (! $user) {
            redirect('auth');
        }

        $this->load->view('admin/Resident_information', array_merge($data, ['user' => $user]));
    }

    public function create_resident()
    {
        // Validation rules for the form fields
        $this->form_validation->set_rules('barangayid', 'Barangay Id', 'required|numeric');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|max_length[100]');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|max_length[100]');
        $this->form_validation->set_rules('middlename', 'Middlename', 'max_length[100]');
        $this->form_validation->set_rules('suffix', 'Suffix', 'max_length[50]');
        $this->form_validation->set_rules('lifestatus', 'Life Status', 'max_length[50]');
        $this->form_validation->set_rules('pwd', 'PWD Status', 'max_length[50]');
        $this->form_validation->set_rules('birthday', 'Birthday', 'required|valid_date');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required|in_list[Male,Female]');
        $this->form_validation->set_rules('civilstatus', 'Civil Status', 'required|max_length[50]');
        $this->form_validation->set_rules('religion', 'Religion', 'max_length[100]');
        $this->form_validation->set_rules('voterstatus', 'Voter Status', 'max_length[50]');
        $this->form_validation->set_rules('occupation', 'Occupation', 'max_length[100]');
        $this->form_validation->set_rules('birth_of_place', 'Place of Birth', 'max_length[255]');
        $this->form_validation->set_rules('citizenship', 'Citizenship', 'max_length[100]');
        $this->form_validation->set_rules('telephone_no', 'Telephone No', 'max_length[20]');
        $this->form_validation->set_rules('mobile_no', 'Mobile No', 'required|max_length[20]');
        $this->form_validation->set_rules('height', 'Height', 'numeric');
        $this->form_validation->set_rules('weight', 'Weight', 'numeric');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|max_length[255]');
        $this->form_validation->set_rules('spouse', 'Spouse', 'max_length[100]');
        $this->form_validation->set_rules('father', 'Father', 'max_length[100]');
        $this->form_validation->set_rules('mother', 'Mother', 'max_length[100]');
        $this->form_validation->set_rules('area', 'Area', 'max_length[255]');
        $this->form_validation->set_rules('building_house_number', 'Building/House No', 'max_length[100]');
        $this->form_validation->set_rules('street', 'Street', 'max_length[100]');
        $this->form_validation->set_rules('purok', 'Purok', 'max_length[50]');
        $this->form_validation->set_rules('subdivision', 'Subdivision', 'max_length[100]');
        $this->form_validation->set_rules('barangay', 'Barangay', 'max_length[100]');
        $this->form_validation->set_rules('zone', 'Zone', 'max_length[50]');
        $this->form_validation->set_rules('district', 'District', 'max_length[50]');
        $this->form_validation->set_rules('municipality', 'Municipality', 'max_length[100]');
        $this->form_validation->set_rules('region', 'Region', 'max_length[100]');

        // Check if the form validation is successful
        if ($this->form_validation->run() === false) {
            // Return the validation errors
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
            return;
        }

        // Sanitize input data
        $data = array(
            'barangayid'            => $this->input->post('barangayid'),
            'lastname'              => $this->input->post('lastname'),
            'firstname'             => $this->input->post('firstname'),
            'middlename'            => $this->input->post('middlename'),
            'suffix'                => $this->input->post('suffix'),
            'lifestatus'            => $this->input->post('lifestatus'),
            'pwd'                   => $this->input->post('pwd'),
            'birthday'              => $this->input->post('birthday'),
            'age'                   => $this->input->post('age'),
            'gender'                => $this->input->post('gender'),
            'civilstatus'           => $this->input->post('civilstatus'),
            'religion'              => $this->input->post('religion'),
            'voterstatus'           => $this->input->post('voterstatus'),
            'occupation'            => $this->input->post('occupation'),
            'birth_of_place'        => $this->input->post('birth_of_place'),
            'citizenship'           => $this->input->post('citizenship'),
            'telephone_no'          => $this->input->post('telephone_no'),
            'mobile_no'             => $this->input->post('mobile_no'),
            'height'                => $this->input->post('height'),
            'weight'                => $this->input->post('weight'),
            'email'                 => $this->input->post('email'),
            'spouse'                => $this->input->post('spouse'),
            'father'                => $this->input->post('father'),
            'mother'                => $this->input->post('mother'),
            'area'                  => $this->input->post('area'),
            'building_house_number' => $this->input->post('building_house_number'),
            'street'                => $this->input->post('street'),
            'purok'                 => $this->input->post('purok'),
            'subdivision'           => $this->input->post('subdivision'),
            'barangay'              => $this->input->post('barangay'),
            'zone'                  => $this->input->post('zone'),
            'district'              => $this->input->post('district'),
            'municipality'          => $this->input->post('municipality'),
            'region'                => $this->input->post('region'),
            'date_registered'       => date('Y-m-d H:i:s'),
            'status'                => 'active',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        );

        // Insert data into the database using the model
        if ($this->Resident_model->create_resident($data)) {
            echo json_encode(['status' => 'success', 'message' => 'Resident added successfully.']);
            return  ;
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add resident.']);
        }
    }

    public function update_resident($id)
    {
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        // Add all other validation rules...

        // Validate the input
        if ($this->form_validation->run() === false) {
            echo json_encode(['status' => false, 'msg' => validation_errors()]);
        } else {
            $data = [
                'barangayid'            => $this->input->post('barangayid'),
                'lastname'              => $this->input->post('lastname'),
                'firstname'             => $this->input->post('firstname'),
                'middlename'            => $this->input->post('middlename'),
                'suffix'                => $this->input->post('suffix'),
                'lifestatus'            => $this->input->post('lifestatus'),
                'pwd'                   => $this->input->post('pwd'),
                'birthday'              => $this->input->post('birthday'),
                'age'                   => $this->input->post('age'),
                'gender'                => $this->input->post('gender'),
                'civilstatus'           => $this->input->post('civilstatus'),
                'voterstatus'           => $this->input->post('voterstatus'),
                'birth_of_place'        => $this->input->post('birth_of_place'),
                'citizenship'           => $this->input->post('citizenship'),
                'telephone_no'          => $this->input->post('telephone_no'),
                'mobile_no'             => $this->input->post('mobile_no'),
                'height'                => $this->input->post('height'),
                'weight'                => $this->input->post('weight'),
                'email'                 => $this->input->post('email'),
                'spouse'                => $this->input->post('spouse'),
                'father'                => $this->input->post('father'),
                'mother'                => $this->input->post('mother'),
                'area'                  => $this->input->post('area'),
                'building_house_number' => $this->input->post('building_house_number'),
                'street'                => $this->input->post('street'),
                'purok'                 => $this->input->post('purok'),
                'subdivision'           => $this->input->post('subdivision'),
                'barangay'              => $this->input->post('barangay'),
                'zone'                  => $this->input->post('zone'),
                'district'              => $this->input->post('district'),
                'municipality'          => $this->input->post('municipality'),
                'region'                => $this->input->post('region'),
            ];

            if ($this->Resident_model->update_resident($data, $id)) {
                echo json_encode(['status' => 'success', 'message' => 'Resident updated successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update resident.']);
            }
        }
    }

    public function archive_resident($id)
    {
        $data = ['status' => 'archived'];

        if ($this->Resident_model->archive_resident($data, $id)) {
            echo json_encode(['status' => 'success', 'message' => 'Resident archived successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to archive resident.']);
        }
    }

    public function voters_registered()
    {
        $registered = $this->Resident_model->get_all_registered_voter();
        $response   = [
            'status' => true,
            'data'   => $registered,
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
