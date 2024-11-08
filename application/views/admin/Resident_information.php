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
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        scrollbar-width: thin;
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

    main::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.2;
        z-index: 1;
    }

    .content {
        position: relative;
        margin-top: 5rem;
        z-index: 2;
    }

    .resident-table {
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 14px;
    }

    .resident-table th,
    .resident-table td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: left;
        font-size: 13px;
    }

    .resident-table th {
        background-color: #203659;
        color: white;
    }

    .resident-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .resident-table tr:hover {
        background-color: #e9ecef;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s;
        font-size: 13px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .dataTables_wrapper .dataTables_filter {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .dataTables_wrapper .dataTables_filter label {
        font-size: 14px;
        margin-right: 10px;
    }

    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #203659;
        border-radius: 4px;
        padding: 8px;
        width: 250px;
        transition: border-color 0.3s;
    }

    .dataTables_wrapper .dataTables_filter input:focus {
        border-color: #203659;
        outline: none;
    }

    .dataTables_wrapper .dataTables_filter .search-btn {
        background-color: #203659;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 10px;
        transition: background-color 0.3s;
    }

    .dataTables_wrapper .dataTables_filter .search-btn:hover {
        background-color: #0056b3;
    }

    .dataTables_wrapper .dataTables_length {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .dataTables_wrapper .dataTables_length label {
        font-size: 13px;
        margin-right: 10px;
    }

    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #203659;
        border-radius: 4px;
        padding: 3px;
        padding-inline: 5px;
        margin-left: 10px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .dataTables_wrapper .dataTables_length select:focus {
        border-color: #203659;
        outline: none;
    }

    .dataTables_wrapper .dataTables_info {
        font-size: 13px;
        margin-bottom: 20px;
        color: #333;
    }

    .dataTables_wrapper .dataTables_paginate {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 10px;
        font-size: 13px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 5px 12px;
        margin-left: 5px;
        border-radius: 4px;
        background-color: #f0f0f0;
        color: white;
        transition: background-color 0.3s, color 0.3s;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #0056b3;
        color: white;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background-color: #007bff;
        color: white;
        border: none;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        background-color: #0056b3;
        color: white;
        border: 1px solid #0056b3;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.previous,
    .dataTables_wrapper .dataTables_paginate .paginate_button.next {
        font-weight: bold;
    }

    .alert {
        position: absolute;
        top: 8%;
        left: 50%;
        transform: translate(-50%, -50%) !important;
        z-index: 500;
        display: none;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .alert.show {
        display: block;
        opacity: 1;
    }

    .alert.hide {
        opacity: 0;
    }
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
                                <th>Lastname</th>
                                <th>Firstname</th>
                                <th>Middlename</th>
                                <th class="d-none">Alias</th> <!-- Added column -->
                                <th class="d-none">Birthday</th> <!-- Added column -->
                                <th>Age</th> <!-- Added column -->
                                <th>Gender</th> <!-- Added column -->
                                <th class="d-none">Civil Status</th> <!-- Added column -->
                                <th class="d-none">Citizenship</th>
                                <th>Voter Status</th> <!-- Added column -->
                                <th>Address 1</th>
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