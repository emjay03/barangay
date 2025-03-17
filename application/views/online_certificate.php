<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barangay 185</title>
    <link rel="shortcut icon" href="application/public/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            transition: all 0.3s ease;
        }

        main {
            background-image: url("application/public/background.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            filter: contrast(110%) brightness(110%);
            isolation: isolate;
        }

        main::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            opacity: 0.5;
            z-index: -1;
        }

        .login::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 60%;
            height: 60%;
            clip-path: polygon(0 0, 100% 0, 0 100%);
            background-color: #FF0000;
            opacity: 0.3;
            z-index: -1;
        }

        .login::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60%;
            height: 60%;
            clip-path: polygon(100% 100%, 100% 0, 0 100%);
            background-color: #095100;
            opacity: 0.3;
            z-index: -1;
        }

        .loginContainer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 50%;
            clip-path: polygon(0 0, 100% 0, 0 100%);
            background-color: #FF0000;
            opacity: 0.5;
            z-index: -1;
        }

        .loginContainer::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 50%;
            clip-path: polygon(100% 100%, 100% 0, 0 100%);
            background-color: #095100;
            opacity: 0.5;
            z-index: -1;
        }

        .btn-primary {
            background-color: oklch(0.705 0.213 47.604) !important;
        }

        .btn-primary:hover {
            background-color: oklch(0.646 0.222 41.116) !important;
        }
    </style>
</head>
<!--<img class="rounded-circle me-4" style="z-index: 2"
                    src="application/public/logo.png"
                    alt="barangay187" width="100">-->

<body>
    <main class="bg-light" style="height: 100vh;">
        <div class="login" style="height: 100%;">
            <div class="loginContainer" style="height: 100%;">
                <div class="container-fluid ">
                    <div class="d-block text-center d-block d-lg-none">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/brgy185.jpg" alt="barangay187" width="70">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/northcaloocan_logo.png" alt="barangay187" width="70">
                        </div>
                        <p class="text-light fw-bold mt-3" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                            BARANGAY 185
                            MALARIA DISTRICT 3,
                            CALOOCAN CITY</p>
                        <p class="text-light fw-light" style="font-size: 12px;">Barangay Information Management
                            System &copy;
                            <?php echo date('Y'); ?>
                        </p>

                        <p class="text-light fw-bold text-uppercase">Online Request Form</p>
                        <p class="text-light fw-bold text-uppercase mt-2">Barangay Certificate</p>
                    </div>

                    <div class="d-block text-center d-none d-lg-block">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/brgy185.jpg" alt="barangay187" width="120">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/northcaloocan_logo.png" alt="barangay187" width="120">
                        </div>
                        <h1 class="text-light fw-bold mt-3" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                            BARANGAY 185
                            MALARIA DISTRICT 3,
                            CALOOCAN CITY</h1>
                        <p class="text-light fw-light" style="font-size: 20px;">Barangay Information Management
                            System &copy;
                            <?php echo date('Y'); ?>
                        </p>

                        <h1 class="text-light fw-bold text-uppercase mt-5">Online Request Form</h1>
                        <h4 class="text-light fw-bold text-uppercase mt-2">Barangay Certificate</h4>
                    </div>

                    <h1>Online Certificate Form</h1>

                    <!-- Start of the form -->
                    <?php echo form_open('OnlineCertificate/create_certificate', array('id' => 'certificateForm')); ?>

                    <div class="d-none">
                        <label for="type">Type:</label>
                        <input type="hidden" name="type" id="type" value="Certificate" />
                        <?php echo form_error('type'); ?>
                    </div>

                    <div class="d-none">
                        <label for="status">Status:</label>
                        <input type="hidden" name="status" id="status" value="pending" />
                        <?php echo form_error('status'); ?>
                    </div>

                    <div>
                        <label for="fullname">Fullname:</label>
                        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>" />
                        <?php echo form_error('fullname'); ?>
                    </div>

                    <div>
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" value="<?php echo set_value('address'); ?>" />
                        <?php echo form_error('address'); ?>
                    </div>

                    <div>
                        <label for="purpose">Purpose:</label>
                        <input type="text" name="purpose" id="purpose" value="<?php echo set_value('purpose'); ?>" />
                        <?php echo form_error('purpose'); ?>
                    </div>

                    <div>
                        <label for="date">Date:</label>
                        <input type="date" name="date" id="date" value="<?php echo set_value('date'); ?>" />
                        <?php echo form_error('date'); ?>
                    </div>

                    <div>
                        <label for="birthdate">Birthdate:</label>
                        <input type="date" name="birthdate" id="birthdate"
                            value="<?php echo set_value('birthdate'); ?>" />
                        <?php echo form_error('birthdate'); ?>
                    </div>

                    <div>
                        <label for="placebirth">Place of Birth:</label>
                        <input type="text" name="placebirth" id="placebirth"
                            value="<?php echo set_value('placebirth'); ?>" />
                        <?php echo form_error('placebirth'); ?>
                    </div>

                    <div class="d-none">
                        <label for="findings">Findings:</label>
                        <input type="hidden" name="findings" id="findings" value="" />
                        <?php echo form_error('findings'); ?>
                    </div>

                    <div>
                        <button type="submit">Submit Certificate</button>
                    </div>

                    <?php echo form_close(); ?>
                    <!-- End of the form -->

                    <!-- Success Modal -->
                    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="successModalLabel">Request Submitted Successfully</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Your request has been submitted successfully.</p>
                                    <p><strong>Fullname:</strong> <span id="modalFullname"></span></p>
                                    <p><strong>Type:</strong> <span id="modalType"></span></p>
                                    <p>Please screenshot this information before closing.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $('#certificateForm').on('submit', function(e) {
                            e.preventDefault();
                            // Assuming AJAX submission here for demonstration
                            $.ajax({
                                url: '<?php echo base_url(); ?>OnlineCertificate/create_certificate',
                                type: 'POST',
                                data: $(this).serialize(),
                                success: function(response) {
                                    // Assuming the response contains the status
                                    if (response.status === 'success') {
                                        $('#modalFullname').text($('#fullname').val());
                                        $('#modalType').text($('#type').val());
                                        $('#successModal').modal('show');
                                    }
                                }
                            });
                        });
                    </script>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    </script>
</body>

</html>