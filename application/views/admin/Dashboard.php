<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>barangay 185</title>
    <link rel="shortcut icon" href="application/public/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="application/public/assets/css/superadmin.css" type="text/css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<style>

</style>

<body>

    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <header>
                <?php include 'application/views/admin/include/header.php'; ?>
            </header>
            <div class="row content">
                <div class="col-lg-12 container z-3 d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center py-3 my-3 w-100 position-relative">
                        <div class="d-flex w-100 w-md-75 align-items-center justify-content-between px-5">
                            <img src="application/public/northcaloocan_logo.png" alt="logo" height="100">
                            <div class="text-center mx-5">
                                <h1 class="fw-bold text-light" id="d-title" style="font-size: 50px">BARANGAY 185</h1>
                                <h5 class="fw-bold   " style="margin-top: 10rem">Hon. RODOLFO “KAP ATO” OLIVA</h5>
                            </div>
                            <img src="application/public/logo.png" alt="logo" height="100">
                        </div>
                        <div class="background w-full" id="d-background"></div>
                    </div>
                </div>

                <div class="col-lg-12 container z-3 d-flex justify-content-end align-items-end px-4">
                    <button class="btn btn-primary btn-sm">
                        <a href="#residentSummary" class="px-2 text-light"
                            style="font-size: 12px; text-decoration: none;">RESIDENT RECORD SUMMARY</a>
                    </button>
                </div>

                <div class="col-lg-6 px-4 py-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div
                                    class="card-header text-light text-start fw-bold d-flex justify-content-between align-items-center">
                                    <span class="mx-5">Mission</span>
                                </div>

                                <div class="card-body">
                                    <div class="form-group mt-2 text-center" style="height: 300px;">
                                        <h6><?php echo $mission['mission']; ?></h6>
                                        <!-- <textarea class="form-control text-center" name="mission" id="mission"
                                            style="height: 300px; font-size: 12px; resize: none;"></textarea> -->
                                    </div>

                                    <!-- Button to open modal -->
                                    <button class="btn btn-primary me-1 btn-sm float-end mt-2"
                                        style="position: absolute; bottom: 0.5rem; right: 0.5rem;"
                                        data-bs-toggle="modal" data-bs-target="#missionModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div
                                    class="card-header text-light text-start fw-bold d-flex justify-content-between align-items-center">
                                    <span class="mx-5">Vision</span>
                                </div>

                                <div class="card-body">
                                    <div class="form-group mt-2 text-center" style="height: 300px;">
                                        <h6><?php echo $vision['vision']; ?></h6>
                                        <!-- <textarea class="form-control text-center" name="vision" id="vision"
                                            style="height: 300px; font-size: 12px; resize: none;"></textarea> -->
                                    </div>

                                    <!-- Button to open modal -->
                                    <button class="btn btn-primary me-1 btn-sm float-end mt-2"
                                        style="position: absolute; bottom: 0.5rem; right: 0.5rem;"
                                         data-bs-toggle="modal" data-bs-target="#visionModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Mission -->
                <div class="modal fade" id="missionModal" tabindex="-1" aria-labelledby="missionModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="missionModalLabel">Edit Mission</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="<?php echo site_url('MissionVisionController/update_mission'); ?>"
                                method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <textarea class="form-control" name="mission" id="mission"
                                            rows="4"><?php echo $mission['mission']; ?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal for Vision -->
                <div class="modal fade" id="visionModal" tabindex="-1" aria-labelledby="visionModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="visionModalLabel">Edit Vision</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="<?php echo site_url('MissionVisionController/update_vision'); ?>"
                                method="POST">
                                <div class="modal-body ">
                                    <div class="form-group">
                                        <textarea class="form-control " name="vision" id="vision"
                                            rows="4"><?php echo $vision['vision']; ?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 px-4 py-3">
                    <!-- Add Announcement Modal -->
                    <div class="modal fade" id="addAnnouncementModal" tabindex="-1" role="dialog"
                        aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="addAnnouncementModalLabel">Add New Announcement
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
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="editAnnouncementModalLabel">Edit Announcement
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
                                                            <h5 class="card-title fw-bold">
                                                                <?php echo htmlspecialchars($announcement['title']); ?>
                                                            </h5>
                                                            <h6 class="card-body">
                                                                <?php echo htmlspecialchars($announcement['details']); ?>
                                                            </h6>
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

                <div class="col-lg-6 px-4 py-3">
                    <div class="p-0">
                        <div class=" calendar">
                            <div class="p-0">
                                <div
                                    class="calendar-head text-light fw-bold d-flex py-3 justify-content-start rounded-top">
                                    <span class="mx-5"><i class="bi bi-megaphone-fill me-2"></i>Calendar</span>
                                </div>
                                <div class="card calendar shadow">
                                    <div class="card-body">
                                        <div class="calendar-header d-flex justify-content-between align-items-center">
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

                <div class="col-lg-6 px-4 py-3">
                    <div class="modal fade" id="addNoteModal" tabindex="-1" aria-labelledby="addNoteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="addNoteModalLabel">Add Note</h5>
                                        <button type="button" class="btn-close text-sm" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" id="emailInput" name="email"
                                            value="<?php echo htmlspecialchars($user->email); ?>" readonly />

                                        <textarea id="noteInput" class="form-control" rows="3"
                                            placeholder="Write your note here..."></textarea>
                                        <input type="hidden" id="noteId" value="0" /> <!-- Hidden input for note ID -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger btn-sm" id="deleteNoteButton"
                                            style="display: none;">Delete</button>
                                        <button type="button" class="btn btn-primary btn-sm"
                                            id="saveNoteButton">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="p-0 text-center">
                        <div class="notes shadow">
                            <div class="card h-100">
                                <div
                                    class="card-header  text-light text-start fw-bold d-flex justify-content-between align-items-center">
                                    <span class="mx-5"><i class="bi bi-card-list me-2"></i>My Notes</span>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addNoteModal"><i class="bi bi-plus-circle fs-5"></i></button>
                                </div>


                                <div class="card-body p-0 p-2 text-start" id="notesContainer"
                                    style="overflow-y: scroll; height: 350px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 px-4 py-3" id="residentSummary">
                    <div class="card z-3 bg-transparent border-0 text-center p-3 fw-bold rounded-0">
                        <p class="text-dark fs-6 xl-fs-6 mt-2">RESIDENT RECORD SUMMARY</p>
                    </div>

                    <div class="container-fluid">
                        <div class="row fw-bold">
                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 15px">Total Population</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people-fill fs-1 text-dark me-2"></i>
                                        <div class="text-center w-100">
                                            <p class="fw-bold mt-3 fs-3">
                                                <?php echo !empty($all_resident) ? $all_resident : 0; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 15px">Registered Voters</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <i class="bi bi-list-check fs-1 text-dark me-2"></i>
                                        <div class="text-center w-100">
                                            <p class="fw-bold mt-3 fs-3">
                                                <?php echo !empty($registered_voters) ? $registered_voters : 0; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 15px">Male</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <i class="bi bi-gender-male fs-1 text-dark me-2 fw-bold"></i>
                                        <div class="text-center w-100">
                                            <p class="fw-bold mt-3 fs-3">
                                                <?php echo !empty($male_count) ? $male_count : 0; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 15px">Female</p>
                                    </div>

                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <i class="bi bi-gender-female fs-1 text-DARK me-2"></i>
                                        <div class="text-center w-100">
                                            <p class="fw-bold mt-3 fs-3">
                                                <?php echo !empty($female_count) ? $female_count : 0; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 15px">PWD</p>
                                    </div>

                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-vcard me-2 fs-1"></i>
                                        <div class="text-center w-100">
                                            <p class="fw-bold mt-3 fs-3">
                                                <!-- <?php echo !empty($female_count) ? $female_count : 0; ?> -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <iz class="text-start" style="font-size: 15px">Senior Citizens</p>
                                    </div>

                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-vcard me-2 fs-1"></i>
                                        <div class="text-center w-100">
                                            <p class="fw-bold mt-3 fs-3">
                                                <?php echo !empty($senior_count) ? $senior_count : 0; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 px-4 py-3">
                    <div class="card z-3 bg-transparent border-0 text-center p-3 fw-bold rounded-0">
                        <p class="text-dark fs-6 xl-fs-6 mt-4">BLOTTER RECORD SUMMARY</p>
                    </div>

                    <div class="row p-0 m-0 fw-bold">
                        <div class="col-lg-6 m-0 p-1">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: #ff4b33">
                                    <p class="text-start text-light" style="font-size: 15px">Settled Cases</p>
                                </div>
                                <div
                                    class="card-body py-5 fs-3  d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
                                    <?php echo !empty($get_Settled) ? $get_Settled : 0; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-0 p-1">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: #ff4b33">
                                    <p class="text-start text-light" style="font-size: 15px">Unscheduled Cases</p>
                                </div>
                                <div
                                    class="card-body py-5 fs-3 d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
                                    <?php echo !empty($get_Scheduled) ? $get_Scheduled : 0; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-0 p-1">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: #ff4b33">
                                    <p class="text-start text-light" style="font-size: 15px">Scheduled Cases</p>
                                </div>
                                <div
                                    class="card-body py-5 fs-3 d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
                                    0
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-0 p-1">
                            <div class="card z-3 shadow" style="max-height: 200px">
                                <div class="card-header" style="background-color: #ff4b33">
                                    <p class="text-start text-light" style="font-size: 15px">Settled Cases</p>
                                </div>
                                <div
                                    class="card-body py-5 fs-3 d-flex text-dark align-items-center justify-content-center rounded-bottom-2">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>


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
                "scrollY": "300px",
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
                                cell.innerHTML = `<strong class="border border-secondary py-2 px-2 text-dark">${date}</strong>`;
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
                                    addNoteModal.show();
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
                                loadNotes(); // Reload notes after adding/editing
                                noteInput.value = ''; // Clear the input field
                                noteIdInput.value = '0'; // Reset the hidden ID input
                                addNoteModal.hide(); // Close the modal
                                deleteNoteButton.style.display = "none"; // Hide delete button
                            } else {
                                console.error('Failed to save note:', data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                } else {
                    alert('Please enter a note.'); // Prompt for note text
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
                                    loadNotes(); // Reload notes after deleting
                                    noteInput.value = ''; // Clear the input field
                                    noteIdInput.value = '0'; // Reset the hidden ID input
                                    addNoteModal.hide(); // Close the modal
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