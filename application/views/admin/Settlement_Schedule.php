<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay 185</title>
    <link rel="shortcut icon" href="https://tse3.mm.bing.net/th?id=OIP.54-qxAfgXRkmPyPDmECkWQAAAA&pid=Api&P=0&h=220"
        type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        overflow: hidden;
    }

    main {
        height: 100vh;
        overflow-y: scroll;
        width: 100vw;
        overflow-x: hidden;
        position: relative;
    }

    .content {
        position: relative;
        margin-block: 5rem;
        z-index: 2;
    }

    .table-responsive {
        overflow-y: auto;
        overflow-x: auto;
    }

    .resident-table {
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 14px;
        width: 100%;
    }

    .resident-table th,
    .resident-table td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: left;
        font-size: 13px;
        margin-inline: 1rem;
    }

    .resident-table th {
        background-color: #203659;
        color: white;
        position: sticky;
        top: 0;
        z-index: 1;
    }

    .resident-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .resident-table tr:hover {
        background-color: #e9ecef;
    }

    .dataTables_wrapper {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-block: 2rem;
    }

    .dataTables_wrapper .dataTables_filter input,
    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #203659;
        border-radius: 4px;
        padding: 8px;
        margin-left: 10px;
    }

    .dataTables_wrapper .dataTables_paginate {
        margin-top: 10px;
    }

    /* Add styles for clickable items */
    .clickable {
        cursor: pointer;
        padding: 10px;
        margin: 0 10px;
        border-radius: 5px;
        background-color: #e9ecef;
    }

    .clickable.active {
        background-color: #203659;
        /* Active background color */
        color: white;
        /* Active text color */
        border-radius: 5px;
        /* Optional: rounded corners */
    }


    .clickable:hover {
        background-color: #d0d0d0;
    }

    .table-container {
        display: none;
        /* Hide all tables by default */
    }
</style>

<body>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <?php include 'application/views/admin/include/header.php'; ?>

            <div class="container-fluid content">
                <div class="row">
                    <div class="col-9">
                        <div class="row p-5 mx-1 rounded-4 bg-light shadow-lg">
                            <div class="d-flex justify-content-between mb-5">
                                <h1 class="fw-bold text-dark"><i class="bi bi-card-heading"></i>Settlement Schedule</h1>
                                <button class="btn btn-primary max-w-50 px-5 m-2" data-bs-toggle="modal"
                                    data-bs-target="#addSettlementModal">Add Settlement</button>
                            </div>

                            <div class="d-flex">
                                <ul class="d-flex" style="list-style-type: none; padding: 0; margin: 0;">
                                    <li class="clickable" data-target="#scheduledTable">Settlement Scheduled</li>
                                    <li class="clickable" data-target="#unscheduledTable">Unschedules Settlement</li>
                                    <li class="clickable" data-target="#todayTable">Schedule Today</li>
                                    <li class="clickable" data-target="#settledTable">Settled Cases</li>
                                </ul>
                            </div>

                            <div class="table-container" id="scheduledTable">
                                <div class="table-responsive">
                                    <table class="resident-table table mb-5">
                                        <thead>
                                            <tr>
                                                <th scope="col">Case Number</th>
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
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($all_settlement as $settlement): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($settlement['case_number']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['date_of_filling']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['type_of_case']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['details']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['contact']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['respondent_relationship']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($settlement['date_mediation']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member1']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member2']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['lupon_member3']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['summary']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['term_settlement']); ?></td>
                                                    <td><?php echo htmlspecialchars($settlement['date_settlement']); ?></td>
                                                    <td class="d-flex justify-content-center align-items-center">
                                                        <button class="btn btn-primary px-3 my-1" data-bs-toggle="modal"
                                                            data-bs-target="#editSettlementModal"
                                                            data-settlement='<?php echo json_encode($settlement); ?>'>
                                                            Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="p-1">
                            <div class="p-1 mb-3 rounded-3">
                                <div class="card p-2 shadow text-center">
                                    <div class="card-header bg-primary py-3 text-light">
                                        Settled Cases
                                    </div>
                                    <div class="card-body fs-2">
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="p-1 mb-3 rounded-3">
                                <div class="card p-2 shadow text-center">
                                    <div class="card-header bg-success py-3 text-light">
                                        Scheduled Cases
                                    </div>
                                    <div class="card-body fs-2">
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="p-1 mb-3 rounded-3">
                                <div class="card p-2 shadow text-center">
                                    <div class="card-header bg-danger py-3 text-light">
                                        Unsettled Cases
                                    </div>
                                    <div class="card-body fs-2">
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="p-1 mb-3 rounded-3">
                                <div class="card p-2 shadow text-center">
                                    <div class="card-header bg-warning py-3 text-light">
                                        Unscheduled Cases
                                    </div>
                                    <div class="card-body fs-2">
                                        0
                                    </div>
                                </div>
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
                <div class="modal-dialog">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('.resident-table').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthChange": true,
                "scrollX": true,
                "scrollY": 'auto',
                "scrollCollapse": true,
                "language": {
                    "search": "<label class='search-label'></label> _INPUT_ <button class='btn btn-primary search-btn'>Search</button>",
                    "searchPlaceholder": "Type to search...",
                    "lengthMenu": "Show _MENU_ entries",
                }
            });
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
    </script>
</body>

</html>