<style>
    .headnav {
        max-width: 100vw;
        width: calc(100vw - 250px);
        position: fixed;
        top: 0;
        transition: width 0.3s ease;
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


<nav class="container-fluid bg-light p-2 shadow headnav " id="headnav">
    <div class="d-flex justify-content-between w-100">
        <button class="border-0 bg-light fs-4 text-dark" id="btn-toggle">
            <i class="bi bi-list text-bold fs-2"></i>
        </button>
        <button class="btn btn-primary p-2 d-flex align-items-center me-5" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
            <i class="bi bi-person-circle me-3 fs-4"></i>
            <span class="d-none d-sm-inline"><?php echo $user->email; ?></span>
        </button>
    </div>

    <div class="collapse multi-collapse" id="multiCollapseExample2">
        <div class="d-flex align-items-end justify-content-end">
            <button class="btn btn-primary mt-3 me-5 px-5 rounded-0 me-4" onclick="window.location.href='/barangay/auth';">Logout</button>
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