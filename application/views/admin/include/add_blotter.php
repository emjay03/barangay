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
                <form action="<?php echo site_url('blotters/create_blotter_and_settlement'); ?>" method="post" class="p-4 rounded-4 shadow-lg">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="ComplaintType" class="form-label">ComplaintType</label>
                            <input type="text" class="form-control" id="ComplaintType" name="ComplaintType" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Description" class="form-label">Description</label>
                            <textarea rows="4" type="text" class="form-control" id="Description" name="Description" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="ReportedBy" class="form-label">ReportedBy</label>
                            <input type="text" class="form-control" id="ReportedBy" name="ReportedBy" required>
                        </div>
                        <div class="col-md-6">
                            <label for="AssignedTo" class="form-label">AssignedTo</label>
                            <input type="text" class="form-control" id="AssignedTo" name="AssignedTo" required>
                        </div>

                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="Status" name="Status" required>
                                <option value="">Select</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="ActionTaken" class="form-label">ActionTaken</label>
                            <input type="text" class="form-control" id="ActionTaken" name="ActionTaken" required>
                        </div>
                        <div class="col-md-6">
                            <label for="ComplainantName" class="form-label">ComplainantName</label>
                            <input type="text" class="form-control" id="ComplainantName" name="ComplainantName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="RespondentName" class="form-label">RespondentName</label>
                            <input type="text" class="form-control" id="RespondentName" name="RespondentName" required>
                        </div>

                    </div>








                    <button type="submit" class="btn btn-primary px-5">Submit Incident</button>
                </form>
            </div>
        </div>
    </div>
</div>