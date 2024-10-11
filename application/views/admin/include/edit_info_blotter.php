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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editIncidentModalLabel">Edit Incident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editIncidentForm" method="post" class="p-5 rounded-4 shadow-lg">
                    <input type="hidden" id="blotter_id" name="blotter_id">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_incident_type" class="form-label">Incident Type</label>
                            <input type="text" class="form-control" id="edit_incident_type" name="incident_type" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_status" class="form-label">Status</label>
                            <select class="form-select" id="edit_status" name="status" required>
                                <option value="">Select</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_schedule" class="form-label">Schedule</label>
                            <input type="date" class="form-control" id="edit_schedule" name="schedule" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_date_reported" class="form-label">Date Reported</label>
                            <input type="date" class="form-control" id="edit_date_reported" name="date_reported" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_time_reported" class="form-label">Time Reported</label>
                            <input type="time" class="form-control" id="edit_time_reported" name="time_reported" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_date_incident" class="form-label">Date Incident</label>
                            <input type="date" class="form-control" id="edit_date_incident" name="date_incident" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_time_incident" class="form-label">Time Incident</label>
                            <input type="time" class="form-control" id="edit_time_incident" name="time_incident" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_incident_location" class="form-label">Incident Location</label>
                            <input type="text" class="form-control" id="edit_incident_location" name="incident_location" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="edit_incident_narrative" class="form-label">Incident Narrative</label>
                            <textarea class="form-control" id="edit_incident_narrative" name="incident_narrative" rows="3" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
                
                document.getElementById('blotter_id').value = residentData.blotter_id;
                document.getElementById('edit_incident_type').value = residentData.incident_type;
                document.getElementById('edit_status').value = residentData.status;
                document.getElementById('edit_schedule').value = residentData.schedule;
                document.getElementById('edit_date_reported').value = residentData.date_reported;
                document.getElementById('edit_time_reported').value = residentData.time_reported;
                document.getElementById('edit_date_incident').value = residentData.date_incident;
                document.getElementById('edit_time_incident').value = residentData.time_incident;
                document.getElementById('edit_incident_location').value = residentData.incident_location;
                document.getElementById('edit_incident_narrative').value = residentData.incident_narrative;
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
