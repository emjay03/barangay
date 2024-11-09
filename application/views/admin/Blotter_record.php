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
        background-color: #203659;
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
        border: 1px solid #0056b3;
        border-radius: 4px;
        background-color: #fff;
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
        border: none;
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
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <?php include 'application/views/admin/include/header.php'; ?>

            <div class="row content p-5 mx-5 rounded-4 bg-light shadow-lg ">
                <div class="d-flex justify-content-between mb-5">
                    <h1 class="fw-bold text-dark"> <i class="bi bi-card-list me-2"></i>Blotter Record</h1>
                    <button class="btn btn-primary max-w-50 px-5 m-2" data-bs-toggle="modal"
                        data-bs-target="#addIncidentModal">Add Blotter</button>
                </div>

                <div class="container-fluid overflow-scroll">
                    <table class="incident-table mb-5">
                        <thead>
                            <tr>
                                <th>Blotter ID</th>
                                <th>Complaint Type</th>
                                <th>Description</th>
                                <th>ReportedBy</th>
                                <th>AssignedTo</th>
                                <th>Status</th>
                                <th>ActionTaken</th>
                                <th>DateReported</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_blotters as $all_blotter): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($all_blotter['BlotterID']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['ComplaintType']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['Description']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['ReportedBy']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['AssignedTo']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['Status']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['ActionTaken']); ?></td>
                                    <td><?php echo htmlspecialchars($all_blotter['DateReported']); ?></td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-primary px-3 my-1" data-bs-toggle="modal"
                                            data-bs-target="#editIncidentModal"
                                            data-resident='<?php echo json_encode($all_blotter); ?>'>Update</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <?php include 'application/views/admin/include/add_blotter.php'; ?>
    <?php include 'application/views/admin/include/edit_info_blotter.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
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

            $('.search-btn').on('click', function() {
                var searchValue = $('.dataTables_filter input').val();
                $('.incident-table').DataTable().search(searchValue).draw();
            });
        });

        document.getElementById('addIncidentForm').addEventListener('submit', function(event) {
            event.preventDefault();

            fetch(this.action, {
                    method: 'POST',
                    body: new URLSearchParams(new FormData(this)),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        return response.text().then(text => {
                            throw new Error('Error: ' + text);
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    const alertMessage = document.getElementById('alertMessage');
                    alertMessage.className = 'alert';

                    if (data.status === 'error') {
                        alertMessage.innerText = data.message;
                        alertMessage.classList.add('alert-danger');
                    } else {
                        alertMessage.innerText = 'Added successfully!';
                        alertMessage.classList.add('alert-success');

                        $('#addResidentModal').modal('hide');
                        this.reset();

                        setTimeout(() => {
                            window.location.href = 'Blotters';
                        }, 2000);
                    }

                    alertMessage.classList.add('show');
                    setTimeout(() => {
                        alertMessage.classList.remove('show');
                        alertMessage.classList.add('hide');
                        setTimeout(() => {
                            alertMessage.style.display = 'none';
                            alertMessage.classList.remove('hide');
                        }, 500);
                    }, 3000);
                })
                .catch(error => {
                    const alertMessage = document.getElementById('alertMessage');
                    alertMessage.innerText = 'An unexpected error occurred: ' + error.message;
                    alertMessage.className = 'alert alert-danger';

                    alertMessage.classList.add('show');
                    setTimeout(() => {
                        alertMessage.classList.remove('show');
                        alertMessage.classList.add('hide');
                        setTimeout(() => {
                            alertMessage.style.display = 'none';
                            alertMessage.classList.remove('hide');
                        }, 500);
                    }, 3000);
                });
        });
    </script>
</body>

</html>