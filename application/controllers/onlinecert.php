<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Online_Certificate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Certificate_model");
        $this->load->library("form_validation");
        $this->load->helper("security");
    }

    // Method for displaying all certificates
    public function all_certificates()
    {
        // Get all certificates from the model
        $data['certificates'] = $this->Certificate_model->get_all_certificates();

        // Load the view and pass the certificates data
        $this->load->view('all_certificates', $data);
    }

    // Other methods ...
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Certificates</title>
</head>
<body>

    <h1>All Certificates</h1>

    <?php if (!empty($certificates)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Purpose</th>
                    <th>Birth Date</th>
                    <th>Place of Birth</th>
                    <th>Findings</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($certificates as $certificate): ?>
                    <tr>
                        <td><?php echo $certificate->id; ?></td>
                        <td><?php echo $certificate->type; ?></td>
                        <td><?php echo $certificate->fullname; ?></td>
                        <td><?php echo $certificate->address; ?></td>
                        <td><?php echo $certificate->date; ?></td>
                        <td><?php echo $certificate->purpose; ?></td>
                        <td><?php echo $certificate->birthdate; ?></td>
                        <td><?php echo $certificate->placebirth; ?></td>
                        <td><?php echo $certificate->findings; ?></td>
                        <td><?php echo $certificate->created_at; ?></td>
                        <td><?php echo $certificate->updated_at; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No certificates found.</p>
    <?php endif; ?>

</body>
</html>
