<style>
    #editIncidentModal label {
        font-size: 14px;
    }

    #editIncidentModal input,
    #editIncidentModal select,
    #editIncidentModal textarea {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }
</style>

<div class="modal fade" id="editIncidentModal" tabindex="-1" aria-labelledby="editIncidentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editIncidentModalLabel">Edit Incident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editIncidentForm" method="post" class="p-4 rounded-4 shadow-lg">
                    <input type="hidden" id="blotter_id" name="id">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_complaint_type" class="form-label">Complaint Type</label>
                            <input type="text" class="form-control" id="edit_complaint_type" name="ComplaintType" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_description" class="form-label">Description</label>
                            <textarea rows="4" class="form-control" id="edit_description" name="Description" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_reported_by" class="form-label">Reported By</label>
                            <input type="text" class="form-control" id="edit_reported_by" name="ReportedBy" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_assigned_to" class="form-label">Assigned To</label>
                            <input type="text" class="form-control" id="edit_assigned_to" name="AssignedTo" required>
                        </div>

                        <div class="col-md-6">
                            <label for="edit_status" class="form-label">Status</label>
                            <select class="form-select" id="edit_status" name="Status" required>
                                <option value="">Select</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_action_taken" class="form-label">Action Taken</label>
                            <input type="text" class="form-control" id="edit_action_taken" name="ActionTaken" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_complainant_name" class="form-label">Complainant Name</label>
                            <input type="text" class="form-control" id="edit_complainant_name" name="ComplainantName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_respondent_name" class="form-label">Respondent Name</label>
                            <input type="text" class="form-control" id="edit_respondent_name" name="RespondentName" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary px-5">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('button[data-bs-toggle="modal"]');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const residentData = JSON.parse(this.getAttribute('data-resident'));

                document.getElementById('blotter_id').value = residentData.id;
                document.getElementById('edit_complaint_type').value = residentData.ComplaintType;
                document.getElementById('edit_description').value = residentData.Description;
                document.getElementById('edit_reported_by').value = residentData.ReportedBy;
                document.getElementById('edit_assigned_to').value = residentData.AssignedTo;
                document.getElementById('edit_status').value = residentData.Status;
                document.getElementById('edit_action_taken').value = residentData.ActionTaken;
                document.getElementById('edit_complainant_name').value = residentData.ComplainantName;
                document.getElementById('edit_respondent_name').value = residentData.RespondentName;
            });
        });

        // Handle form submission
        document.getElementById('editIncidentForm').addEventListener('submit', function (event) {
            event.preventDefault();

            fetch('<?php echo site_url('blotters/update_blotters/'); ?>' + document.getElementById('blotter_id').value, {
                method: 'POST',
                body: new URLSearchParams(new FormData(this)),
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Hide the modal
                $('#editIncidentModal').modal('hide');

                alert('Update Successfully!');
                // Redirect after a short delay
                setTimeout(() => {
                    window.location.href = 'Blotters';
                }, 500);
            })
            .catch(error => {
                console.error('An unexpected error occurred:', error);
            });
        });
    });
</script>
