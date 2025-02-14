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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="application/public/assets/css/superadmin.css" type="text/css">
    <link rel="stylesheet" href="application/public/assets/css/resident_information.css" type="text/css">
</head>

<style>
    
</style>

<body>
    <div id="alertMessage" class="alert px-5" role="alert"></div>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <?php include 'application/views/admin/include/header.php'; ?>

            <div class="row content p-5 mx-5 rounded-4 bg-light shadow-lg ">
                <div class="d-flex justify-content-between mb-5">
                    <h1 class="fw-bold text-dark"> <i class="bi bi-people-fill me-2"></i> Resident Information</h1>
                    <button class="btn btn-primary max-w-50 px-5 m-2" data-bs-toggle="modal"
                        data-bs-target="#addResidentModal">Add Resident</button>
                </div>

                <div class="table-responsive">
                    <table class="resident-table table mb-5">
                        <thead>
                            <tr>
                                <th class="d-none">id</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th class="d-none">Alias</th> <!-- Added column -->
                                <th class="d-none">Birthday</th> <!-- Added column -->
                                <th>Age</th> <!-- Added column -->
                                <th>Gender</th> <!-- Added column -->
                                <th class="d-none">Civil Status</th> <!-- Added column -->
                                <th class="d-none">Citizenship</th>
                                <th>Voter Status</th> <!-- Added column -->
                                <th>Address</th>
                                <th class="d-none">Telephone No</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_resident as $resident): ?>
                                <tr>
                                    <td class="d-none"><?php echo htmlspecialchars($resident['resident_id']); ?></td>
                                    <td><?php echo htmlspecialchars($resident['lastname']); ?></td>
                                    <td><?php echo htmlspecialchars($resident['firstname']); ?></td>
                                    <td><?php echo htmlspecialchars($resident['middlename']); ?></td>
                                    <td class="d-none"><?php echo htmlspecialchars($resident['alias']); ?></td>
                                    <!-- Display alias -->
                                    <td class="d-none"><?php echo htmlspecialchars($resident['birthday']); ?></td>
                                    <!-- Display birthday -->
                                    <td><?php echo htmlspecialchars($resident['age']); ?></td> <!-- Display age -->
                                    <td><?php echo htmlspecialchars($resident['gender']); ?></td> <!-- Display gender -->
                                    <td class="d-none"><?php echo htmlspecialchars($resident['civilstatus']); ?></td>
                                    <!-- Display civilstatus -->
                                    <td class="d-none"><?php echo htmlspecialchars($resident['citizenship']); ?></td>
                                    <td><?php
                                    echo $resident['voterstatus'] == 1 ? 'Registered' : 'Not Registered';
                                    ?></td>
                                    <!-- Display voterstatus -->
                                    <td><?php echo htmlspecialchars($resident['address_1']); ?></td>
                                    <td class="d-none"><?php echo htmlspecialchars($resident['telephone_no']); ?></td>
                                    <td><?php echo htmlspecialchars($resident['mobile_no']); ?></td>

                                    <!-- Edit button with the resident ID -->
                                    <td class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-primary px-3 my-1" data-bs-toggle="modal"
                                            data-bs-target="#editResidentModal"
                                            data-resident='<?php echo json_encode($resident); ?>'>
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </main>
    </div>
    <?php include 'application/views/admin/include/add_resident.php'; ?>
    <?php include 'application/views/admin/include/edit_info_resident.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>\
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
                "language": {
                    "search": "<label class='search-label'></label> _INPUT_ <button class='btn btn-primary search-btn'>Search</button>",
                    "searchPlaceholder": "Type to search...",
                    "lengthMenu": "Show _MENU_ entries",
                }
            });

            $('.search-btn').on('click', function () {
                var searchValue = $('.dataTables_filter input').val();
                $('.resident-table').DataTable().search(searchValue).draw();
            });
        });
    </script>

</body>

</html>