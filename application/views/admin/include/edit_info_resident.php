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
                <form id="editResidentForm" class="p-5 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="edit_lastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="edit_firstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
                        </div>
                        <div class="col-md-3">
                            <label for="edit_middlename" class="form-label">Middlename</label>
                            <input type="text" class="form-control" id="edit_middlename" name="middlename">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_alias" class="form-label">Alias</label>
                            <input type="text" class="form-control" id="edit_alias" name="alias">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="edit_birthday" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="edit_birthday" name="birthday" required>
                        </div>
                        <div class="col-md-3">
                            <label for="edit_age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="edit_age" name="age" required>
                        </div>
                        <div class="col-md-3">
                            <label for="edit_gender" class="form-label">Gender</label>
                            <select class="form-select" id="edit_gender" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="edit_civilstatus" class="form-label">Civil Status</label>
                            <select class="form-select" id="edit_civilstatus" name="civilstatus" required>
                                <option value="">Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="edit_email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="edit_email" name="email" required>
                        </div>
                        <div class="col-md-3">
                            <label for="edit_address_1" class="form-label">Address 1</label>
                            <input type="text" class="form-control" id="edit_address_1" name="address_1" required>
                        </div>
                        <div class="col-md-3">
                            <label for="edit_address_2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="edit_address_2" name="address_2">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_telephone_no" class="form-label">Telephone No</label>
                            <input type="text" class="form-control" id="edit_telephone_no" name="telephone_no">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="edit_mobile_no" class="form-label">Mobile No</label>
                            <input type="text" class="form-control" id="edit_mobile_no" name="mobile_no">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_height" class="form-label">Height (cm)</label>
                            <input type="text" class="form-control" id="edit_height" name="height">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_weight" class="form-label">Weight (kg)</label>
                            <input type="text" class="form-control" id="edit_weight" name="weight">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_PAG_IBIG" class="form-label">PAG-IBIG</label>
                            <input type="text" class="form-control" id="edit_PAG_IBIG" name="PAG_IBIG">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="edit_PHILHEALTH" class="form-label">PHILHEALTH</label>
                            <input type="text" class="form-control" id="edit_PHILHEALTH" name="PHILHEALTH">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_SSS" class="form-label">SSS</label>
                            <input type="text" class="form-control" id="edit_SSS" name="SSS">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_TIN" class="form-label">TIN</label>
                            <input type="text" class="form-control" id="edit_TIN" name="TIN">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_spouse" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" id="edit_spouse" name="spouse">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="edit_father" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="edit_father" name="father">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_mother" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="edit_mother" name="mother">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_area" class="form-label">Area</label>
                            <input type="text" class="form-control" id="edit_area" name="area">
                        </div>
                        <div class="col-md-3">
                            <label for="edit_date_registered" class="form-label">Date Registered</label>
                            <input type="date" class="form-control" id="edit_date_registered" name="date_registered"
                                required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>