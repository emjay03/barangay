<style>
    #addIncidentModal label {
        font-size: 14px;
    }

    #addIncidentModal input {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }

    #addIncidentModal select {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }

    #addIncidentModal textarea {
        background-color: #f0f0f0;
        font-size: 13px;
        border: 1px solid #cacaca;
    }
</style>

<!-- Modal for Adding/Updating Incident -->
<div class="modal fade" id="addIncidentModal" tabindex="-1" aria-labelledby="addIncidentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addIncidentModalLabel">Add Incident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="alertMessage" class="alert px-5" role="alert"></div>
                <form id="addIncidentForm" action="<?php echo site_url('blotters/create_blotters'); ?>" method="post" class="p-4 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="incident_type" class="form-label">Incident Type</label>
                            <input type="text" class="form-control" id="incident_type" name="incident_type" required>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="">Select</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="schedule" class="form-label">Schedule</label>
                            <input type="date" class="form-control" id="schedule" name="schedule" required>
                        </div>
                        <div class="col-md-6">
                            <label for="date_reported" class="form-label">Date Reported</label>
                            <input type="date" class="form-control" id="date_reported" name="date_reported" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="time_reported" class="form-label">Time Reported</label>
                            <input type="time" class="form-control" id="time_reported" name="time_reported" required>
                        </div>
                        <div class="col-md-6">
                            <label for="date_incident" class="form-label">Date Incident</label>
                            <input type="date" class="form-control" id="date_incident" name="date_incident" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="time_incident" class="form-label">Time Incident</label>
                            <input type="time" class="form-control" id="time_incident" name="time_incident" required>
                        </div>
                        <div class="col-md-6">
                            <label for="incident_location" class="form-label">Incident Location</label>
                            <input type="text" class="form-control" id="incident_location" name="incident_location"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="incident_narrative" class="form-label">Incident Narrative</label>
                            <textarea class="form-control" id="incident_narrative" name="incident_narrative" rows="3"
                                required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary px-5">Submit Incident</button>
                </form>
            </div>
        </div>
    </div>
</div>