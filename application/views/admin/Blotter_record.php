<?php include 'application/views/admin/include/header.php'; ?>

<body>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <?php include 'application/views/admin/main/topnav.php'; ?>

            <div class="content mt-5 pt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-3" id="table">
                                <div class="">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h5 class="fw-bold text-dark"> <i class="bi bi-card-list me-2"></i>Blotter
                                            Record</h5>
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#addIncidentModal">Add Blotter</button>
                                    </div>

                                    <div class="container-fluid overflow-scroll">
                                        <table id="resident-table" class="table table-striped table-hover p-2"
                                            width="100%">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th class="export">Blotter ID</th>
                                                    <th class="export">Complaint Type</th>
                                                    <th class="export">Description</th>
                                                    <th class="export">ReportedBy</th>
                                                    <th class="export">AssignedTo</th>
                                                    <th class="export">Status</th>
                                                    <th class="export">ActionTaken</th>
                                                    <th class="export">DateReported</th>
                                                    <th >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody style="font-size: 14px;">
                                                <?php foreach ($all_blotters as $all_blotter): ?>
                                                    <tr>
                                                        <td><?php echo htmlspecialchars($all_blotter['BlotterID']); ?></td>
                                                        <td><?php echo htmlspecialchars($all_blotter['ComplaintType']); ?>
                                                        </td>
                                                        <td><?php echo htmlspecialchars($all_blotter['Description']); ?>
                                                        </td>
                                                        <td><?php echo htmlspecialchars($all_blotter['ReportedBy']); ?></td>
                                                        <td><?php echo htmlspecialchars($all_blotter['AssignedTo']); ?></td>
                                                        <td><?php echo htmlspecialchars($all_blotter['Status']); ?></td>
                                                        <td><?php echo htmlspecialchars($all_blotter['ActionTaken']); ?>
                                                        </td>
                                                        <td><?php echo htmlspecialchars($all_blotter['DateReported']); ?>
                                                        </td>
                                                        <td class="">
                                                            <button class="btn btn-primary btn-sm me-1"
                                                                data-bs-toggle="modal" data-bs-target="#editIncidentModal"
                                                                data-resident='<?php echo json_encode($resident); ?>'>
                                                                <i class="bi bi-pencil-square"></i>
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
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include 'application/views/admin/include/add_blotter.php'; ?>
    <?php include 'application/views/admin/include/edit_info_blotter.php'; ?>

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

            $(document).on('click', '#addresident', function () {
                $('#addResidentFormContainer').modal('show');
            });

            $('.search-btn').on('click', function () {
                var searchValue = $('.dataTables_filter input').val();
                $('.resident-table').DataTable().search(searchValue).draw();
            });
        });
    </script>
</body>

</html>