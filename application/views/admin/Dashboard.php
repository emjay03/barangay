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
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    #notesContainer {
        scrollbar-width: NONE;
    }

    body {
        overflow: hidden;
    }

    main {
        height: 100vh;
        overflow-y: scroll;
        width: 100vw;
        overflow-x: hidden;
    }

    .cal {
        position: relative;
        isolation: isolate;
    }

    .cal::before {
        content: "";
        position: absolute;
        top: -3rem;
        left: 0;
        width: 150px;
        height: 150px;
        background-color: #929EB2;
        z-index: -5;
        border-radius: 50%;
        opacity: 0.5;
    }

    .cal::after {
        content: "";
        position: absolute;
        top: 3rem;
        left: -3rem;
        width: 150px;
        height: 150px;
        background-color: #203659;
        z-index: -5;
        border-radius: 50%;
        opacity: 0.5;
    }

    .record {
        position: relative;
        isolation: isolate;
    }

    .record::before {
        content: "";
        position: absolute;
        bottom: -3rem;
        right: 0;
        width: 150px;
        height: 150px;
        background-color: #929EB2;
        z-index: -5;
        border-radius: 50%;
        opacity: 0.5;
    }

    .record::after {
        content: "";
        position: absolute;
        bottom: 3rem;
        right: -3rem;
        width: 150px;
        height: 150px;
        background-color: #203659;
        z-index: -5;
        border-radius: 50%;
        opacity: 0.5;
    }

    .today {
        background-color: #fff;
        color: #203659;
        border-radius: 15px;
        border: 1px solid #203659;
        padding: 0;
        height: 30px;
        text-align: center;
        line-height: 1;
    }

    .note {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
    }
</style>

<body>

    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <header>
                <?php include 'application/views/admin/include/header.php'; ?>
            </header>
            <div class="row content">
                <div class="col-lg-12 container-fluid z-3 d-flex align-items-center mb-3" style="background-color: #203659;"><p class="text-light mx-3 mt-3">Barangay 185 Malaria District 3, Caloocan City</p></div>
                <div class="col-lg-12 col-xl-5 p-0 m-0 cal d-flex justify-content-center">
                    <div class="p-0 text-center" style="max-width: 390px">
                        <h5 class="mt-3 mx-2 fw-bold text-start">Time</h5>
                        <div class="text-center d-flex align-items-center justify-content-center time">
                            <p id="current-time" class="fs-1 fw-bold text-light p-2 px-5 rounded-4 shadow"
                                style="background-color: #203659"></p>
                        </div>

                        <div class="mt-2 calendar">
                            <div class="p-0">
                                <h5 class="fw-bold text-start">Calendar</h5>
                                <div class="card calendar shadow">
                                    <div class="card-body">
                                        <div class="calendar-header d-flex justify-content-between align-items-center">
                                            <button id="prevMonth"
                                                class="btn rounded-circle btn-primary shadow fs-6 px-2 py-0"
                                                style="text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);">&lt;</button>
                                            <p id="monthYear" class="m-0 fw-bold"></p>
                                            <button id="nextMonth"
                                                class="btn rounded-circle btn-primary shadow fs-6 px-2 py-0"
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

                <div class="col-l-12 col-xl-2 p-0 m-0 d-flex justify-content-center align-items-start mt-5"
                    style="max-height: 700px;">
                    <div class="p-0 text-center" style="height: 500px;">
                        <div class="notes shadow" style="height: 500px;">
                            <div class="card h-100">
                                <div
                                    class="card-header text-start fw-bold d-flex justify-content-between align-items-center">
                                    <span class="mx-5">Notes</span>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addNoteModal">+</button>
                                </div>


                                <div class="card-body p-0" id="notesContainer" style="overflow-y: scroll;"></div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="addNoteModal" tabindex="-1" aria-labelledby="addNoteModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNoteModalLabel">Add Note</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="emailInput" name="email" value="<?php echo htmlspecialchars($user->email); ?>" readonly/>

                                    <textarea id="noteInput" class="form-control" rows="3"
                                        placeholder="Write your note here..."></textarea>
                                    <input type="hidden" id="noteId" value="0" /> <!-- Hidden input for note ID -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" id="deleteNoteButton"
                                        style="display: none;">Delete Note</button>
                                    <button type="button" class="btn btn-primary" id="saveNoteButton">Save Note</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-xl-5 p-0 m-0 d-flex justify-content-center record">
                    <div class="px-3 text-center">
                        <div class="card z-3 bg-transparent border-0 text-center p-3 fw-bold rounded-0">
                            <p class="text-dark fs-6 xl-fs-6 mt-2">RESIDENT RECORD SUMMARY</p>
                        </div>

                        <div class="container-fluid">
                        <div class="row fw-bold">
                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">total population</p>
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

                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">registered Voters</p>
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

                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">Male</p>
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

                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">Female</p>
                                    </div>

                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <i class="bi bi-gender-female fs-1 text-DARK me-2"></i>
                                        <div class="text-center w-100">
                                            <p class="fw-bold mt-3 fs-3">
                                                <?php echo !empty($female_count) ? $female_count : 0; ?>
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="card z-3 bg-transparent border-0 text-center p-3 fw-bold rounded-0">
                            <p class="text-dark fs-6 xl-fs-6 mt-4">BLOTTER RECORD SUMMARY</p>
                        </div>

                        <div class="row p-0 m-0 fw-bold">
                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow" style="max-height: 200px">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">Settled Cases</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center rounded-bottom-2"
                                        style="background-color: #203659">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow" style="max-height: 200px">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">Unscheduled Cases</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center rounded-bottom-2"
                                        style="background-color: #203659">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow" style="max-height: 200px">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">Scheduled Cases</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center rounded-bottom-2"
                                        style="background-color: #203659">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 m-0 p-1">
                                <div class="card z-3 shadow" style="max-height: 200px">
                                    <div class="card-header">
                                        <p class="text-start" style="font-size: 10px">Settled Cases</p>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center rounded-bottom-2"
                                        style="background-color: #203659">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="card bg-transparent border-0 mt-4 d-flex align-items-center justify-content-center z-3">
                            <button class="btn btn-primary text-light px-5 py-1 fw-semibold rounded-5"
                                onclick="window.location.href='/barangay/Dashboard'">Refresh Dashboard</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        function updateTime() {
            const now = new Date();
            const options = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            };
            document.getElementById('current-time').innerText = now.toLocaleTimeString([], options);
        }

        // Initial rendering
        updateTime();
        setInterval(updateTime, 1000); // Update every second

        document.addEventListener("DOMContentLoaded", function() {
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
                    let row = document.createElement("div");
                    row.className = "row";

                    for (let j = 0; j < 7; j++) {
                        let cell = document.createElement("div");
                        cell.className = "col text-center py-2";

                        if (i === 0 && j < firstDay) {
                            cell.classList.add("empty");
                        } else if (date > daysInMonth) {
                            cell.classList.add("empty");
                        } else {
                            if (date === currentDate && month === today.getMonth() && year === today.getFullYear()) {
                                cell.classList.add("today");
                                cell.innerHTML = `<strong>${date}</strong>`;
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
            nextMonthBtn.addEventListener("click", function() {
                if (currentMonth === 11) {
                    currentMonth = 0;
                    currentYear++;
                } else {
                    currentMonth++;
                }
                renderCalendar(currentMonth, currentYear);
            });

            prevMonthBtn.addEventListener("click", function() {
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

        document.addEventListener("DOMContentLoaded", function() {
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
                                noteElement.className = "note p-2 border border-dark border-0 border-bottom";
                                noteElement.textContent = note.note;

                                noteElement.style.fontSize = "12px";

                                // Show modal when the note is clicked
                                noteElement.onclick = () => {
                                    emailInput.value = note.email;
                                    noteInput.value = note.note; // Set the current note text in the input
                                    noteIdInput.value = note.id; // Set the ID of the note being edited
                                    deleteNoteButton.style.display = "block"; // Show delete button
                                    addNoteModal.show(); // Show the modal
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
            saveNoteButton.addEventListener("click", function() {
                const noteText = noteInput.value.trim();
                const emailText = emailInput.value.trim();

                if (noteText) {
                    const noteId = noteIdInput.value;
                    const url = noteId === "0" ? '<?php echo site_url('notes/create_note'); ?>' : '<?php echo site_url('notes/edit_note'); ?>';
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
            deleteNoteButton.addEventListener("click", function() {
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