<nav class="container-fluid p-3 shadow headnav" id="headnav">
    <div class="d-flex justify-content-between align-items-center">

        <div class="">
            <button class="btn btn-dark btn-sm border-0 text-light" id="btn-toggle">
                <i class="bi bi-list text-bold fs-4"></i>
            </button>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <p  class="text-dark fw-thin" style="font-size: 14px;"><i class="bi bi-calendar-event me-2"></i> <span id="current-time"></span></p>
            <div class="mx-3"></div>
            <p class="text-dark fw-thin ml-5" style="font-size: 14px;"><i class="bi bi-clock me-2"></i> <span id="current-date"></span></p>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <div class="text-dark px-2 me-5 mx-5 d-flex justify-content-end align-items-center shadow rounded py-2">
                <div>
                    <span class="d-flex justify-content-center align-items-center rounded-circle text-center fs-4 me-2 bg-dark text-light" style="width: 40px; height: 41px;">
                        <?php echo strtoupper(substr(htmlspecialchars($user->email), 0, 1)); ?>
                    </span>
                </div>
                <div class="" style="line-height: 1">
                    <p class="d-none d-sm-inline me-0">
                        <?php echo isset($user) ? htmlspecialchars($user->email) : 'Guest'; ?>

                    </p> <br />
                    <span class="fs-6 fw-bold"><small> <?php
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
                    ?> </small>
                    </span>
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

    function updateTimeAndDate() {
        const timeElement = document.getElementById('current-time');
        const dateElement = document.getElementById('current-date');

        const currentTime = new Date();
        let hours = currentTime.getHours();
        const minutes = currentTime.getMinutes().toString().padStart(2, '0');
        const seconds = currentTime.getSeconds().toString().padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12; // Convert 24-hour format to 12-hour format
        hours = hours ? hours : 12; // Handle the case for 12 AM/PM
        const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;

        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const dateString = currentTime.toLocaleDateString('en-US', options);

        timeElement.textContent = timeString;
        dateElement.textContent = dateString;
    }

    updateTimeAndDate();
    setInterval(updateTimeAndDate, 1000);
</script>