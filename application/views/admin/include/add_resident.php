<style>
    #addResidentForm label {
        font-size: 14px;
        font-weight: bold;
        ;
    }

    #addResidentForm input {
        font-size: 13px;
        border: 1px solid #cacaca;
    }

    #addResidentForm select {
        font-size: 13px;
        border: 1px solid #cacaca;
    }
</style>

<!-- Modal for Adding Resident -->
<div class="modal fade" id="addResidentModal" tabindex="-1" aria-labelledby="addResidentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addResidentModalLabel">Add Resident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Alert message container -->
                <div id="alertMessage" class="alert" style="display: none;"></div>

                <!-- Form for adding resident -->
                <form id="addResidentForm" action="<?php echo site_url('resident/create_resident'); ?>" method="post"
                    class="p-5 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3">
                            <label for="barangayid" class="form-label">Branggay Id</label><span
                                class="text-danger">*</span>
                            <input type="number" class="form-control" id="barangayid" name="barangayid" required>
                        </div>
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <label for="lastname" class="form-label">Last Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="firstname" class="form-label">First Name</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="middlename" class="form-label">Middle Name</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="middlename" name="middlename">
                        </div>
                        <div class="col-md-3">
                            <label for="alias" class="form-label">Alias</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="alias" name="alias">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="birthday" class="form-label">Birthday</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" id="birthday" name="birthday" required>
                        </div>
                        <div class="col-md-3">
                            <label for="birth_of_place" class="form-label">Place of Birth</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="birth_of_place" name="birth_of_place" required>
                        </div>
                        <div class="col-md-3">
                            <label for="age" class="form-label">Age</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="col-md-3">
                            <label for="gender" class="form-label">Gender</label><span class="text-danger">*</span>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="civilstatus" class="form-label">Civil Status</label><span
                                class="text-danger">*</span>
                            <select class="form-select" id="civilstatus" name="civilstatus" required>
                                <option value="">Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="citizenship" class="form-label">Citizenship</label><span
                                class="text-danger">*</span>
                            <select class="form-select" id="citizenship" name="citizenship" required>
                                <option value="">Select</option>
                                <option value="Filipino">Filipino</option>

                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="voterstatus" class="form-label">Voter Status</label><span
                                class="text-danger">*</span>
                            <select class="form-select" id="voterstatus" name="voterstatus" required>
                                <option value="">Select</option>
                                <option value="1">Registered</option>
                                <option value="0">Not Registered</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="email" class="form-label">Email</label><span class="text-danger">*</span>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-9">
                            <label for="address_1" class="form-label">Adress</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="address_1" name="address_1" required>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="telephone_no" class="form-label">Telephone No</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="telephone_no" name="telephone_no">
                        </div>
                        <div class="col-md-3">
                            <label for="mobile_no" class="form-label">Mobile No</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no">
                        </div>
                        <div class="col-md-3">
                            <label for="height" class="form-label">Height (cm)</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="height" name="height">
                        </div>
                        <div class="col-md-3">
                            <label for="weight" class="form-label">Weight (kg)</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="weight" name="weight">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="spouse" class="form-label">Spouse Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="spouse" name="spouse">
                        </div>
                        <div class="col-md-3">
                            <label for="father" class="form-label">Father's Name</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="father" name="father">
                        </div>
                        <div class="col-md-3">
                            <label for="mother" class="form-label">Mother's Name</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="mother" name="mother">
                        </div>
                        <div class="col-md-3">
                            <label for="area" class="form-label">Area</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="area" name="area">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-sm float-end mt-5 px-2"><i
                        class="bi bi-plus-circle me-2 my-0"></i>Add Resident</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('addResidentForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const form = this;

        // Perform AJAX request
        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
            .then(response => response.json())
            .then(data => {
                // Check if the response status is success or error
                alertMessage.classList.add(data.status === 'success' ? 'alert-success' : 'alert-danger');
                alertMessage.innerText = data.message;
                alertMessage.style.display = 'block'; // Show the alert message

                // If the request is successful, hide the modal and reset the form
                if (data.status === 'success') {
                    alert('Add Successfully!');
                    setTimeout(() => {
                        $('#addResidentModal').modal('hide'); // Hide the modal
                        form.reset(); // Reset the form
                        // Redirect to the resident page after 2 seconds
                        window.location.href = '/barangay/resident'; // Adjust the URL as needed
                    }, 500);
                } else {
                    alert('already have data available.!');
                    form.reset(); // Reset the form
                    // Redirect to the resident page after 2 seconds
                    window.location.href = '/barangay/resident'; // Adjust the URL as needed
                }
            })
            .catch(error => {
                alert('already have data available.!');
                form.reset(); // Reset the form
                // Redirect to the resident page after 2 seconds
                window.location.href = '/barangay/resident'; // Adjust the URL as needed
            });
    });

</script>