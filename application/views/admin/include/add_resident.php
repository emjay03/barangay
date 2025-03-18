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
<div class="modal fade" id="addResidentFormContainer" tabindex="-1" role="dialog"
    aria-labelledby="addResidentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="modal-title">Add Resident</h5>
                <button type="button" class="btn-close text-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <!-- Alert message container -->
                <div id="alertMessage" class="alert" style="display: none;"></div>

                <!-- Form for adding resident -->
                <form id="addResidentForm" action="<?php echo site_url('resident/create_resident'); ?>" method="post"
                    class="p-5 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3">
                            <label for="barangayid" class="form-label">Barangay Id</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="barangayid" name="barangayid" required>
                        </div>
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
                            <label for="middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename">
                        </div>
                        <div class="col-md-3">
                            <label for="suffix" class="form-label">Suffix</label>
                            <input type="text" class="form-control" id="suffix" name="suffix">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="lifestatus" class="form-label">Life Status</label>
                            <input type="text" class="form-control" id="lifestatus" name="lifestatus">
                        </div>
                        <div class="col-md-3">
                            <label for="pwd" class="form-label">PWD</label>
                            <input type="text" class="form-control" id="pwd" name="pwd">
                        </div>
                        <div class="col-md-3">
                            <label for="birthday" class="form-label">Birthday</label><span
                                class="text-danger">*</span>
                            <input type="date" class="form-control" id="birthday" name="birthday" required>
                        </div>
                        <div class="col-md-3">
                            <label for="age" class="form-label">Age</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="gender" class="form-label">Gender</label><span class="text-danger">*</span>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="civilstatus" class="form-label">Civil Status</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="civilstatus" name="civilstatus" required>
                        </div>
                        <div class="col-md-3">
                            <label for="religion" class="form-label">Religion</label>
                            <input type="text" class="form-control" id="religion" name="religion">
                        </div>
                        <div class="col-md-3">
                            <label for="voterstatus" class="form-label">Voter Status</label>
                            <input type="text" class="form-control" id="voterstatus" name="voterstatus">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="text" class="form-control" id="occupation" name="occupation">
                        </div>
                        <div class="col-md-3">
                            <label for="birth_of_place" class="form-label">Place of Birth</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="birth_of_place" name="birth_of_place" required>
                        </div>
                        <div class="col-md-3">
                            <label for="citizenship" class="form-label">Citizenship</label>
                            <input type="text" class="form-control" id="citizenship" name="citizenship">
                        </div>
                        <div class="col-md-3">
                            <label for="telephone_no" class="form-label">Telephone No</label>
                            <input type="text" class="form-control" id="telephone_no" name="telephone_no">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="mobile_no" class="form-label">Mobile No</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" required>
                        </div>
                        <div class="col-md-3">
                            <label for="height" class="form-label">Height</label>
                            <input type="text" class="form-control" id="height" name="height">
                        </div>
                        <div class="col-md-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text" class="form-control" id="weight" name="weight">
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="spouse" class="form-label">Spouse</label>
                            <input type="text" class="form-control" id="spouse" name="spouse">
                        </div>
                        <div class="col-md-3">
                            <label for="father" class="form-label">Father</label>
                            <input type="text" class="form-control" id="father" name="father">
                        </div>
                        <div class="col-md-3">
                            <label for="mother" class="form-label">Mother</label>
                            <input type="text" class="form-control" id="mother" name="mother">
                        </div>
                        <div class="col-md-3">
                            <label for="area" class="form-label">Area</label>
                            <input type="text" class="form-control" id="area" name="area">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="building_house_number" class="form-label">Building/House No</label>
                            <input type="text" class="form-control" id="building_house_number" name="building_house_number">
                        </div>
                        <div class="col-md-3">
                            <label for="street" class="form-label">Street</label>
                            <input type="text" class="form-control" id="street" name="street">
                        </div>
                        <div class="col-md-3">
                            <label for="purok" class="form-label">Purok</label>
                            <input type="text" class="form-control" id="purok" name="purok">
                        </div>
                        <div class="col-md-3">
                            <label for="subdivision" class="form-label">Subdivision</label>
                            <input type="text" class="form-control" id="subdivision" name="subdivision">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="barangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" id="barangay" name="barangay">
                        </div>
                        <div class="col-md-3">
                            <label for="zone" class="form-label">Zone</label>
                            <input type="text" class="form-control" id="zone" name="zone">
                        </div>
                        <div class="col-md-3">
                            <label for="district" class="form-label">District</label>
                            <input type="text" class="form-control" id="district" name="district">
                        </div>
                        <div class="col-md-3">
                            <label for="municipality" class="form-label">Municipality</label>
                            <input type="text" class="form-control" id="municipality" name="municipality">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="region" class="form-label">Region</label>
                            <input type="text" class="form-control" id="region" name="region">
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
                const alertMessage = document.getElementById('alertMessage');
                alertMessage.classList.add(data.status === 'success' ? 'alert-success' : 'alert-danger');
                alertMessage.innerText = data.message;
                alertMessage.style.display = 'block'; // Show the alert message

                // If the request is successful, hide the modal and reset the form
                if (data.status === 'success') {
                    setTimeout(() => {
                        $('#addResidentFormContainer').modal('hide'); // Hide the modal
                        form.reset(); // Reset the form
                        window.location.href = '/barangay/resident'; // Redirect to the resident page
                    }, 500);
                }
            })
            .catch(error => {
                alert('An error occurred, please try again later.');
                console.error(error);
            });
    });
</script>
