<style>
    .headnav {
        background-color: #203659;
        max-width: 100vw;
        width: calc(100vw - 250px);
        transition: width 0.3s ease;
        position: relative;
        /* Smooth transition */
        z-index: 100;
        /* Ensure it stays on top */
    }

    .headnav.collapsed {
        width: 100vw;
        /* Adjust width when collapsed */
    }

    .btn-primary {
        white-space: nowrap;
        /* Prevent text wrapping */
        overflow: hidden;
        /* Hide overflowing content */
        text-overflow: ellipsis;
        /* Add ellipsis for overflow text */
    }
</style>


<nav class="container-fluid p-3 shadow headnav " id="headnav">
    <div class="row">
        <div class="col-6">
            <button class="border-0 bg-transparent fs-4 text-light" id="btn-toggle">
                <i class="bi bi-list text-bold fs-2"></i>
            </button>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <div class="text-light px-3 mx-0 d-flex justify-content-end align-items-center">
                <i class="bi bi-person-circle fs-1 me-2"></i>
                <div class=" ">
                    <p class="d-none d-sm-inline me-5"><?php echo isset($user) ? htmlspecialchars($user->email) : 'Guest'; ?>



                    </p>
                    <p class="fs-6"> <?php
                                        $roleId = htmlspecialchars($user->role_id);

                                        switch ($roleId) {
                                            case 1:
                                                echo "Superadmin";
                                                break;
                                            case 2:
                                                echo "Admin";
                                                break;
                                            case 3:
                                                echo "Staff";
                                                break;
                                            default:
                                                echo "Unknown role";
                                        }
                                        ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</nav>


<script>
    const sidebar = document.getElementById('sidebar');
    const headnav = document.getElementById('headnav');
    const toggleBtn = document.getElementById('btn-toggle');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        headnav.classList.toggle('collapsed');
    });
</script>