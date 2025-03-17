<?php include 'application/views/admin/include/header.php'; ?>

<body>

    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <header>
                <?php include 'application/views/admin/main/topnav.php'; ?>
            </header>
            <div class="row content px-3">
                <div class="col-lg-12 container z-3 d-flex align-items-center mb-0 mt-5">
                    <div class="d-flex align-items-center justify-content-center py-3 my-3 w-100 position-relative">
                        <div class="d-flex w-100 w-md-75 align-items-center justify-content-between px-5">
                            <img src="application/public/northcaloocan_logo.png" alt="logo" height="100">
                            <div class="text-center mx-5">
                                <h1 class="fw-bold text-light fs-1" id="d-title">BARANGAY 185</h1>
                                <h5 class="fw-bold " style="margin-top: 7rem">Hon. RODOLFO “KAP ATO” OLIVA</h5>
                            </div>
                            <img src="application/public/logo.png" alt="logo" height="100">
                        </div>
                        <div class="background w-full" id="d-background"></div>
                    </div>
                </div>

                <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="missionModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="calendar">
                                    <div class="p-0">
                                        <div
                                            class="calendar-head text-light fw-bold d-flex py-3 justify-content-between rounded-top px-2">
                                            <span class="fw-bold"><i
                                                    class="bi bi-calendar-fill me-2"></i>Calendar</span>

                                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="card calendar shadow">
                                            <div class="card-body">
                                                <div
                                                    class="calendar-header d-flex justify-content-between align-items-center">
                                                    <button id="prevMonth"
                                                        class="btn rounded-circle btn-secondary shadow fs-6 px-2 py-0"
                                                        style="text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);">&lt;</button>
                                                    <h5 id="monthYear" class="m-0 fw-bold"></h5>
                                                    <button id="nextMonth"
                                                        class="btn rounded-circle btn-secondary shadow fs-6 px-2 py-0"
                                                        style="text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);">&gt;</button>
                                                </div>
                                                <div class="calendar-body mt-4 p-0 py-2"
                                                    style="font-size: 12px; height: 250px;">
                                                    <div class="row fw-bold">
                                                        <p class="col text-danger">Sun</p>
                                                        <p class="col">Mon</p>
                                                        <p class="col">Tue</p>
                                                        <p class="col">Wed</p>
                                                        <p class="col">Thu</p>
                                                        <p class="col">Fri</p>
                                                        <p class="col">Sat</p>
                                                    </div>
                                                    <div id="calendarDays" style="font-size: 14px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade notesModal" id="notesModal" tabindex="-1" aria-labelledby="notesModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="alert alert-success notesAddedAlert" role="alert" style="display: none;">

                                </div>
                                <div class="notes shadow">
                                    <div class="card">
                                        <div
                                            class="card-header  text-light text-start fw-bold d-flex justify-content-between align-items-center px-3">
                                            <span class=""><i class="bi bi-journal-bookmark-fill me-2"></i>My
                                                Notes</span>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <button class="btn btn-primary btn-sm mx-2" type="button"
                                                    id="addNotesModalBtn"><i
                                                        class="bi bi-plus-circle fs-5"></i></button>
                                                <button type="button" class="btn-close text-light"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        </div>


                                        <div class="card-body p-0 p-2 text-start" id="notesContainer"
                                            style="overflow-y: scroll; height: 350px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="addNoteModal" tabindex="-1" aria-labelledby="addNoteModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="alert alert-danger alertDanger" role="alert" style="display: none;">

                                </div>
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="addNoteModalLabel"></h5>
                                    <button type="button" class="btn-close text-sm" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <input type="hidden" id="emailInput" name="email"
                                            value="<?php echo htmlspecialchars($user->email); ?>" readonly />

                                        <textarea id="noteInput" class="form-control" rows="10"
                                            placeholder="Write your note here..."></textarea>
                                        <input type="hidden" id="noteId" value="0" />
                                        <!-- Hidden input for note ID -->
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary btn-sm"
                                                data-bs-dismiss="modal">Close</button> -->
                                    <button type="button" class="btn btn-danger btn-sm" id="deleteNoteButton"
                                        style="display: none;">Delete</button>
                                    <button type="button" class="btn btn-primary btn-sm" id="saveNoteButton">Add
                                        Note</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3 py-0">
                    <div class="card">
                        <div
                            class="card-header text-light text-start fw-bold d-flex justify-content-between align-items-center">
                            <span class="mx-2">Barangay Mission</span>

                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#missionModal">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>

                        <div class="card-body">
                            <div class="form-group mt-2 text-center" style="height: 200px;">
                                <p><?php echo $mission['mission']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div
                            class="card-header text-light text-start fw-bold d-flex justify-content-between align-items-center">
                            <span class="mx-2">Barangay Vision</span>

                            <button class="btn btn-primary me-1 btn-sm" data-bs-toggle="modal"
                                data-bs-target="#visionModal">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>

                        <div class="card-body">
                            <div class="form-group mt-2 text-center" style="height: 200px;">
                                <p><?php echo $vision['vision']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Mission -->
                <div class="modal fade" id="missionModal" tabindex="-1" aria-labelledby="missionModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-header card-header text-light rounded-3">
                                    <h5 class="modal-title" id="missionModalLabel">Barangay Mission</h5>
                                    <button type="button" class="btn-close text-sm" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo site_url('MissionVisionController/update_mission'); ?>"
                                        method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea class="form-control" name="mission" id="mission"
                                                    rows="10"><?php echo $mission['mission']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Vision -->
                <div class="modal fade" id="visionModal" tabindex="-1" aria-labelledby="visionModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-header card-header text-light rounded-3">
                                    <h5 class="modal-title" id="visionModalLabel">Barangay Vision</h5>
                                    <button type="button" class="btn-close text-sm" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo site_url('MissionVisionController/update_vision'); ?>"
                                        method="POST">
                                        <div class="modal-body ">
                                            <div class="form-group">
                                                <textarea class="form-control " name="vision" id="vision"
                                                    rows="10"><?php echo $vision['vision']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4 py-0">
                    <div class="py-2 z-3 d-flex justify-content-start align-items-end px-0">
                        <!-- <button class="btn btn-primary btn-sm">
                        <a href="#residentSummary" class="px-2 text-light"
                            style="font-size: 12px; text-decoration: none;">RESIDENT RECORD SUMMARY</a>
                    </button> -->
                        <button type="button" class="btn btn-primary btn-sm mx-1" data-toggle="modal"
                            id="calendarModalBtn">
                            <i class="bi bi-calendar-fill fs-5"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-sm  mx-1" data-toggle="modal"
                            id="notesModalBtn">
                            <i class="bi bi-journal-bookmark-fill fs-5"></i> Notes
                        </button>
                    </div>
                    <!-- Add Announcement Modal -->
                    <div class="modal fade" id="addAnnouncementModal" tabindex="-1" role="dialog"
                        aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="addAnnouncementModalLabel">Add New
                                        Announcement
                                    </h5>
                                    <button type="button" class="btn-close text-sm" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo site_url('announcement/create'); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" name="details" id="details"
                                                required></textarea>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary btn-sm ">Create
                                                Announcement</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Announcement Modal (will be triggered dynamically) -->
                    <div class="modal fade" id="editAnnouncementModal" tabindex="-1" role="dialog"
                        aria-labelledby="editAnnouncementModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="editAnnouncementModalLabel">Edit
                                        Announcement
                                    </h5>
                                    <button type="button" class="btn-close text-sm" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" id="editAnnouncementForm" method="POST">
                                        <div class="form-group">
                                            <label for="edit_title">Title</label>
                                            <input type="text" class="form-control" name="title" id="edit_title"
                                                required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="edit_details">Details</label>
                                            <textarea class="form-control" name="details" id="edit_details"
                                                required></textarea>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary btn-sm ">Update
                                                Announcement</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-0 text-center">
                        <div class="notes shadow">
                            <div class="card h-100">
                                <div
                                    class="card-header  text-light text-start fw-bold d-flex justify-content-between align-items-center">
                                    <span class="mx-5"><i class="bi bi-megaphone-fill me-2"></i>Announcement</span>
                                    <!-- <button class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addNoteModal">+</button> -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        id="addAnnouncement">
                                        <i class="bi bi-plus-circle fs-5"></i>
                                    </button>
                                </div>


                                <!-- <div class="card-body p-0 p-2" id="notesContainer" style="overflow-y: scroll; height: 500px;"></div> -->
                                <div class="card-body p-3">
                                    <table id="announcement-table" class="table table-borderless table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Announcements</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($all_announcements as $announcement): ?>
                                                <tr>
                                                    <td class="text-start">
                                                        <!-- Card Structure inside the table cell -->
                                                        <div class="card p-3 mb-3">
                                                            <h6 class="card-title fw-bold">
                                                                <?php echo htmlspecialchars($announcement['title']); ?>
                                                            </h6>
                                                            <p class="card-body">
                                                                <?php echo htmlspecialchars($announcement['details']); ?>
                                                            </p>
                                                            <div
                                                                class="card-footer d-flex justify-content-between text-secondary">
                                                                <p class="card-text">
                                                                    <?php echo htmlspecialchars($announcement['date']); ?>
                                                                </p>

                                                                <p class="card-text">
                                                                    <?php echo htmlspecialchars($announcement['updated_at']); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center" width="10%">
                                                        <!-- Edit Button -->
                                                        <button class="btn btn-primary editAnnouncement me-1 btn-sm"
                                                            data-id="<?php echo $announcement['id']; ?>"
                                                            data-title="<?php echo htmlspecialchars($announcement['title']); ?>"
                                                            data-details="<?php echo htmlspecialchars($announcement['details']); ?>"
                                                            data-toggle="modal" data-target="#editAnnouncementModal">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <!-- Delete Button -->
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this?'); 
                                                            window.location.href='<?php echo site_url('announcement/delete/' . $announcement['id']); ?>';">
                                                            <i class="bi bi-trash3-fill"></i>
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

                <div class="col-md-12 col-lg-6 col-xl-3 py-0" id="residentSummary">
                    <div class="card z-3 bg-transparent border-0 text-center p-1 fw-bold rounded-0">
                        <p class="text-dark fs-6 xl-fs-6 mt-1">RESIDENT RECORD SUMMARY</p>
                    </div>

                    <div class="container-fluid">
                        <div class="row fw-bold">
                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header d-flex justify-content-start align-items-center">
                                        <p class=" text-start text-light" style="font-size: 12px">Total Population</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <i class="bi bi-people-fill fs-3 text-dark me-2"></i>
                                        <p class="fw-bold mt-3 fs-3">
                                            <?php echo !empty($all_resident) ? $all_resident : 0; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header d-flex justify-content-start align-items-center">
                                        <p class="text-start text-light" style="font-size: 11px">Registered Voters</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <i class="bi bi-list-check fs-3 text-dark me-2"></i>
                                        <p class="fw-bold mt-3 fs-3">
                                            <?php echo !empty($registered_voters) ? $registered_voters : 0; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header d-flex justify-content-start align-items-center">
                                        <p class="text-start text-light" style="font-size: 12px">Male</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <i class="bi bi-gender-male fs-3 text-dark me-2 fw-bold"></i>
                                        <p class="fw-bold mt-3 fs-3">
                                            <?php echo !empty($male_count) ? $male_count : 0; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header d-flex justify-content-start align-items-center">
                                        <p class="text-start text-light" style="font-size: 12px">Female</p>
                                    </div>

                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <i class="bi bi-gender-female fs-3 text-daek me-2"></i>
                                        <p class="fw-bold mt-3 fs-3">
                                            <?php echo !empty($female_count) ? $female_count : 0; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header d-flex justify-content-start align-items-center">
                                        <p class="text-start text-light" style="font-size: 12px">PWD</p>
                                    </div>

                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <i class="bi bi-person-vcard me-2 fs-3"></i>
                                        <p class="fw-bold mt-3 fs-3">
                                            <!-- <?php echo !empty($female_count) ? $female_count : 0; ?> --> 0
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header d-flex justify-content-start align-items-center">
                                        <iz class="text-start text-light" style="font-size: 11px">Senior Citizens</p>
                                    </div>

                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <i class="bi bi-person-vcard me-2 fs-3"></i>
                                        <p class="fw-bold mt-3 fs-3">
                                            <?php echo !empty($senior_count) ? $senior_count : 0; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-2 py-0">
                    <div class="card z-3 bg-transparent border-0 text-center p-1 fw-bold rounded-0">
                        <p class="text-dark" style="font-size: 13px;">BLOTTER RECORD SUMMARY</p>
                    </div>

                    <div class="row p-0 my-1 fw-bold">
                        <div class="col-lg-12 m-0 p-0">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: oklch(0.75 0.183 55.934)">
                                    <p class="text-start text-light" style="font-size: 15px">Settled Cases</p>
                                </div>
                                <div
                                    class="card-body fs-3  d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
                                    <?php echo !empty($get_Settled) ? $get_Settled : 0; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 my-1 p-0">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: oklch(0.75 0.183 55.934)">
                                    <p class="text-start text-light" style="font-size: 15px">Unscheduled Cases</p>
                                </div>
                                <div
                                    class="card-body fs-3 d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
                                    <?php echo !empty($get_Scheduled) ? $get_Scheduled : 0; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 my-1 p-0">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: oklch(0.75 0.183 55.934)">
                                    <p class="text-start text-light" style="font-size: 15px">Scheduled Cases</p>
                                </div>
                                <div
                                    class="card-body  fs-3 d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
                                    0
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 my-1 p-0">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: oklch(0.75 0.183 55.934)">
                                    <p class="text-start text-light" style="font-size: 15px">Settled Cases</p>
                                </div>
                                <div
                                    class="card-body fs-3 d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
                                    <?php echo !empty($get_Unscheduled) ? $get_Unscheduled : 0; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-lg-6 p-0 m-0 d-flex justify-content-center record" >
                    <div class="px-3 text-center">


                        

                        <div
                            class="card bg-transparent border-0 mt-4 d-flex align-items-center justify-content-center z-3">
                            <button class="btn btn-primary text-light px-5 py-1 fw-semibold rounded-5"
                                onclick="window.location.href='/barangay/Dashboard'">Refresh Dashboard</button>
                        </div>
                    </div>
                </div> -->
                </div>
        </main>
    </div>

    <?php include 'application/views/admin/include/jslink.php'; ?>

    <script>
        $(document).ready(function () {
            var table = $('#announcement-table').DataTable({
                "paging": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "lengthChange": false,
                "responsive": true,
                "language": {
                    "emptyTable": "No announcements available."
                },
                "scrollY": "450px",
                "scrollCollapse": true,
                "scroller": true,
                "buttons": [
                    {
                        text: '+ Show All Data',  // Text for the button
                        action: function (e, dt, node, config) {
                            // This will show the full table data
                            dt.rows().every(function () {
                                this.visible(true);
                            });
                        }
                    }
                ]
            });

            $(document).on('click', '#addAnnouncement', function () {
                $('#addAnnouncementModal').modal('show');
            });

            $(document).on('click', '#calendarModalBtn', function () {
                $('#calendarModal').modal('show');
            });

            $(document).on('click', '#notesModalBtn', function () {
                $('#notesModal').modal('show');
            });

            $(document).on('click', '#addNotesModalBtn', function () {
                const deleteNoteButton = document.getElementById("deleteNoteButton");
                const noteInput = document.getElementById("noteInput");
                const noteIdInput = document.getElementById("noteId");
                const saveNoteButton = document.getElementById("saveNoteButton");
                const addNoteModalLabel = document.getElementById("addNoteModalLabel");

                addNoteModalLabel.innerHTML = 'Add Note';

                $('#addNoteModal').modal('show');

                noteInput.value = "";
                noteIdInput.value = "0";
                deleteNoteButton.style.display = "none";
                saveNoteButton.innerHTML = "Add Note";
            });

            $(document).on('click', '.editAnnouncement', function () {
                var id = $(this).data('id');
                var title = $(this).data('title');
                var details = $(this).data('details');

                $('#editAnnouncementModal').modal('show');

                $('#edit_title').val(title);
                $('#edit_details').val(details);

                // Update the form action to point to the correct edit URL
                $('#editAnnouncementForm').attr('action', '<?php echo site_url('announcement/edit/'); ?>' + id);
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            // VARIABLES FOR MONTHS
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            // VARIABLES FOR CURRENT DATE
            let today = new Date();
            let currentMonth = today.getMonth();
            let currentYear = today.getFullYear();
            let currentDate = today.getDate();

            // VARIABLES FOR HEADER OF CALENDAR
            const monthYear = document.getElementById("monthYear");
            const calendarDays = document.getElementById("calendarDays");
            const prevMonthBtn = document.getElementById("prevMonth");
            const nextMonthBtn = document.getElementById("nextMonth");

            // FUNCTION TO RENDER CALENDAR
            function renderCalendar(month, year) {
                calendarDays.innerHTML = "";
                monthYear.textContent = `${monthNames[month]} ${year}`;

                // VARIABLE FOR DAYS IN A MONTH
                const firstDay = new Date(year, month).getDay();
                const daysInMonth = 32 - new Date(year, month, 32).getDate();

                let date = 1;

                for (let i = 0; i < 6; i++) {
                    let row = document.createElement("div"); row.className = "row"; for (let j = 0; j < 7; j++) {
                        let cell = document.createElement("div"); cell.className = "col text-center py-2"; if (i === 0 && j < firstDay) {
                            cell.classList.add("empty");
                        } else if (date > daysInMonth) {
                            cell.classList.add("empty");
                        } else {
                            if (date === currentDate && month === today.getMonth() && year === today.getFullYear()) {
                                cell.classList.add("today");
                                cell.innerHTML = `<strong class="border border-primary py-1 px-2 text-light rounded-circle bg-primary ">${date}</strong>`;
                            } else {
                                cell.innerHTML = date;
                            }
                            date++;
                        }
                        row.appendChild(cell);
                    }
                    calendarDays.appendChild(row);
                }
            }

            // EVENT LISTENERS FOR BUTTONS
            nextMonthBtn.addEventListener("click", function () {
                if (currentMonth === 11) {
                    currentMonth = 0;
                    currentYear++;
                } else {
                    currentMonth++;
                }
                renderCalendar(currentMonth, currentYear);
            });

            prevMonthBtn.addEventListener("click", function () {
                if (currentMonth === 0) {
                    currentMonth = 11;
                    currentYear--;
                } else {
                    currentMonth--;
                }
                renderCalendar(currentMonth, currentYear);
            });

            // INITIAL RENDERING OF CALENDAR
            renderCalendar(currentMonth, currentYear);
        });

        document.addEventListener("DOMContentLoaded", function () {
            const notesContainer = document.getElementById("notesContainer");
            const saveNoteButton = document.getElementById("saveNoteButton");
            const deleteNoteButton = document.getElementById("deleteNoteButton");
            const noteInput = document.getElementById("noteInput");
            const noteIdInput = document.getElementById("noteId");
            const emailInput = document.getElementById("emailInput");
            const addNoteModal = new bootstrap.Modal(document.getElementById('addNoteModal'));
            const alertNote = document.querySelector(".notesAddedAlert");
            const alertDanger = document.querySelector(".alertDanger");
            const addNoteModalLabel = document.getElementById("addNoteModalLabel");

            const email = "<?php echo htmlspecialchars($user->email); ?>";


            // Function to fetch and display all notes
            function loadNotes() {
                fetch(`<?php echo site_url('notes/get_notes_by_email'); ?>?email=${encodeURIComponent(email)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            notesContainer.innerHTML = ''; // Clear existing notes
                            data.data.forEach(note => {
                                const noteElement = document.createElement("div");
                                noteElement.className = "myNote p-3 my-1";
                                noteElement.textContent = note.note;

                                noteElement.style.fontSize = "12px";

                                // Show modal when the note is clicked
                                noteElement.onclick = () => {
                                    emailInput.value = note.email;
                                    noteInput.value = note.note;
                                    noteIdInput.value = note.id;
                                    deleteNoteButton.style.display = "block";
                                    saveNoteButton.innerHTML = 'Edit Note';
                                    addNoteModal.show();

                                    addNoteModalLabel.innerHTML = 'Edit Note';
                                };

                                notesContainer.appendChild(noteElement);
                            });
                        } else {
                            console.error('Failed to load notes:', data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            // Function to add a note
            saveNoteButton.addEventListener("click", function () {
                const noteText = noteInput.value.trim();
                const emailText = emailInput.value.trim();

                if (noteText) {
                    const noteId = noteIdInput.value;
                    const url = noteId === "0" ? '<?php echo site_url('notes/create_note'); ?>' :
                        '<?php echo site_url('notes/edit_note'); ?>';
                    const body = new URLSearchParams({
                        note: noteText,
                        email: emailText,
                        id: noteId
                    });

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: body
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {

                                alertNote.style.display = "block";

                                if (noteIdInput.value === '0') {
                                    alertNote.innerHTML = "Note added successfully!";
                                } else {
                                    alertNote.innerHTML = "Note edited successfully!";
                                }

                                loadNotes();
                                noteInput.value = '';
                                noteIdInput.value = '0';
                                addNoteModal.hide();
                                saveNoteButton.innerHTML = 'Save Note';

                                setTimeout(() => {
                                    alertNote.style.display = "none";

                                    alertNote.innerHTML = "";
                                }, 2000);
                            } else {
                                console.error('Failed to save note:', data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                } else {
                    alertDanger.style.display = "block";

                    alertDanger.innerHTML = "Please enter a note!";

                    setTimeout(() => {
                        alertDanger.style.display = "none";
                        alertDanger.innerHTML = "";
                    }, 2000);
                }
            });

            // Function to delete a note
            deleteNoteButton.addEventListener("click", function () {
                const noteId = noteIdInput.value;

                if (noteId) {
                    if (confirm("Are you sure you want to delete this note?")) {
                        fetch('<?php echo site_url('notes/delete_note'); ?>', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: new URLSearchParams({
                                id: noteId
                            })
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {

                                    alertNote.style.display = "block";
                                    alertNote.innerHTML = "Note deleted successfully!";

                                    loadNotes();
                                    noteInput.value = '';
                                    noteIdInput.value = '0';
                                    addNoteModal.hide();

                                    setTimeout(() => {
                                        alertNote.style.display = "none";

                                        alertNote.innerHTML = "";
                                    }, 2000);
                                } else {
                                    console.error('Failed to delete note:', data.message);
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    }
                }
            });

            // Load notes on page load
            loadNotes();
        });
    </script>
</body>

</html>