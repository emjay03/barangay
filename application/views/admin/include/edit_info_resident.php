<style>
    #editResidentForm label {
        font-size: 14px;
    }

    #editResidentForm input {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }

    #editResidentForm select {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }
</style>

<div class="modal fade" id="editResidentModal" tabindex="-1" aria-labelledby="editResidentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editResidentModalLabel">Edit Resident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editResidentForm"
                    method="post" class="p-5 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="hidden" id="updateresident_id" />
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="updatelastname" name="lastname"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="updatefirstname" name="firstname"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="middlename" class="form-label">Middlename</label>
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
                            <input type="date" class="form-control" id="updatebirthday" name="birthday"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="birth_of_place" class="form-label">birth_of_place</label>
                            <input type="text" class="form-control" id="updatebirth_of_place" name="birth_of_place"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="updateage" name="age"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="updategender" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male" <?php echo (isset($resident['gender']) && $resident['gender'] === 'Male') ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php echo (isset($resident['gender']) && $resident['gender'] === 'Female') ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="civilstatus" class="form-label">Civil Status</label>
                            <select class="form-select" id="updatecivilstatus" name="civilstatus" required>
                                <option value="">Select</option>
                                <option value="Single" <?php echo (isset($resident['civilstatus']) && $resident['civilstatus'] === 'Single') ? 'selected' : ''; ?>>Single</option>
                                <option value="Married" <?php echo (isset($resident['civilstatus']) && $resident['civilstatus'] === 'Married') ? 'selected' : ''; ?>>Married</option>
                                <option value="Divorced" <?php echo (isset($resident['civilstatus']) && $resident['civilstatus'] === 'Divorced') ? 'selected' : ''; ?>>Divorced</option>
                                <option value="Widowed" <?php echo (isset($resident['civilstatus']) && $resident['civilstatus'] === 'Widowed') ? 'selected' : ''; ?>>Widowed</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="citizenship" class="form-label">Citizenship</label>
                            <select class="form-select" id="updatecitizenship" name="citizenship" required>
                                <option value="">Select</option>
                                <option value="Filipino" <?php echo (isset($resident['citizenship']) && $resident['citizenship'] === 'Filipino') ? 'selected' : ''; ?>>Filipino</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="voterstatus" class="form-label">Voter Status</label>
                            <select class="form-select" id="updatevoterstatus" name="voterstatus" required>
                                <option value="">Select</option>
                                <option value="1" <?php echo (isset($resident['voterstatus']) && $resident['voterstatus'] === '1') ? 'selected' : ''; ?>>Registered</option>
                                <option value="0" <?php echo (isset($resident['voterstatus']) && $resident['voterstatus'] === '0') ? 'selected' : ''; ?>>Not Registered</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="updateemail" name="email"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label for="address_1" class="form-label">Address 1</label>
                            <input type="text" class="form-control" id="address_1" name="address_1"
                                value="<?php echo htmlspecialchars($resident['address_1']); ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label for="address_2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="address_2" name="address_2"
                                value="<?php echo htmlspecialchars($resident['address_2']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="telephone_no" class="form-label">Telephone No</label>
                            <input type="text" class="form-control" id="telephone_no" name="telephone_no"
                                value="<?php echo htmlspecialchars($resident['telephone_no']); ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="mobile_no" class="form-label">Mobile No</label>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                value="<?php echo htmlspecialchars($resident['mobile_no']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="height" class="form-label">Height (cm)</label>
                            <input type="text" class="form-control" id="height" name="height"
                                value="<?php echo htmlspecialchars($resident['height']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="weight" class="form-label">Weight (kg)</label>
                            <input type="text" class="form-control" id="weight" name="weight"
                                value="<?php echo htmlspecialchars($resident['weight']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="PAG_IBIG" class="form-label">PAG-IBIG</label>
                            <input type="text" class="form-control" id="PAG_IBIG" name="PAG_IBIG"
                                value="<?php echo htmlspecialchars($resident['PAG_IBIG']); ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="PHILHEALTH" class="form-label">PHILHEALTH</label>
                            <input type="text" class="form-control" id="PHILHEALTH" name="PHILHEALTH"
                                value="<?php echo htmlspecialchars($resident['PHILHEALTH']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="SSS" class="form-label">SSS</label>
                            <input type="text" class="form-control" id="SSS" name="SSS"
                                value="<?php echo htmlspecialchars($resident['SSS']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="TIN" class="form-label">TIN</label>
                            <input type="text" class="form-control" id="TIN" name="TIN"
                                value="<?php echo htmlspecialchars($resident['TIN']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="spouse" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" id="spouse" name="spouse"
                                value="<?php echo htmlspecialchars($resident['spouse']); ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="father" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="father" name="father"
                                value="<?php echo htmlspecialchars($resident['father']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="mother" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="mother" name="mother"
                                value="<?php echo htmlspecialchars($resident['mother']); ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="area" class="form-label">Area</label>
                            <input type="text" class="form-control" id="area" name="area"
                                value="<?php echo htmlspecialchars($resident['area']); ?>">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary px-5 mt-5">Add Resident</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-bs-target="#editResidentModal"]').forEach(button => {
            button.addEventListener('click', () => {
                const residentData = JSON.parse(button.getAttribute('data-resident'));
                const resident_id_u = residentData.resident_id;
                console.log("s", resident_id_u)
                const form = document.getElementById('editResidentForm');
                form.action = `<?php echo site_url('resident/update_resident/'); ?>${resident_id_u}`;
                console.log(residentData);

                const {
                    resident_id,
                    lastname,
                    firstname,
                    middlename,
                    alias,
                    birthday,
                    age,
                    gender,
                    civilstatus,
                    voterstatus,
                    birth_of_place,
                    citizenship,
                    telephone_no,
                    mobile_no,
                    height,
                    weight,
                    PAG_IBIG,
                    PHILHEALTH,
                    SSS,
                    TIN,
                    email,
                    spouse,
                    father,
                    mother,
                    area,
                    address_1,
                    address_2
                } = residentData;

                document.getElementById('updateresident_id').value = residentData.resident_id || '';
                document.getElementById('updatelastname').value = residentData.lastname || '';
                document.getElementById('updatefirstname').value = firstname;
                document.getElementById('updatemiddlename').value = middlename;
                document.getElementById('updatealias').value = alias;
                document.getElementById('updatebirthday').value = birthday;
                document.getElementById('updatebirth_of_place').value = birth_of_place;
                document.getElementById('updateage').value = age;
                document.getElementById('updategender').value = gender;
                document.getElementById('updatecivilstatus').value = civilstatus;
                document.getElementById('updatevoterstatus').value = voterstatus;
                document.getElementById('updatetelephone_no').value = telephone_no;
                document.getElementById('updatemobile_no').value = mobile_no;
                document.getElementById('updateemail').value = email;
                document.getElementById('updateheight').value = height;
                document.getElementById('updateweight').value = weight;
                document.getElementById('updatePAG_IBIG').value = PAG_IBIG;
                document.getElementById('PHILHEALTH').value = PHILHEALTH;
                document.getElementById('SSS').value = SSS;
                document.getElementById('TIN').value = TIN;

                document.getElementById('spouse').value = spouse;
                document.getElementById('father').value = father;
                document.getElementById('mother').value = mother;
                document.getElementById('area').value = area;
                document.getElementById('address_1').value = address_1;
                document.getElementById('address_2').value = address_2;
            });
        });
    });
</script>