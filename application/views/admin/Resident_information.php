<?php include 'application/views/admin/include/header.php'; ?>

<body>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>

        <main class="bg-light">
            <?php include 'application/views/admin/main/topnav.php'; ?>

            <div class="content mt-5 pt-5">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="" id="table">
                                <div class="">
                                    <div class="d-flex justify-content-between my-3">
                                        <h5 class="fw-bold text-dark"> <i class="bi bi-people-fill me-2"></i> Resident
                                            Information</h5>
                                        <button class="btn btn-primary btn-sm" id="addresident"><i
                                                class="bi bi-plus-circle me-2 my-0"></i>Add Resident</button>
                                    </div>
                                </div>
                                <div class="mt-5 mb-3">
                                    <table id="resident-table" class="table table-striped  table-hover p-2"
                                        width="100%">
                                        <thead class="">
                                            <tr style="font-size: 12px;">
                                                <th class="d-none">id</th>
                                                <th class="export" width="10%">Resident #</th>
                                                <th class="export">Full Name</th>
                                                <th class="export">Occupation</th> <!-- Added column -->
                                                <th class="export">Birthday</th> <!-- Added column -->
                                                <th class="export">Age</th> <!-- Added column -->
                                                <th class="export">Gender</th> <!-- Added column -->
                                                <th class="d-none">Civil Status</th> <!-- Added column -->
                                                <th class="d-none">Citizenship</th>
                                                <th class="export" width="10%">Voter Status</th> <!-- Added column -->
                                                <th class="export" width="20%">Address</th>
                                                <th class="d-none">Telephone #</th>
                                                <th class="export" width="10%">Mobile #</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($all_resident as $resident): ?>
                                                <tr style="font-size: 14px;">
                                                    <td class="d-none">
                                                        <?php echo htmlspecialchars($resident['resident_id']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($resident['barangayid']); ?></td>
                                                    <td><?php echo htmlspecialchars($resident['lastname'] . ', ' . $resident['firstname'] . ' ' . $resident['suffix'] . ' ' . $resident['middlename']); ?>
                                                    </td>
                                                    <td class="">
                                                        <?php echo htmlspecialchars($resident['occupation']); ?>
                                                    </td>
                                                    <td class="">
                                                        <?php echo htmlspecialchars($resident['birthday']); ?>
                                                    </td>
                                                    <!-- Display birthday -->
                                                    <td><?php echo htmlspecialchars($resident['age']); ?></td>
                                                    <!-- Display age -->
                                                    <td><?php echo htmlspecialchars($resident['gender']); ?></td>
                                                    <!-- Display gender -->
                                                    <td class="d-none">
                                                        <?php echo htmlspecialchars($resident['civilstatus']); ?>
                                                    </td>
                                                    <!-- Display civilstatus -->
                                                    <td class="d-none">
                                                        <?php echo htmlspecialchars($resident['citizenship']); ?>
                                                    </td>
                                                    <td><?php
                                                    echo $resident['voterstatus'];
                                                    ?></td>
                                                    <!-- Display voterstatus -->
                                                    <td><?php echo htmlspecialchars($resident['building_house_number'] . ' ' . $resident['street'] . ' ' . $resident['purok'] . ' ' . $resident['subdivision'] . ' ' . $resident['barangay'] . ' ' . $resident['zone'] . ' ' . $resident['district'] . ' ' . $resident['municipality'] . ' ' . $resident['region']); ?>
                                                    </td>
                                                    <td class="d-none">
                                                        <?php echo htmlspecialchars($resident['telephone_no']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($resident['mobile_no']); ?></td>

                                                    <!-- Edit button with the resident ID -->
                                                    <td class="" width="10%">
                                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal"
                                                            data-bs-target="#editResidentModal"
                                                            data-resident='<?php echo json_encode($resident); ?>'>
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <button class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#viewResidentModal"
                                                            data-resident='<?php echo json_encode($resident); ?>'>
                                                            <i class="bi bi-eye"></i>
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