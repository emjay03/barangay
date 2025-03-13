<?php include 'application/views/admin/include/header.php'; ?>

<body>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>

        <main class="bg-light">
            <?php include 'application/views/admin/main/topnav.php'; ?>

            <div class="content mt-5">
                <div class="container-fluid ">
                    <div class="p-0 mx-0 rounded-4 bg-light">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="fw-bold text-dark"><i class="bi bi-card-heading me-2"></i>Settlement
                                Schedule
                            </h5>
                            <button class="btn btn-primary max-w-50 px-5 m-2 d-none" data-bs-toggle="modal"
                                data-bs-target="#addSettlementModal">Add Settlement</button>
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 p-1 mb-3 rounded-3">
                                    <div class="card p-2 shadow text-center">
                                        <div class="card-header bg-primary py-3 text-light">
                                            Settled Cases
                                        </div>
                                        <div class="card-body fs-2">
                                            <?php echo !empty($get_Settled) ? $get_Settled : 0; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1 mb-3 rounded-3">
                                    <div class="card p-2 shadow text-center">
                                        <div class="card-header bg-success py-3 text-light">
                                            Scheduled Cases
                                        </div>
                                        <div class="card-body fs-2">
                                            <?php echo !empty($get_Scheduled) ? $get_Scheduled : 0; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1 mb-3 rounded-3">
                                    <div class="card p-2 shadow text-center">
                                        <div class="card-header bg-danger py-3 text-light">
                                            Unsettled Cases
                                        </div>
                                        <div class="card-body fs-2">
                                            0
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1 mb-3 rounded-3">
                                    <div class="card p-2 shadow text-center">
                                        <div class="card-header bg-warning py-3 text-light">
                                            Unscheduled Cases
                                        </div>
                                        <div class="card-body fs-2">
                                            <?php echo !empty($get_Unscheduled) ? $get_Unscheduled : 0; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <ul class="d-flex justify-content-start align-items-center list-unstyled">
                                <li><button class="clickable me-2 border-0 btn-primary btn-sm"
                                        data-target="#scheduledTable">Settlement Scheduled</button></li>
                                <li><button class="clickable me-2 border-0 btn-primary btn-sm"
                                        data-target="#unscheduledTable">Unschedules Settlement</button>
                                </li>
                                <li><button class="clickable me-2 border-0 btn-primary btn-sm"
                                        data-target="#todayTable">Schedule Today</button></li>
                                <li><button class="clickable border-0 btn-primary btn-sm"
                                        data-target="#settledTable">Settled Cases</button></li>
                            </ul>
                        </div>

                        <div class="table-container" id="scheduledTable">
                            <div class="">
                                <table id="resident-table" class="table table-striped table-hover p-2" width="100%">
                                    <thead>
                                        <tr style="font-size: 12px;">
                                            <th scope="col">Case Number</th>
                                            <th scope="col">Blotter ID</th>
                                            <th scope="col">Date of Filling</th>
                                            <th scope="col">Type of Case</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Respondent Relationship</th>
                                            <th scope="col">Date Mediation</th>
                                            <th scope="col">Lupon Member 1</th>
                                            <th scope="col">Lupon Member 2</th>
                                            <th scope="col">Lupon Member 3</th>
                                            <th scope="col">Summary</th>
                                            <th scope="col">Term Settlement</th>
                                            <th scope="col">Date Settlement</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($all_settlement as $settlement): ?>
                                            <?php if ($settlement['status'] === 'Scheduled'): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($settlement['case_number']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['BlotterID']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['date_of_filling']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['type_of_case']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['details']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['contact']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['respondent_relationship']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['date_mediation']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member1']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member2']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member3']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['summary']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['term_settlement']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['date_settlement']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['status']); ?></td>
                                                    <td class="">
                                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal"
                                                            data-bs-target="#editSettlementModal"
                                                            data-resident='<?php echo json_encode($resident); ?>'>
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="table-container" id="unscheduledTable">
                            <div class="">
                                <table id="resident-table2" class="table table-striped table-hover p-2" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Case Number</th>
                                            <th scope="col">Blotter ID</th>
                                            <th scope="col">Date of Filling</th>
                                            <th scope="col">Type of Case</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Respondent Relationship</th>
                                            <th scope="col">Date Mediation</th>
                                            <th scope="col">Lupon Member 1</th>
                                            <th scope="col">Lupon Member 2</th>
                                            <th scope="col">Lupon Member 3</th>
                                            <th scope="col">Summary</th>
                                            <th scope="col">Term Settlement</th>
                                            <th scope="col">Date Settlement</th>
                                            <th scope="col">Status</th>

                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($all_settlement as $settlement): ?>
                                            <?php if ($settlement['status'] === 'Unscheduled'): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($settlement['case_number']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['BlotterID']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['date_of_filling']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['type_of_case']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['details']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['contact']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['respondent_relationship']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['date_mediation']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member1']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member2']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member3']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['summary']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['term_settlement']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['date_settlement']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['status']); ?></td>
                                                    <td class="">
                                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal"
                                                            data-bs-target="#editSettlementModal"
                                                            data-resident='<?php echo json_encode($resident); ?>'>
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="table-container" id="settledTable">
                            <div class="">
                                <table id="resident-table4" class="table table-striped table-hover p-2" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Case Number</th>
                                            <th scope="col">Blotter ID</th>
                                            <th scope="col">Date of Filling</th>
                                            <th scope="col">Type of Case</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Respondent Relationship</th>
                                            <th scope="col">Date Mediation</th>
                                            <th scope="col">Lupon Member 1</th>
                                            <th scope="col">Lupon Member 2</th>
                                            <th scope="col">Lupon Member 3</th>
                                            <th scope="col">Summary</th>
                                            <th scope="col">Term Settlement</th>
                                            <th scope="col">Date Settlement</th>
                                            <th scope="col">Status</th>

                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($all_settlement as $settlement): ?>
                                            <?php if ($settlement['status'] === 'Settled'): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($settlement['case_number']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['BlotterID']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['date_of_filling']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['type_of_case']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['details']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['contact']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['respondent_relationship']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['date_mediation']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member1']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member2']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member3']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['summary']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['term_settlement']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['date_settlement']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['status']); ?></td>
                                                    <td class="">
                                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal"
                                                            data-bs-target="#editSettlementModal"
                                                            data-resident='<?php echo json_encode($resident); ?>'>
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="addSettlementModal" tabindex="-1" aria-labelledby="addSettlementModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSettlementModalLabel">Add Settlement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addSettlementForm">
                                <div class="mb-3">
                                    <label for="caseNumber" class="form-label">Case Number</label>
                                    <input type="text" class="form-control" id="caseNumber" required>
                                </div>
                                <div class="mb-3">
                                    <label for="dateFilling" class="form-label">Date of Filling</label>
                                    <input type="date" class="form-control" id="dateFilling" required>
                                </div>
                                <div class="mb-3">
                                    <label for="typeOfCase" class="form-label">Type of Case</label>
                                    <input type="text" class="form-control" id="typeOfCase" required>
                                </div>
                                <div class="mb-3">
                                    <label for="details" class="form-label">Details</label>
                                    <textarea class="form-control" id="details" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input type="text" class="form-control" id="contact" required>
                                </div>
                                <div class="mb-3">
                                    <label for="respondentRelationship" class="form-label">Respondent
                                        Relationship</label>
                                    <input type="text" class="form-control" id="respondentRelationship" required>
                                </div>
                                <div class="mb-3">
                                    <label for="dateMediation" class="form-label">Date Mediation</label>
                                    <input type="date" class="form-control" id="dateMediation" required>
                                </div>
                                <div class="mb-3">
                                    <label for="luponMembers" class="form-label">Lupon Members</label>
                                    <input type="text" class="form-control" placeholder="Member 1" id="luponMember1"
                                        required>
                                    <input type="text" class="form-control mt-2" placeholder="Member 2"
                                        id="luponMember2" required>
                                    <input type="text" class="form-control mt-2" placeholder="Member 3"
                                        id="luponMember3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="summary" class="form-label">Summary</label>
                                    <textarea class="form-control" id="summary" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="termSettlement" class="form-label">Term Settlement</label>
                                    <input type="text" class="form-control" id="termSettlement" required>
                                </div>
                                <div class="mb-3">
                                    <label for="dateSettlement" class="form-label">Date Settlement</label>
                                    <input type="date" class="form-control" id="dateSettlement" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="addSettlementButton">Add
                                Settlement</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editSettlementModal" tabindex="-1" aria-labelledby="editSettlementModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editSettlementModalLabel">Edit Settlement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editSettlementForm">
                                <input type="hidden" id="editCaseNumber">
                                <div class="mb-3">
                                    <label for="editDateFilling" class="form-label">Date of Filling</label>
                                    <input type="date" class="form-control" id="editDateFilling" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editTypeOfCase" class="form-label">Type of Case</label>
                                    <input type="text" class="form-control" id="editTypeOfCase" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editDetails" class="form-label">Details</label>
                                    <textarea class="form-control" id="editDetails" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="editName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="editName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editContact" class="form-label">Contact</label>
                                    <input type="text" class="form-control" id="editContact" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editRespondentRelationship" class="form-label">Respondent
                                        Relationship</label>
                                    <input type="text" class="form-control" id="editRespondentRelationship" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editDateMediation" class="form-label">Date Mediation</label>
                                    <input type="date" class="form-control" id="editDateMediation" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editLuponMembers" class="form-label">Lupon Members</label>
                                    <input type="text" class="form-control" placeholder="Member 1" id="editLuponMember1"
                                        required>
                                    <input type="text" class="form-control mt-2" placeholder="Member 2"
                                        id="editLuponMember2" required>
                                    <input type="text" class="form-control mt-2" placeholder="Member 3"
                                        id="editLuponMember3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editSummary" class="form-label">Summary</label>
                                    <textarea class="form-control" id="editSummary" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="editTermSettlement" class="form-label">Term Settlement</label>
                                    <input type="text" class="form-control" id="editTermSettlement" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editDateSettlement" class="form-label">Date Settlement</label>
                                    <input type="date" class="form-control" id="editDateSettlement" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="editSettlementButton">Save
                                Changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </div>
    <?php include 'application/views/admin/include/add_resident.php'; ?>
    <?php include 'application/views/admin/include/edit_info_resident.php'; ?>

    <?php include 'application/views/admin/include/jslink.php'; ?>

    <script>
        $(document).ready(function () {
            $('#resident-table').DataTable({
                "dom": "<'row'<'col-md-12 d-flex justify-content-end mb-3'B><'col-md-6'l><'col-md-6'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row'<'col-md-5'i><'col-md-7'p>>",
                "responsive": true,
                "searching": true,
                "paging": true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                },
                "buttons": [{
                    extend: 'copyHtml5',
                    className: 'btn btn-outline-danger btn-sm export-btn',
                    text: '<i class="bi bi-clipboard-fill"></i>  Copy',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'csvHtml5',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-filetype-csv"></i>  CSV',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-file-earmark-spreadsheet"></i>  Excel',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-file-earmark-pdf-fill"></i> PDF',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-printer-fill"></i>  Print',
                    exportOptions: {
                        columns: '.export'
                    }
                }
                    ,]
            });

            $('#resident-table2').DataTable({
                "dom": "<'row'<'col-md-12 d-flex justify-content-end mb-3'B><'col-md-6'l><'col-md-6'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row'<'col-md-5'i><'col-md-7'p>>",
                "responsive": true,
                "searching": true,
                "paging": true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                },
                "buttons": [{
                    extend: 'copyHtml5',
                    className: 'btn btn-outline-danger btn-sm export-btn',
                    text: '<i class="bi bi-clipboard-fill"></i>  Copy',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'csvHtml5',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-filetype-csv"></i>  CSV',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-file-earmark-spreadsheet"></i>  Excel',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-file-earmark-pdf-fill"></i> PDF',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-printer-fill"></i>  Print',
                    exportOptions: {
                        columns: '.export'
                    }
                }
                    ,]
            });

            $('#resident-table4').DataTable({
                "dom": "<'row'<'col-md-12 d-flex justify-content-end mb-3'B><'col-md-6'l><'col-md-6'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row'<'col-md-5'i><'col-md-7'p>>",
                "responsive": true,
                "searching": true,
                "paging": true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                },
                "buttons": [{
                    extend: 'copyHtml5',
                    className: 'btn btn-outline-danger btn-sm export-btn',
                    text: '<i class="bi bi-clipboard-fill"></i>  Copy',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'csvHtml5',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-filetype-csv"></i>  CSV',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-file-earmark-spreadsheet"></i>  Excel',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-file-earmark-pdf-fill"></i> PDF',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-printer-fill"></i>  Print',
                    exportOptions: {
                        columns: '.export'
                    }
                }
                    ,]
            });

            // Click event for table selection
            $('.clickable').on('click', function () {
                var target = $(this).data('target');

                // Hide all tables and show the target table
                $('.table-container').hide();
                $(target).show();

                // Remove active class from all items and add to the clicked item
                $('.clickable').removeClass('active');
                $(this).addClass('active');
            });

            // Show the first table by default and set active class
            $('.table-container').hide();
            $('#scheduledTable').show();
            $('.clickable').first().addClass('active');
        });
    </script>
</body>

</html>