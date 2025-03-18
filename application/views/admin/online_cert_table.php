<?php include 'application/views/admin/include/header.php'; ?>

<body>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>

        <main class="bg-light">
            <?php include 'application/views/admin/main/topnav.php'; ?>

            <div class="content mt-5 my-5 pt-5">
                <div class="container-fluid mt-3">
                    <div class="p-0 mx-0 rounded-4 bg-light">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="fw-bold text-dark"><i class="bi bi-card-heading me-2"></i>
                                Online Barangay Certificate
                            </h5>
                            <!-- <button class="btn btn-primary btn-sm max-w-50 px-5 m-2" data-bs-toggle="modal"
                                data-bs-target="#addSettlementModal">Add Settlement</button> -->
                        </div>

                        <div class="container-fluid my-2">
                            <ul class="d-flex justify-content-start align-items-center list-unstyled">
                                <li><button class="clickable me-2 border-0 btn-primary btn-sm py-2 px-2"
                                        data-target="#pendingTable">Pending</button></li>
                                <li><button class="clickable me-2 border-0 btn-primary btn-sm py-2 px-2"
                                        data-target="#doneTable">Done</button>
                                </li>
                            </ul>
                        </div>

                        <div class="table-container" id="pendingTable">
                            <div class="">
                                <?php if (!empty($certificates)): ?>
                                    <table id="resident-table" id="resident-table2"
                                        class="table table-striped table-hover p-2" width="100%">
                                        <thead>
                                            <tr style="font-size: 12px;">
                                                <th class="export">ID</th>
                                                <th class="export">Barangay ID</th>
                                                <th class="export">Status</th>
                                                <th class="export">Type</th>
                                                <th class="export">Full Name</th>
                                                <th class="export">Address</th>
                                                <th class="export">Date</th>
                                                <th class="export">Purpose</th>
                                                <th class="export">Control #</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;">
                                            <?php foreach ($certificates as $certificate): ?>
                                                <?php if ($certificate->status === 'pending'): ?>
                                                    <tr>
                                                        <td><?php echo $certificate->id; ?></td>
                                                        <td><?php echo $certificate->barangayid; ?></td> <!-- Added Barangay ID -->
                                                        <td><?php echo $certificate->status; ?></td>
                                                        <td><?php echo $certificate->type; ?></td>
                                                        <td><?php echo $certificate->fullname; ?></td>
                                                        <td><?php echo $certificate->address; ?></td>
                                                        <td><?php echo $certificate->date; ?></td>
                                                        <td><?php echo $certificate->purpose; ?></td>
                                                        <td><?php echo $certificate->control_number; ?></td>
                                                        <td><button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#showModal"
                                                                data-id="<?php echo $certificate->id; ?>"
                                                                data-fullname="<?php echo $certificate->fullname; ?>"
                                                                data-address="<?php echo $certificate->address; ?>"
                                                                data-date="<?php echo $certificate->date; ?>"
                                                                data-purpose="<?php echo $certificate->purpose; ?>"
                                                                data-controlnumber="<?php echo $certificate->control_number; ?>">Show</button>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <!-- Modal -->
                                        <div class="modal fade" id="showModal" tabindex="-1"
                                            aria-labelledby="showModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="showModalLabel">Show Certificate</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php include 'application/views/admin/include/onlinecert.php'; ?>
                                                        <div class="row d-none">
                                                            <div class="col-4">ID:</div>
                                                            <div class="col-8" id="modal-id"></div>
                                                            <div class="col-4" id="modal-date"></div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary"
                                                            id="printCertificate">Print</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            const showModal = document.getElementById('showModal');
                                            showModal.addEventListener('show.bs.modal', function (event) {
                                                const button = event.relatedTarget;
                                                const id = button.getAttribute('data-id');
                                                const fullname = button.getAttribute('data-fullname');
                                                const address = button.getAttribute('data-address');
                                                const date = button.getAttribute('data-date'); // Date in string format
                                                const purpose = button.getAttribute('data-purpose');
                                                const controlNumber = button.getAttribute('data-controlnumber');

                                                const modalId = document.getElementById('modal-id');
                                                const modalFullname = document.getElementById('modal-fullname');
                                                const modalAddress = document.getElementById('modal-address');
                                                const modalDate = document.getElementById('modal-date');
                                                const modalPurpose = document.getElementById('modal-purpose');
                                                const modalControlNumber = document.getElementById('modal-controlnumber');

                                                console.log(date);
                                                console.log(purpose);

                                                modalId.textContent = id;
                                                modalFullname.value = fullname;
                                                modalAddress.value = address;
                                                modalControlNumber.innerHTML = controlNumber;

                                                modalDate.innerText = date;
                                                modalPurpose.value = purpose;
                                                // Call the function to format the date and set the modal inputs for the certificate
                                                formatDateCertificate(new Date(date));  // Pass the date as a JavaScript Date object
                                            });

                                            // Function to format the date into day, month, year, and suffix
                                            function formatDateCertificate(date) {
                                                const day = date.getDate();
                                                const month = date.toLocaleString("default", { month: "long" });
                                                const year = date.getFullYear();

                                                // Determine the suffix for the day
                                                const suffix = day % 10 === 1 && day !== 11 ? "st" :
                                                    day % 10 === 2 && day !== 12 ? "nd" :
                                                        day % 10 === 3 && day !== 13 ? "rd" : "th";

                                                // Set the values in the corresponding input fields
                                                document.getElementById("certificateDay").value = day;
                                                document.getElementById("certificateSuffix").innerText = suffix;
                                                document.getElementById("certificateMonth").value = month;
                                                document.getElementById("certificateYear").value = year;
                                            }

                                            document.getElementById('printCertificate').addEventListener('click', function () {
                                                const certificateId = document.getElementById('modal-id').textContent;

                                                // Send an AJAX request to update the certificate status to 'Done'
                                                fetch('<?php echo site_url("Onlinecert/update_status_to_done/"); ?>' + certificateId)
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        if (data.status === 'success') {
                                                            // Update the UI if the status was successfully changed
                                                            printModalContentCertificate();
                                                            // Optionally, you can hide the modal here:

                                                        } else {
                                                            alert('Error: ' + data.message);
                                                        }
                                                    })
                                                    .catch(error => {
                                                        console.error('Error:', error);
                                                    });
                                            });
                                        </script>
                                        <script
                                            src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
                                        <script src="application/public/js/onlinecert.js"></script>
                                    </table>
                                <?php else: ?>
                                    <p>No certificates found.</p>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="table-container" id="doneTable">
                            <div class="">
                                <?php if (!empty($certificates)): ?>
                                    <table id="resident-table2" id="resident-table2"
                                        class="table table-striped table-hover p-2" width="100%">
                                        <thead>
                                            <tr style="font-size: 12px;">
                                                <th class="export">ID</th>
                                                <th class="export">Barangay ID</th>
                                                <th class="export">Status</th>
                                                <th class="export">Type</th>
                                                <th class="export">Full Name</th>
                                                <th class="export">Address</th>
                                                <th class="export">Date</th>
                                                <th class="export">Purpose</th>
                                                <th class="export">Control #</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;">
                                            <?php foreach ($certificates as $certificate): ?>
                                                <?php if ($certificate->status === 'Done'): ?>
                                                    <tr>
                                                        <td><?php echo $certificate->id; ?></td>
                                                        <td><?php echo $certificate->barangayid; ?></td> <!-- Added Barangay ID -->
                                                        <td><?php echo $certificate->status; ?></td>
                                                        <td><?php echo $certificate->type; ?></td>
                                                        <td><?php echo $certificate->fullname; ?></td>
                                                        <td><?php echo $certificate->address; ?></td>
                                                        <td><?php echo $certificate->date; ?></td>
                                                        <td><?php echo $certificate->purpose; ?></td>
                                                        <td><?php echo $certificate->control_number; ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <p>No certificates found.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

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
            $('#pendingTable').show();
            $('.clickable').first().addClass('active');
        });
    </script>
</body>

</html>