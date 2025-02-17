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
<!-- Add Resident Form Section (not modal anymore) -->
<div class="container mt-5" id="addResidentFormContainer" style="display: none;">
    <div class="card card-primary">
        <div class="card-header">
            <h5 class="modal-title">Add Resident</h5>
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
                        <input type="number" class="form-control" id="barangayid" name="barangayid" required>
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
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-sm float-end mt-5 px-2"><i
                        class="bi bi-plus-circle me-2 my-0"></i>Add Resident</button>
                </div>
            </form>
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