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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            transition: all 0.3s ease;
        }

        .login {
            background-image: url("application/public/background.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            filter: contrast(110%) brightness(110%);
            isolation: isolate;
        }

        .login::before {
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

        .btn-primary {
            background-color: oklch(0.705 0.213 47.604) !important;
        }

        .btn-primary:hover {
            background-color: oklch(0.646 0.222 41.116) !important;
        }

        .border-primary {
            border-color: oklch(0.21 0.006 285.885) !important;
            border-width: 2px;
        }

        .btn-primary {
            background-color: oklch(0.705 0.213 47.604) !important;
        }

        .btn-primary:hover {
            background-color: oklch(0.646 0.222 41.116) !important;
        }

        label {
            font-weight: 600;
            font-size: 14px;
        }

        .col-12 input {
            font-size: 13px;
        }

        .col-12 select {
            font-size: 13px;
        }
    </style>
</head>
<!--<img class="rounded-circle me-4" style="z-index: 2"
                    src="application/public/logo.png"
                    alt="barangay187" width="100">-->

<body>
    <main class="bg-light">
        <div>
            <div class="loginContainer" style="height: 100%;">
                <div class="container-fluid p-0 pb-1">
                    <div class="container-fluid login py-5">
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

                            <h1 class="text-light fw-bold text-uppercase mt-3">Online Request Form</h1>
                            <h4 class="text-light fw-bold text-uppercase mt-2">Barangay Certificate</h4>
                        </div>
                    </div>

                    <!-- Start of the form -->
                    <div class="d-flex justify-content-center align-items-center mx-2 mt-3 mt-lg-0 mb-3">
                        <div class="card shadow px-0 p-lg-2 mt-lg-5"
                            style="border-top: 2px solid oklch(0.705 0.213 47.604); width: 500px;">
                            <h5 class="card-header">Online Certificate Form</h5>
                            <div class="card-body">
                                <form action="" id="certificateForm" method="post">
                                    <div class="row container-fluid">
                                        <div class="col-12 mb-3">
                                            <label for="barangayid"><span class="text-danger">*</span>Barangay I.D #
                                                :</label>
                                            <input type="text" name="barangayid" required
                                                class="form-control text-capitalize rounded-0 border-primary border-top-0 border-end-0 border-start-0"
                                                id="barangayid" value="<?php echo set_value('barangayid'); ?>"
                                                placeholder="Enter Barangay I.D #" />
                                            <?php echo form_error('barangayid'); ?>
                                        </div>

                                        <div id="nextStep" class="col-12 d-none">
                                            <div class="col-12 mb-3">
                                                <label for="certificatePurpose" class="form-label"><span
                                                        class="text-danger">*</span>Purpose : </label>
                                                <input type="hidden" id="certificatePurpose" name="purpose" required />
                                                <select class="form-control text-capitalize" id="certificatePurpose1"
                                                    required
                                                    onchange="document.getElementById('certificatePurpose').value=this.value">
                                                    <option value="">Select purpose</option>
                                                    <option value="Proof of residency">Proof of residency</option>
                                                    <option value="Proof of good moral character">Proof of good moral
                                                        character
                                                    </option>
                                                    <option value="Job application">Job application</option>
                                                    <option value="Business permits">Business permits</option>
                                                    <option value="Loan applications">Loan applications</option>
                                                    <option value="Government-related Processes">Government-related
                                                        Processes
                                                    </option>
                                                    <option value="Scholarship">Scholarship</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                <input type="text" class="form-control text-capitalize mt-2"
                                                    id="certificatePurposeOthers" disabled>
                                                <small class="form-text text-muted">Specify : </small>
                                                <script>
                                                    const selectPurpose2 = document.getElementById('certificatePurpose1');
                                                    const inputPurpose2 = document.getElementById('certificatePurposeOthers');
                                                    selectPurpose2.addEventListener('change', function () {
                                                        if (this.value === 'Others') {
                                                            inputPurpose2.disabled = false;
                                                            inputPurpose2.required = true;
                                                            document.getElementById('certificatePurpose').value = '';
                                                        } else {
                                                            inputPurpose2.disabled = true;
                                                            inputPurpose2.required = false;
                                                            inputPurpose2.value = '';
                                                        }
                                                    });
                                                    inputPurpose2.addEventListener('input', function () {
                                                        if (!inputPurpose2.disabled) {
                                                            document.getElementById('certificatePurpose').value = inputPurpose2.value;
                                                        }
                                                    });
                                                </script>
                                            </div>

                                            <div class="col-12 d-none">
                                                <label for="type"><span class="text-danger">*</span>Type:</label>
                                                <input type="hidden" name="type" id="type" value="Certificate" />
                                                <?php echo form_error('type'); ?>
                                            </div>

                                            <div class="col-12 d-none">
                                                <label for="status"><span class="text-danger">*</span>Status:</label>
                                                <input type="hidden" name="status" id="status" value="pending" />
                                                <?php echo form_error('status'); ?>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="fullname"><span class="text-danger">*</span>Fullname
                                                    :</label>
                                                <input type="text" name="fullname" required readonly
                                                    class="form-control text-capitalize rounded-0 border-primary border-top-0 border-end-0 border-start-0"
                                                    id="fullname" value="<?php echo set_value('fullname'); ?>"
                                                    placeholder="Enter Fullname" />
                                                <?php echo form_error('fullname'); ?>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="address"><span class="text-danger">*</span>Input Current
                                                    Address:</label>
                                                <input type="text" name="address" id="address" required readonly
                                                    class="form-control text-capitalize rounded-0 border-primary border-top-0 border-end-0 border-start-0"
                                                    value="<?php echo set_value('address'); ?>" />
                                                <?php echo form_error('address'); ?>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="date"><span class="text-danger">*</span>Date:</label>
                                                <input type="date" name="date" id="date" readonly required
                                                    class="form-control text-capitalize rounded-0 border-primary border-top-0 border-end-0 border-start-0"
                                                    value="<?php echo date('Y-m-d'); ?>" />
                                                <?php echo form_error('date'); ?>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <button
                                                    class="btn btn-primary w-100 px-5 border-0 text-center text-light fw-normal"
                                                    type="submit">
                                                    Submit Certificate
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- End of the form -->

                    <!-- Success/Error Modal -->
                    <div class="modal fade" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-semibold" id="responseModalLabel"></h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body">
                                    <p id="modalMessage"></p>
                                    <p id="modalDetails"></p>
                                    
                                    <p id="controlNumber" class="fw-bold fs-1 my-3"></p>
                                    
                                    <p id="screenshotMessage" class="fw-semibold"></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal"
                                        onclick="window.location.reload();">Okay</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('barangayid').addEventListener('keyup', function (event) {
                            // Check if enter key is pressed in desktop and mobile
                            var isEnterKey = event.key === 'Enter' || event.keyCode === 13;

                            if (isEnterKey) {
                                var barangayid = this.value;

                                if (barangayid.length > 0) {
                                    // Make an AJAX request to fetch fullname and address based on barangayid
                                    fetch('<?php echo base_url(); ?>OnlineCertificate/fetch_fullname_by_barangayid?barangayid=' + barangayid)
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.status === 'success') {
                                                // Populate the fullname field with the received first, middle, last name and suffix
                                                document.getElementById('fullname').value = data.firstname + ' ' + data.middlename + ' ' + data.lastname + ' ' + data.suffix;

                                                // Populate the address field with the received address
                                                document.getElementById('address').value = data.address;

                                                // Show the next step button
                                                document.getElementById('nextStep').classList.remove('d-none');
                                            } else {
                                                // Handle the case where barangayid is not found
                                                alert(data.message);
                                                document.getElementById('fullname').value = '';
                                                document.getElementById('address').value = '';
                                                document.getElementById('nextStep').classList.add('d-none');
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));
                                } else {
                                    // If barangayid is empty, clear the fullname and address fields
                                    document.getElementById('fullname').value = '';
                                    document.getElementById('address').value = '';
                                    document.getElementById('nextStep').classList.add('d-none');
                                }
                            }
                        });

                        $('#certificateForm').on('submit', function (e) {
                            e.preventDefault();  // Prevent normal form submission

                            // Hide the modal initially (optional)
                            $('#responseModal').modal('hide');

                            // Make the AJAX request
                            $.ajax({
                                url: '<?php echo base_url(); ?>OnlineCertificate/create_certificate',  // Controller URL
                                type: 'POST',
                                data: $(this).serialize(),  // Serialize form data
                                dataType: 'json',  // Expecting JSON response
                                success: function (response) {
                                    console.log(response);  // Add this line to check the response in the console

                                    // Check if the response is successful
                                    if (response.status === 'success') {
                                        // Success: Show success modal
                                        $('#responseModalLabel').addClass('text-success');
                                        $('#responseModalLabel').text('Request Submitted Successfully');
                                        $('#modalMessage').text('Your certificate request has been submitted successfully.');
                                        $('#modalDetails').html('<strong>Fullname:</strong> ' + $('#fullname').val() + '<br><strong>Type:</strong> ' + $('#type').val());
                                        $('#screenshotMessage').text('Please screenshot this information before closing.');
                                        $('#responseModal').modal('show');

                                        $('#controlNumber').text(response.control_number);
                                    } else {
                                        // Error: Show error modal with the message
                                        $('#responseModalLabel').addClass('text-danger');
                                        $('#responseModalLabel').text('Error');
                                        $('#modalMessage').text(response.message || 'An error occurred while submitting the form.');
                                        $('#modalDetails').empty();
                                        $('#responseModal').modal('show');
                                    }
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                    // Handle AJAX request error
                                    $('#responseModalLabel').addClass('text-danger');
                                    $('#responseModalLabel').text('Error');
                                    $('#modalMessage').text('There was an issue submitting your request. Please try again later.');
                                    $('#modalDetails').empty();
                                    $('#responseModal').modal('show');
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