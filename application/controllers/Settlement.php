<?php
class Settlement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settlement_model');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }

    public function index()
    {
        $data['all_settlement'] = $this->Settlement_model->get_all_settlement();
        $user = $this->session->userdata('user_data');
        if (!$user) {
            redirect('auth');
        }
        $this->load->view('admin/Settlement_Schedule', array_merge($data, ['user' => $user]));
    }

    public function create_settlement()
    {
        $this->form_validation->set_rules('case_number', 'Case_number', 'required');
        $this->form_validation->set_rules('date_of_filling', 'Date_of_filling', 'required');
        $this->form_validation->set_rules('type_of_case', 'Type_of_case', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('respondent_relationship', 'Respondent_relationship', 'required');
        $this->form_validation->set_rules('date_mediation', 'Date_mediation', 'required');
        $this->form_validation->set_rules('lupon_member1', 'Lupon_member1', 'required');
        $this->form_validation->set_rules('lupon_member2', 'Lupon_member2', 'required');
        $this->form_validation->set_rules('lupon_member3', 'Lupon_member3', 'required');
        $this->form_validation->set_rules('summary', 'Summary', 'required');
        $this->form_validation->set_rules('term_settlement', 'Term_settlement', 'required');
        $this->form_validation->set_rules('date_settlement', 'Date_settlement', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
        } else {

            $upload_path = './application/views/admin/signature/';
            $file_names = [];

            for ($i = 1; $i <= 3; $i++) {
                $file_field = 'signature_file' . $i;
                if (!empty($_FILES[$file_field]['name'])) {
                    $file_name = $_FILES[$file_field]['name'];
                    $file_temp = $_FILES[$file_field]['tmp_name'];
                    $file_target = $upload_path . basename($file_name);

                    // Move uploaded file to the target directory
                    if (move_uploaded_file($file_temp, $file_target)) {
                        $file_names[] = $file_name;
                    } else {
                        echo json_encode(array('status' => 'error', 'message' => 'Failed to upload ' . $file_field));
                        return;
                    }
                } else {
                    echo json_encode(array('status' => 'error', 'message' => 'Please upload ' . $file_field));
                    return;
                }
            }


            $data = array(
                'case_number' => $this->input->post('case_number'),
                'date_of_filling' => $this->input->post('date_of_filling'),
                'type_of_case' => $this->input->post('type_of_case'),
                'details' => $this->input->post('details'),
                'name' => $this->input->post('name'),
                'contact' => $this->input->post('contact'),
                'respondent_relationship' => $this->input->post('respondent_relationship'),
                'date_mediation' => $this->input->post('date_mediation'),
                'lupon_member1' => $this->input->post('lupon_member1'),
                'lupon_member2' => $this->input->post('lupon_member2'),
                'lupon_member3' => $this->input->post('lupon_member3'),
                'summary' => $this->input->post('summary'),
                'term_settlement' => $this->input->post('term_settlement'),
                'date_settlement' => $this->input->post('date_settlement'),
                'signature_file1' => $file_names[0],
                'signature_file2' => $file_names[1],
                'signature_file3' => $file_names[2],
            );

            if ($this->Settlement_model->create_settlement($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'Added successfully.'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Failed to add'));
            }
        }
    }

    public function list()
    {
        $settlement = $this->Settlement_model->get_all_settlement();

        $response = [
            'status' => true,
            'data' => $settlement
        ];

        return $this->output

            ->set_output(json_encode($response, JSON_PRETTY_PRINT));
    }

    public function update_settlement($id)
    {
        // Set validation rules
        $this->form_validation->set_rules('case_number', 'Case_number', 'required');
        $this->form_validation->set_rules('date_of_filling', 'Date_of_filling', 'required');
        $this->form_validation->set_rules('type_of_case', 'Type_of_case', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('respondent_relationship', 'Respondent_relationship', 'required');
        $this->form_validation->set_rules('date_mediation', 'Date_mediation', 'required');
        $this->form_validation->set_rules('lupon_member1', 'Lupon_member1', 'required');
        $this->form_validation->set_rules('lupon_member2', 'Lupon_member2', 'required');
        $this->form_validation->set_rules('lupon_member3', 'Lupon_member3', 'required');
        $this->form_validation->set_rules('summary', 'Summary', 'required');
        $this->form_validation->set_rules('term_settlement', 'Term_settlement', 'required');
        $this->form_validation->set_rules('date_settlement', 'Date_settlement', 'required');

        if ($this->form_validation->run() === FALSE) {
            echo json_encode(array('status' => 'error', 'message' => validation_errors()));
            return;
        }

        $upload_path = './application/views/admin/signature/';
        $file_names = [];
        $existing_files = $this->Settlement_model->get_settlement_files($id);

        for ($i = 1; $i <= 3; $i++) {
            $file_field = 'signature_file' . $i;
            if (!empty($_FILES[$file_field]['name'])) {
                $file_name = $_FILES[$file_field]['name'];
                $file_temp = $_FILES[$file_field]['tmp_name'];
                $file_target = $upload_path . basename($file_name);

                // Move uploaded file to the target directory
                if (move_uploaded_file($file_temp, $file_target)) {
                    $file_names[] = $file_name;
                } else {
                    echo json_encode(array('status' => 'error', 'message' => 'Failed to upload ' . $file_field));
                    return;
                }
            } else {
                // If no file was uploaded, use existing file name
                $file_names[] = $existing_files['signature_file' . $i];
            }
        }

        $data = array(
            'case_number' => $this->input->post('case_number'),
            'date_of_filling' => $this->input->post('date_of_filling'),
            'type_of_case' => $this->input->post('type_of_case'),
            'details' => $this->input->post('details'),
            'name' => $this->input->post('name'),
            'contact' => $this->input->post('contact'),
            'respondent_relationship' => $this->input->post('respondent_relationship'),
            'date_mediation' => $this->input->post('date_mediation'),
            'lupon_member1' => $this->input->post('lupon_member1'),
            'lupon_member2' => $this->input->post('lupon_member2'),
            'lupon_member3' => $this->input->post('lupon_member3'),
            'summary' => $this->input->post('summary'),
            'term_settlement' => $this->input->post('term_settlement'),
            'date_settlement' => $this->input->post('date_settlement'),
            'signature_file1' => $file_names[0],
            'signature_file2' => $file_names[1],
            'signature_file3' => $file_names[2],
        );

        if ($this->Settlement_model->update_settlement($id, $data)) {
            echo json_encode(array('status' => 'success', 'message' => 'Updated successfully.'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to update'));
        }
    }
}
