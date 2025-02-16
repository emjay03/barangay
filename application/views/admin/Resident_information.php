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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="application/public/assets/css/superadmin.css" type="text/css">
    <link rel="stylesheet" href="application/public/assets/css/resident_information.css" type="text/css">


    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Buttons plugin CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.1/css/buttons.dataTables.min.css">
    <!-- Bootstrap CSS for button styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<style>


</style>

<body>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>

        <main class="bg-light">
            <?php include 'application/views/admin/include/header.php'; ?>

            <div class="content mt-5">
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary ">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between my-3">
                                        <h5 class="fw-bold text-dark"> <i class="bi bi-people-fill me-2"></i> Resident
                                            Information</h5>
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#addResidentModal"><i
                                                class="bi bi-plus-circle me-2 my-0"></i>Add Resident</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="resident-table" class="table table-borderless table-hover "
                                        style="width: 100%">
                                        <thead class="thead-dark">
                                            <tr style="font-size: 14px;">
                                                <th class="d-none">id</th>
                                                <th class="export">Resident id</th>
                                                <th class="export">Last Name</th>
                                                <th class="export">First Name</th>
                                                <th class="export"> Middle Name</th>
                                                <th class="d-none">Alias</th> <!-- Added column -->
                                                <th class="d-none">Birthday</th> <!-- Added column -->
                                                <th class="export">Age</th> <!-- Added column -->
                                                <th class="export">Gender</th> <!-- Added column -->
                                                <th class="d-none">Civil Status</th> <!-- Added column -->
                                                <th class="d-none">Citizenship</th>
                                                <th class="export">Voter Status</th> <!-- Added column -->
                                                <th class="export">Address</th>
                                                <th class="d-none">Telephone No</th>
                                                <th class="export">Mobile No</th>
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
                                                    <td><?php echo htmlspecialchars($resident['lastname']); ?></td>
                                                    <td><?php echo htmlspecialchars($resident['firstname']); ?></td>
                                                    <td><?php echo htmlspecialchars($resident['middlename']); ?></td>
                                                    <td class="d-none"><?php echo htmlspecialchars($resident['alias']); ?>
                                                    </td>
                                                    <!-- Display alias -->
                                                    <td class="d-none">
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
                                                    echo $resident['voterstatus'] == 1 ? 'Registered' : 'Not Registered';
                                                    ?></td>
                                                    <!-- Display voterstatus -->
                                                    <td><?php echo htmlspecialchars($resident['address_1']); ?></td>
                                                    <td class="d-none">
                                                        <?php echo htmlspecialchars($resident['telephone_no']); ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($resident['mobile_no']); ?></td>

                                                    <!-- Edit button with the resident ID -->
                                                    <td class="">
                                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
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
    <?php include 'application/views/admin/main/jslink.php'; ?>

    <script>
        $(document).ready(function () {
            $('#resident-table').DataTable({
                "dom": "<'row'<'col-sm-3'l><'col-sm-5'B><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                "responsive": true,
                "searching": true,
                "paging": true,
                "buttons": [{
                    extend: 'copyHtml5',
                    className: 'btn btn-outline-secondary btn-sm export-btn',
                    text: '<i class="bi bi-clipboard-fill"></i>  Copy',
                    exportOptions: {
                        columns: '.export'
                    }
                },
                {
                    extend: 'csvHtml5',
                    className: 'btn !important btn-outline-secondary !important btn-sm !important export-btn !important',
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

            $('.search-btn').on('click', function () {
                var searchValue = $('.dataTables_filter input').val();
                $('.resident-table').DataTable().search(searchValue).draw();
            });
        });
    </script>

</body>

</html>