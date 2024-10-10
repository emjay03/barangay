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

    .incident-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .incident-table th,
    .incident-table td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: left;
        font-size: 13px;
    }

    .incident-table th {
        background-color: #0056b3;
        color: white;
    }

    .incident-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .incident-table tr:hover {
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
        border: 1px solid #007bff;
        border-radius: 4px;
        padding: 8px;
        width: 250px;
        transition: border-color 0.3s;
    }

    .dataTables_wrapper .dataTables_filter input:focus {
        border-color: #0056b3;
        outline: none;
    }

    .dataTables_wrapper .dataTables_filter .search-btn {
        background-color: #007bff;
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
        border: 1px solid #007bff;
        border-radius: 4px;
        padding: 3px;
        padding-inline: 5px;
        margin-left: 10px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .dataTables_wrapper .dataTables_length select:focus {
        border-color: #0056b3;
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
        border: 1px solid #0056b3;
        border-radius: 4px;
        background-color: #0056b3;
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
        border: 1px solid #0056b3;
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
</style>

<body>

    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <?php include 'application/views/admin/include/header.php'; ?>

            <div class="row content p-5 mx-5 rounded-4 bg-light shadow-lg ">
                <h1 class="fw-bold text-dark mb-5"> <i class="bi bi-card-list me-2"></i>Blotter Record</h1>
                <div class="container-fluid overflow-scroll">
                    <table class="incident-table mb-5">
                        <thead>
                            <tr>
                                <th>Incident Type</th>
                                <th>Status</th>
                                <th>Schedule</th>
                                <th>Date Reported</th>
                                <th>Time Reported</th>
                                <th>Date Incident</th>
                                <th>Time Incident</th>
                                <th>Incident Location</th>
                                <th>Incident Narrative</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_blotters as $all_blotter): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($all_blotter['incident_type']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['status']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['schedule']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['date_reported']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['time_reported']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['date_incident']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['time_incident']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['incident_location']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['incident_narrative']); ?></td>
                                    <td>
                                        <button class="btn btn-primary px-5 my-1" data-bs-toggle="modal" data-bs-target="#editIncidentModal">Update</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary w-25 m-3 mt-5 p-2" data-bs-toggle="modal"
                data-bs-target="#addIncidentModal">Add Blotter</button>
            </div>
        </main>
    </div>

    <?php include 'application/views/admin/include/add_blotter.php'; ?>
    <?php include 'application/views/admin/include/edit_info_blotter.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.incident-table').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthChange": true,
                "language": {
                    "search": "<label class='search-label'></label> _INPUT_ <button class='btn btn-primary search-btn'>Search</button>",
                    "searchPlaceholder": "Type to search...",
                    "lengthMenu": "Show _MENU_ entries", // Customize the entries text
                }
            });

            $('.search-btn').on('click', function () {
                var searchValue = $('.dataTables_filter input').val();
                $('.incident-table').DataTable().search(searchValue).draw();
            });
        });
    </script>
</body>

</html>