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
                                        <h5 class="fw-bold text-dark"> <i class="bi bi-people-fill me-2"></i> Walk-in
                                            Certificate</h5>
                                        <!-- <button class="btn btn-primary btn-sm" id="addresident"><i
                                                class="bi bi-plus-circle me-2 my-0"></i>Add Resident</button> -->
                                    </div>
                                </div>
                                <div class="my-5">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="input-group mb-3 mt-5">
                                                <button class="btn btn-primary btn-sm py-3 w-100" id="clearance">
                                                    <i class="bi bi-patch-check-fill me-2"></i>Clearance
                                                </button>
                                                <button class="btn btn-primary btn-sm my-2 py-3 w-100" id="indigency">
                                                    <i class="bi bi-patch-check-fill me-2"></i>Indigency
                                                </button>
                                                <button class="btn btn-primary btn-sm py-3 w-100" id="cert">
                                                    <i class="bi bi-patch-check-fill me-2"></i>Certificate
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <table id="resident-table" class="table table-striped table-hover p-2"
                                                width="100%">
                                                <thead>
                                                    <tr style="font-size: 12px;">
                                                        <th scope="col" class="export">Type</th>
                                                        <th scope="col" class="export">Name</th>
                                                        <th scope="col" class="export">Address</th>
                                                        <th scope="col" class="export">Purpose</th>
                                                        <th scope="col" class="export">Date</th>
                                                        <th scope="col" class="export">Birthdate</th>
                                                        <th scope="col" class="export">Place of Birth</th>
                                                        <th scope="col" class="export">Findings</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 14px;">
                                                    <?php foreach ($certificates as $certificate): ?>
                                                        <tr>
                                                            <td><?php echo htmlspecialchars($certificate['type']); ?></td>
                                                            <td><?php echo htmlspecialchars($certificate['fullname']); ?>
                                                            </td>
                                                            <td><?php echo htmlspecialchars($certificate['address']); ?>
                                                            </td>
                                                            <td><?php echo htmlspecialchars($certificate['purpose']); ?>
                                                            </td>
                                                            <td><?php echo htmlspecialchars($certificate['date']); ?></td>
                                                            <td><?php echo htmlspecialchars($certificate['birthdate']); ?>
                                                            </td>
                                                            <td><?php echo htmlspecialchars($certificate['placebirth']); ?>
                                                            </td>
                                                            <td><?php echo htmlspecialchars($certificate['findings']); ?>
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
            </div>
        </main>
    </div>
    <?php include 'application/views/admin/include/add_resident.php'; ?>
    <?php include 'application/views/admin/include/edit_info_resident.php'; ?>
    <?php include 'application/views/admin/include/jslink.php'; ?>

    <script>
        $(document).ready(function () {
            var table = $('#resident-table').DataTable({
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
                ]
            });

            // Button click event handlers
            $('#clearance').click(function () {
                // Clear the search filter and highlight active button
                table.columns(0).search('Clearance').draw();
                setActiveButton($(this));
            });

            $('#indigency').click(function () {
                table.columns(0).search('Indigency').draw();
                setActiveButton($(this));
            });

            $('#cert').click(function () {
                table.columns(0).search('Certificate').draw();
                setActiveButton($(this));
            });

            // Function to set active class on the clicked button
            function setActiveButton(clickedButton) {
                // Remove active class from all buttons
                $('#clearance, #indigency, #cert').removeClass('active');
                // Add active class to the clicked button
                clickedButton.addClass('active');
            }

            // Optional: Initial active button (if needed)
            setActiveButton($('#clearance')); // Default to 'Certificate' active on page load
        });
    </script>

</body>

</html>