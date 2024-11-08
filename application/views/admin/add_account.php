<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay 185</title>
    <link rel="shortcut icon" href="https://tse3.mm.bing.net/th?id=OIP.54-qxAfgXRkmPyPDmECkWQAAAA&pid=Api&P=0&h=220"
        type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- DataTables Bootstrap integration CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script> <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables Bootstrap integration JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->
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
</style>

<body>
    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <?php include 'application/views/admin/include/header.php'; ?>
            <div class="container mt-3 p-5">

                <div class="d-flex justify-content-between m2-5">
                    <h1 class="fw-bold text-dark"> <i class="bi bi-people-fill me-2"></i>Add Account</h1>
                    <!-- Button to trigger Add User Modal -->
                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        Add Account
                    </button>
                </div>
                <div class="row">
                    <!-- Table Container (col-12 to make it full-width) -->
                    <div class="col-12">
                        <h3 class="mt-5">User List</h3>
                        <table id="userTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through users and display in table rows -->
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                                        <td>
                                            <?php
                                            if ($user['role_id'] == 1)
                                                echo 'Super Admin';
                                            elseif ($user['role_id'] == 2)
                                                echo 'Admin';
                                            else
                                                echo 'Staff';
                                            ?>
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <!-- Edit Button -->
                                            <button class="btn btn-primary me-2 px-3 my-1 edit-btn" data-id="<?= $user['id']; ?>"
                                                data-bs-toggle="modal" data-bs-target="#editUserModal"
                                                data-user='<?php echo json_encode($user); ?>'>
                                                Edit
                                            </button>
                                            <!-- Delete Button -->
                                            <button class="btn btn-danger px-3 my-1 delete-btn"
                                                data-id="<?= $user['id']; ?>">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal for Adding User -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('addaccount/register'); ?>" method="POST">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <select class="form-control" id="role_id" name="role_id" required>
                                <option value="" disabled selected>Select Role</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">Staff</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for editing user -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editUserForm">
                        <!-- Hidden field for user ID -->
                        <input type="hidden" id="edit_user_id" name="id">

                        <div class="form-group">
                            <label for="edit_email">Email Address</label>
                            <input type="email" class="form-control" id="edit_email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_password">Password (Leave blank to keep unchanged)</label>
                            <input type="password" class="form-control" id="edit_password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="edit_role">Role</label>
                            <select class="form-control" id="edit_role" name="role_id" required>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">Staff</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Initialize DataTable
            $('#userTable').DataTable({
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


            $('#addUserModal form').on('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                var formData = $(this).serialize(); // Serialize the form data

                $.ajax({
                    url: '<?= site_url('addaccount/register'); ?>',  // Make sure the URL matches your route
                    method: 'POST',
                    data: formData,
                    dataType: 'json',  // Expect a JSON response
                    success: function (response) {
                        if (response.status) {
                            // Success response
                            alert(response.message); // Display success message
                            $('#addUserModal').modal('hide'); // Close the modal
                            location.reload();  // Optionally reload the page to show the new user in the table
                        } else {
                            // Error response
                            alert(response.message); // Display error message
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        // Handle AJAX error
                        alert('An error occurred. Please try again.');
                    }
                });
            });

            // Edit button functionality (already defined in your existing code)
            $('#userTable').on('click', '.edit-btn', function () {
                var user = $(this).data('user');
                $('#edit_user_id').val(user.id);
                $('#edit_email').val(user.email);
                $('#edit_role').val(user.role_id);
                $('#edit_password').val('');
            });

            // Delete button functionality (already defined in your existing code)
            $('#userTable').on('click', '.delete-btn', function () {
                var userId = $(this).data('id');
                var confirmDelete = confirm("Are you sure you want to delete this user?");
                if (confirmDelete) {
                    deleteUser(userId);
                }
            });

            // AJAX function for deleting a user (already defined in your existing code)
            function deleteUser(userId) {
                $.ajax({
                    url: '<?= site_url('addaccount/delete/'); ?>' + userId,
                    method: 'GET',
                    success: function (response) {
                        if (response.status) {
                            alert(response.message);
                            location.reload();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('Error occurred while deleting user.');
                    }
                });
            }

            // Form submission for editing user (already defined in your existing code)
            $('#editUserForm').on('submit', function (e) {
                e.preventDefault();  // Prevent the page from reloading
                var userData = $(this).serialize();

                $.ajax({
                    url: '<?= site_url('addaccount/update/'); ?>' + $('#edit_user_id').val(),
                    method: 'POST',
                    data: userData,
                    success: function (response) {
                        if (response.status) {
                            alert(response.message);
                            location.reload();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('Error occurred while updating user.');
                    }
                });
            });
        });
    </script>
</body>

</html>