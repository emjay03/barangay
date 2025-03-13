<style>
    #editResidentForm label {
        font-size: 14px;
    }

    #editResidentForm input,
    #editResidentForm select {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }
</style>


<div class="modal fade" id="editResidentModal" tabindex="-1" role="dialog" aria-labelledby="addAnnouncementModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-content" style="height: 100%; width: 100%;">
                <div class="modal-header">
                    <h5 class="modal-title" id="editResidentModalLabel">Edit Resident</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editResidentForm" method="post" class="p-5 rounded-4 shadow-lg">
                        <input type="hidden" id="updateresident_id" />
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="updatelastname" name="lastname" required>
                            </div>
                            <div class="col-md-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="updatefirstname" name="firstname" required>
                            </div>
                            <div class="col-md-3">
                                <label for="middlename" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="updatemiddlename" name="middlename"
                                    required>
                            </div>
                            <div class="col-md-3">
                                <label for="alias" class="form-label">Alias</label>
                                <input type="text" class="form-control" id="updatealias" name="alias">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="birthday" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="updatebirthday" name="birthday" required>
                            </div>
                            <div class="col-md-3">
                                <label for="birth_of_place" class="form-label">Place of Birth</label>
                                <input type="text" class="form-control" id="updatebirth_of_place" name="birth_of_place"
                                    required>
                            </div>
                            <div class="col-md-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="updateage" name="age" required>
                            </div>
                            <div class="col-md-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="updategender" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col-md-3 mt-3">
                                <label for="civilstatus" class="form-label">Civil Status</label>
                                <select class="form-select" id="updatecivilstatus" name="civilstatus" required>
                                    <option value="">Select</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>

                            <div class="col-md-3 mt-3">
                                <label for="citizenship" class="form-label">Citizenship</label>
                                <select class="form-select" id="updatecitizenship" name="citizenship" required>
                                    <option value="">Select</option>
                                    <option value="Filipino">Filipino</option>
                                </select>
                            </div>

                            <div class="col-md-3 mt-3">
                                <label for="voterstatus" class="form-label">Voter Status</label>
                                <select class="form-select" id="updatevoterstatus" name="voterstatus" required>
                                    <option value="">Select</option>
                                    <option value="1">Registered</option>
                                    <option value="0">Not Registered</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="updateemail" name="email" required>
                            </div>
                            <div class="col-md-3 col-lg-9">
                                <label for="address_1" class="form-label">Address</label>
                                <input type="text" class="form-control" id="updateaddress_1" name="address_1" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="telephone_no" class="form-label">Telephone No</label>
                                <input type="text" class="form-control" id="updatetelephone_no" name="telephone_no">
                            </div>
                            <div class="col-md-3">
                                <label for="mobile_no" class="form-label">Mobile No</label>
                                <input type="text" class="form-control" id="updatemobile_no" name="mobile_no">
                            </div>
                            <div class="col-md-3">
                                <label for="height" class="form-label">Height (cm)</label>
                                <input type="text" class="form-control" id="updateheight" name="height">
                            </div>
                            <div class="col-md-3">
                                <label for="weight" class="form-label">Weight (kg)</label>
                                <input type="text" class="form-control" id="updateweight" name="weight">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="spouse" class="form-label">Spouse Name</label>
                                <input type="text" class="form-control" id="updatespouse" name="spouse">
                            </div>
                            <div class="col-md-3">
                                <label for="father" class="form-label">Father's Name</label>
                                <input type="text" class="form-control" id="updatefather" name="father">
                            </div>
                            <div class="col-md-3">
                                <label for="mother" class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" id="updatemother" name="mother">
                            </div>
                            <div class="col-md-3">
                                <label for="area" class="form-label">Area</label>
                                <input type="text" class="form-control" id="updatearea" name="area">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary px-5 mt-5">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Open modal and populate form with resident data
        const editButtons = document.querySelectorAll('[data-bs-target="#editResidentModal"]');
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const residentData = JSON.parse(this.getAttribute('data-resident'));

                // Populate the form with data
                document.getElementById('updateresident_id').value = residentData.resident_id || '';
                document.getElementById('updatelastname').value = residentData.lastname || '';
                document.getElementById('updatefirstname').value = residentData.firstname || '';
                document.getElementById('updatemiddlename').value = residentData.middlename || '';
                document.getElementById('updatealias').value = residentData.alias || '';
                document.getElementById('updatebirthday').value = residentData.birthday || '';
                document.getElementById('updatebirth_of_place').value = residentData.birth_of_place || '';
                document.getElementById('updateage').value = residentData.age || '';
                document.getElementById('updategender').value = residentData.gender || '';
                document.getElementById('updatecivilstatus').value = residentData.civilstatus || '';
                document.getElementById('updatecitizenship').value = residentData.citizenship || '';
                document.getElementById('updatevoterstatus').value = residentData.voterstatus || '';
                document.getElementById('updateemail').value = residentData.email || '';
                document.getElementById('updateaddress_1').value = residentData.address_1 || '';
                document.getElementById('updatetelephone_no').value = residentData.telephone_no || '';
                document.getElementById('updatemobile_no').value = residentData.mobile_no || '';
                document.getElementById('updateheight').value = residentData.height || '';
                document.getElementById('updateweight').value = residentData.weight || '';
                document.getElementById('updatespouse').value = residentData.spouse || '';
                document.getElementById('updatefather').value = residentData.father || '';
                document.getElementById('updatemother').value = residentData.mother || '';
                document.getElementById('updatearea').value = residentData.area || '';
            });
        });

        // Handle form submission
        document.getElementById('editResidentForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Construct the form data
            const formData = new FormData(this);
            const residentId = document.getElementById('updateresident_id').value;

            fetch(`<?php echo site_url('resident/update_resident/'); ?>${residentId}`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(response => response.json())
                .then(data => {
                    // Close the modal
                    $('#editResidentModal').modal('hide');
                    alert('Update Successfully!');

                    // Optionally reload or redirect after a delay
                    setTimeout(() => {
                        window.location.href = '/barangay/Resident'; // Adjust the redirect URL as needed
                    }, 500);
                })
                .catch(error => {
                    console.error('Error updating resident:', error);
                });
        });
    });
</script>