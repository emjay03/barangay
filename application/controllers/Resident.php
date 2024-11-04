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

        if (!$user) {
            redirect('auth');
        }
        $this->load->view('admin/Resident_information', array_merge($data, ['user' => $user]));
    }

    public function create_resident()
    {

        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('middlename', 'Middlename', 'required');
        $this->form_validation->set_rules('alias', 'Alias', 'required');
        $this->form_validation->set_rules('birthday', 'Birthday', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('civilstatus', 'Civilstatus', 'required');
        $this->form_validation->set_rules('voterstatus', 'Voterstatus', 'required');
        $this->form_validation->set_rules('birth_of_place', 'Birth_of_place', 'required');
        $this->form_validation->set_rules('citizenship', 'Citizenship', 'required');
        $this->form_validation->set_rules('telephone_no', 'Telephone_no', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile_no', 'required');
        $this->form_validation->set_rules('height', 'Height', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_rules('PAG_IBIG', 'PAG_IBIG', 'required');
        $this->form_validation->set_rules('PHILHEALTH', 'PHILHEALTH', 'required');
        $this->form_validation->set_rules('SSS', 'SSS', 'required');
        $this->form_validation->set_rules('TIN', 'TIN', 'required');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('spouse', 'Spouse', 'required');
        $this->form_validation->set_rules('father', 'Father', 'required');
        $this->form_validation->set_rules('mother', 'Mother', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('address_1', 'Address_1', 'required');
        $this->form_validation->set_rules('address_2', 'Address_2', 'required');
        $this->form_validation->set_rules('date_registered', 'Date_registered', 'required');


        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => false, 'msg' => validation_errors()));
        } else {
            $data = array(
                'lastname' => $this->input->post('lastname'),
                'firstname' => $this->input->post('firstname'),
                'middlename' => $this->input->post('middlename'),
                'alias' => $this->input->post('alias'),
                'birthday' => $this->input->post('birthday'),
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'civilstatus' => $this->input->post('civilstatus'),
                'voterstatus' => $this->input->post('voterstatus'),
                'birth_of_place' => $this->input->post('birth_of_place'),
                'citizenship' => $this->input->post('citizenship'),
                'telephone_no' => $this->input->post('telephone_no'),
                'mobile_no' => $this->input->post('mobile_no'),
                'height' => $this->input->post('height'),
                'weight' => $this->input->post('weight'),
                'PAG_IBIG' => $this->input->post('PAG_IBIG'),
                'PHILHEALTH' => $this->input->post('PHILHEALTH'),
                'SSS' => $this->input->post('SSS'),
                'TIN' => $this->input->post('TIN'),
                'email' => $this->input->post('email'),
                'spouse' => $this->input->post('spouse'),
                'father' => $this->input->post('father'),
                'mother' => $this->input->post('mother'),
                'area' => $this->input->post('area'),
                'address_1' => $this->input->post('address_1'),
                'address_2' => $this->input->post('address_2'),
                'date_registered' => $this->input->post('date_registered'),
            );

            if ($this->Resident_model->create_resident($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add.'));
            }
        }
    }

    public function update_resident($id)
    {

        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('middlename', 'Middlename', 'required');
        $this->form_validation->set_rules('alias', 'Alias', 'required');
        $this->form_validation->set_rules('birthday', 'Birthday', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('civilstatus', 'Civil Status', 'required');
        $this->form_validation->set_rules('voterstatus', 'Voter Status', 'required');
        $this->form_validation->set_rules('birth_of_place', 'Birth of Place', 'required');
        $this->form_validation->set_rules('citizenship', 'Citizenship', 'required');
        $this->form_validation->set_rules('telephone_no', 'Telephone No', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile No', 'required');
        $this->form_validation->set_rules('height', 'Height', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_rules('PAG_IBIG', 'PAG IBIG', 'required');
        $this->form_validation->set_rules('PHILHEALTH', 'PhilHealth', 'required');
        $this->form_validation->set_rules('SSS', 'SSS', 'required');
        $this->form_validation->set_rules('TIN', 'TIN', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('spouse', 'Spouse', 'required');
        $this->form_validation->set_rules('father', 'Father', 'required');
        $this->form_validation->set_rules('mother', 'Mother', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('address_1', 'Address 1', 'required');
        $this->form_validation->set_rules('address_2', 'Address 2', 'required');


        // Validate the input
        if ($this->form_validation->run() === FALSE) {
            // Return validation errors as JSON
            echo json_encode([
                'status' => false,
                'msg' => validation_errors()
            ]);
        } else {

            $data = [
                'lastname' => $this->input->post('lastname'),
                'firstname' => $this->input->post('firstname'),
                'middlename' => $this->input->post('middlename'),
                'alias' => $this->input->post('alias'),
                'birthday' => $this->input->post('birthday'),
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'civilstatus' => $this->input->post('civilstatus'),
                'voterstatus' => $this->input->post('voterstatus'),
                'birth_of_place' => $this->input->post('birth_of_place'),
                'citizenship' => $this->input->post('citizenship'),
                'telephone_no' => $this->input->post('telephone_no'),
                'mobile_no' => $this->input->post('mobile_no'),
                'height' => $this->input->post('height'),
                'weight' => $this->input->post('weight'),
                'PAG_IBIG' => $this->input->post('PAG_IBIG'),
                'PHILHEALTH' => $this->input->post('PHILHEALTH'),
                'SSS' => $this->input->post('SSS'),
                'TIN' => $this->input->post('TIN'),
                'email' => $this->input->post('email'),
                'spouse' => $this->input->post('spouse'),
                'father' => $this->input->post('father'),
                'mother' => $this->input->post('mother'),
                'area' => $this->input->post('area'),
                'address_1' => $this->input->post('address_1'),
                'address_2' => $this->input->post('address_2'),

            ];


            if ($this->Resident_model->update_resident($data, $id)) {

                echo json_encode([
                    'status' => 'success',
                    'message' => 'Resident updated successfully.'
                ]);
            } else {

                echo json_encode([
                    'status' => 'error',
                    'message' => 'Failed to update resident. Please check the data and try again.'
                ]);
            }
        }
    }

    public function archive_resident($id)
    {

        $data = [
            'status' => '1',

        ];


        if ($this->Resident_model->archive_resident($data, $id)) {
            // Return success response as JSON
            echo json_encode([
                'status' => 'success',
                'message' => 'Resident archived successfully.'
            ]);
        } else {

            echo json_encode([
                'status' => 'error',
                'message' => 'Failed to archive resident. Please try again.'
            ]);
        }
    }

    public function list()
    {
        $resident = $this->Resident_model->get_all_resident();

        $response = [
            'status' => true,
            'data' => $resident
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }


    public function list_female()
    {
        $resident = $this->Resident_model->get_female_residents();

        $response = [
            'status' => true,
            'data' => $resident
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function list_male()
    {
        $resident = $this->Resident_model->get_male_residents();

        $response = [
            'status' => true,
            'data' => $resident
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
    public function resident_count()
    {
        $resident = $this->Resident_model->get_all_resident_count();

        $response = [
            'status' => true,
            'data' => $resident
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }


    public function voters_registered()
    {
        $registered = $this->Resident_model->get_all_registered_voter();

        $registered = [
            'status' > true,
            'data' => $registered
        ];
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($registered));
    }
}
