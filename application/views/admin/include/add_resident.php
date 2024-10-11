<style>
    #addResidentForm label {
        font-size: 14px;
    }

    #addResidentForm input {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }

    #addResidentForm select {
        background-color: #f0f0f0;
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
                <form id="addResidentForm" action="<?php echo site_url('resident/create_resident'); ?>" method="post" class="p-5 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="middlename" class="form-label">Middlename</label>
                            <input type="text" class="form-control" id="middlename" name="middlename">
                        </div>
                        <div class="col-md-3">
                            <label for="alias" class="form-label">Alias</label>
                            <input type="text" class="form-control" id="alias" name="alias">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" required>
                        </div>
                        <div class="col-md-3">
                            <label for="birth_of_place" class="form-label">birth_of_place</label>
                            <input type="text" class="form-control" id="birth_of_place" name="birth_of_place" required>
                        </div>
                        <div class="col-md-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="col-md-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="civilstatus" class="form-label">Civil Status</label>
                            <select class="form-select" id="civilstatus" name="civilstatus" required>
                                <option value="">Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="citizenship" class="form-label">Citizenship</label>
                            <select class="form-select" id="citizenship" name="citizenship" required>
                                <option value="">Select</option>
                                <option value="Filipino">Filipino</option>

                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="voterstatus" class="form-label">voterstatus</label>
                            <select class="form-select" id="voterstatus" name="voterstatus" required>
                                <option value="">Select</option>
                                <option value="1">Registered</option>
                                <option value="0">Not Registered</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-3">
                            <label for="address_1" class="form-label">Address 1</label>
                            <input type="text" class="form-control" id="address_1" name="address_1" required>
                        </div>
                        <div class="col-md-3">
                            <label for="address_2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="address_2" name="address_2">
                        </div>
                        <div class="col-md-3">
                            <label for="telephone_no" class="form-label">Telephone No</label>
                            <input type="text" class="form-control" id="telephone_no" name="telephone_no">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="mobile_no" class="form-label">Mobile No</label>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no">
                        </div>
                        <div class="col-md-3">
                            <label for="height" class="form-label">Height (cm)</label>
                            <input type="text" class="form-control" id="height" name="height">
                        </div>
                        <div class="col-md-3">
                            <label for="weight" class="form-label">Weight (kg)</label>
                            <input type="text" class="form-control" id="weight" name="weight">
                        </div>
                        <div class="col-md-3">
                            <label for="PAG_IBIG" class="form-label">PAG-IBIG</label>
                            <input type="text" class="form-control" id="PAG_IBIG" name="PAG_IBIG">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="PHILHEALTH" class="form-label">PHILHEALTH</label>
                            <input type="text" class="form-control" id="PHILHEALTH" name="PHILHEALTH">
                        </div>
                        <div class="col-md-3">
                            <label for="SSS" class="form-label">SSS</label>
                            <input type="text" class="form-control" id="SSS" name="SSS">
                        </div>
                        <div class="col-md-3">
                            <label for="TIN" class="form-label">TIN</label>
                            <input type="text" class="form-control" id="TIN" name="TIN">
                        </div>
                        <div class="col-md-3">
                            <label for="spouse" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" id="spouse" name="spouse">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="father" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="father" name="father">
                        </div>
                        <div class="col-md-3">
                            <label for="mother" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="mother" name="mother">
                        </div>
                        <div class="col-md-3">
                            <label for="area" class="form-label">Area</label>
                            <input type="text" class="form-control" id="area" name="area">
                        </div>
                        <div class="col-md-3">
                            <label for="date_registered" class="form-label">Date Registered</label>
                            <input type="date" class="form-control" id="date_registered" name="date_registered"
                                required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary px-5 mt-5">Add Resident</button>
                </form>
            </div>
        </div>
    </div>
</div>