<style>
    #editIncidentModal label {
        font-size: 14px;
    }

    #editIncidentModal input {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }

    #editIncidentModal select {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }

    #editIncidentModal textarea {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }
</style>

<div class="modal fade" id="editIncidentModal" tabindex="-1" aria-labelledby="editIncidentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editIncidentModalLabel">Edit Incident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editIncidentForm" class="p-5 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_incident_type" class="form-label">Incident Type</label>
                            <input type="text" class="form-control" id="edit_incident_type" name="incident_type"
                                required>
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
                            <input type="date" class="form-control" id="edit_date_reported" name="date_reported"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_time_reported" class="form-label">Time Reported</label>
                            <input type="time" class="form-control" id="edit_time_reported" name="time_reported"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_date_incident" class="form-label">Date Incident</label>
                            <input type="date" class="form-control" id="edit_date_incident" name="date_incident"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_time_incident" class="form-label">Time Incident</label>
                            <input type="time" class="form-control" id="edit_time_incident" name="time_incident"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_incident_location" class="form-label">Incident Location</label>
                            <input type="text" class="form-control" id="edit_incident_location" name="incident_location"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="edit_incident_narrative" class="form-label">Incident Narrative</label>
                            <textarea class="form-control" id="edit_incident_narrative" name="incident_narrative"
                                rows="3" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>