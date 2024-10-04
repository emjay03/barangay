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

    public function index() {
        $this->load->view('admin/Resident_information');
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
        $this->form_validation->set_rules('citzenship', 'Citizenship', 'required');
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
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('address2', 'Address2', 'required');
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
                'citzenship' => $this->input->post('citzenship'),
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
                'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'date_registered' => $this->input->post('date_registered'),



            );

            if ($this->Resident_model->create_blotters($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add.'));
            }
        }
    }


    public function list()
    {
        $resident = $this->Resident__model->get_all_resident();

        $response = [
            'status' => true,
            'data' => $resident
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
