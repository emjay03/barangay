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
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&display=swap" rel="stylesheet">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    #notesContainer {
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
    }

    .indigency {
        background-image: url("application/public/indigency.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .residency {
        background-image: url("application/public/indigency.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>

    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <header>
                <?php include 'application/views/admin/include/header.php'; ?>
            </header>
            <div class="row content p-5 m-5 rounded-4 bg-light shadow-lg">
                <div class="d-flex justify-content-between mb-5">
                    <h1 class="fw-bold text-dark"><i class="bi bi-file-text me-2"></i>Certificate Ensurance</h1>
                </div>
                <div class="contaier-fluid">
                    <div class="row">
                        <div class="col p-2">
                            <div class="card p-2 shadow">
                                <div class="card-head text-center fw-bold fs-4">B. INDIGENCY</div>
                                <div class="card-body text-center d-flex justify-content-center">
                                    <div class="bg-danger border border-light shadow p-2 indigency"
                                        style="width: 250px; height: 300px;"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#indigencyModal">
                                        <i class="bi bi-box-arrow-in-down-left"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="card p-2 shadow">
                                <div class="card-head text-center fw-bold fs-4">B. RESIDENCY</div>
                                <div class="card-body text-center d-flex justify-content-center">
                                    <div class="bg-danger border border-light shadow p-2 residency"
                                        style="width: 250px; height: 300px;"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary"><i
                                            class="bi bi-box-arrow-in-down-left"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="card p-2 shadow">
                                <div class="card-head text-center fw-bold fs-4">B. RESIDENCY</div>
                                <div class="card-body text-center d-flex justify-content-center">
                                    <div class="bg-danger border border-light shadow p-2 residency"
                                        style="width: 250px; height: 300px;"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary"><i
                                            class="bi bi-box-arrow-in-down-left"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="card p-2 shadow">
                                <div class="card-head text-center fw-bold fs-4">B. RESIDENCY</div>
                                <div class="card-body text-center d-flex justify-content-center">
                                    <div class="bg-danger border border-light shadow p-2 residency"
                                        style="width: 250px; height: 300px;"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary"><i
                                            class="bi bi-box-arrow-in-down-left"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'application/views/admin/include/indigency.php'; ?>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script>
        function updateDisplay() {
    const fullName = document.getElementById('fullName').value;
    const wifeName = document.getElementById('purpose').value;
    const date = document.getElementById('dateInput').value;
    const address = document.getElementById('address').value;

    document.getElementById('displayName').value = fullName;
    document.getElementById('displayPurpose').value = wifeName;
    document.getElementById('displayAddress').value = address;

    // Parse the date properly
    const parsedDate = new Date(date + 'T00:00:00'); // Ensure time is set to 00:00:00
    formatDate(parsedDate);
}

function formatDate(date) {
    const day = date.getDate();
    const month = date.toLocaleString('default', { month: 'long' });
    const year = date.getFullYear();

    const suffix = (day % 10 === 1 && day !== 11) ? 'st' :
        (day % 10 === 2 && day !== 12) ? 'nd' :
            (day % 10 === 3 && day !== 13) ? 'rd' : 'th';

    // Set the values in the corresponding input fields
    document.getElementById('day').value = day;
    document.getElementById('suffix').innerText = suffix;
    document.getElementById('month').value = month;
    document.getElementById('year').value = year;
}

        function printModalContent() {
            const { jsPDF } = window.jspdf;

            // Get the current values from the input fields
            const fullName = document.getElementById('displayName').value;
            const purpose = document.getElementById('displayPurpose').value;
            const address = document.getElementById('displayAddress').value;
            const day = document.getElementById('day').value;
            const suffix = document.getElementById('suffix').innerText;
            const month = document.getElementById('month').value;
            const year = document.getElementById('year').value;

            // Create the content for the PDF
            const modalContent = `
                    <div>
                        <div class="header">
                            <div class="d-flex justify-content-between align-items-center py-2 px-5"
                                style="border-bottom: solid 3px #000;">
                                <img src="application/public/logo.png" alt="logo1" class="rounded-circle" height="80" />
                                <div class="d-block text-center" style="line-height: 0.3;">
                                    <img src="application/public/rp.png" alt="logo3" class="" width="300" />
                                    <p class="mt-2 fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">City of
                                        Caloocan</p>
                                    <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Barangay
                                        158 Zone 16 District 3</p>
                                    <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Mobile No.
                                        : 0921-9662901</p>
                                </div>
                                <img src="application/public/northcaloocan_logo.png" alt="logo2" class="rounded-circle"
                                    height="80" />
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-3 text-center pt-2 text-justify jus fs-5"
                                    style="border-right: solid 1px #000; line-height: 1;">
                                    <p class="fw-bold text-break">SANGUNIANG BARANGAY 185</p>

                                    <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">HON. RODOLFO
                                         D. OLIVA <br /> <small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Punong
                                            Barangay</small>
                                    </p>

                                    <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ROSALINA V. TIGLAO
                                        <br /> <small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Treasurer</small>
                                    </p>

                                    <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">NANCY E.
                                        MARCELINO <br /> <small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Secretary</small>
                                    </p>

                                    <br /><br /><br /><br /><br />

                                    <small style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">    
                                        Kagawad:</small><br /><br /><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MARIVIC 
                                        GALIT HSIEH</p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">JUAN J. ESPAYOS JR
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MELVIN F. ESPAYOS
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">CONCEPCION T. CAMMAYO
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MANOLITO N. BAOILAN</p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">VICTOR C. DIAZ</p>
                                    <br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ENGRACIA T. LAMPA</p>

                                    <br /><br />
                                </div>
                                <div class="col-9">
                                    <div class="text-center mt-5" style="line-height: 0.3;">
                                        <h5 class="fw-bold fs-3 tracking-widest" style="font-family: 'Times New Roman', Times, serif;">
                                            BARANGAY INDIGENCY
                                        </h5>
                                        <p class="fw-bold" style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Control
                                            No. :</p>
                                    </div>
                                    <div class="position-relative w-75 z-n1 mt-5 mx-3">
                                        <img src="application/public/logo.png" alt="bglogo"
                                            class="w-100 opacity-25 position-absolute mx-5" style="opacity: 0.1;"/>
                                    </div>
                                    <div class="px-3 text-justify z-3"
                                        style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 5rem; line-height: 1.5">
                                        <span style="margin-left: 5rem; font-size: 17px;"></span>This is to certify that,
                                        <strong class="text-capitalize" style=" font-size: 17px;">${fullName}</strong>,
                                        is a bonafide resident of this barangay, presently residing at
                                        <strong class="text-capitalize" style=" font-size: 17px;">${address}</strong>,
                                        who belongs to the <strong
                                            style="font-family: 'Times New Roman', Times, serif;">INDIGENT FAMILY</strong> with low average Family Income / no Permanent Job.
                                        <br /> <br />
                                        <span style="margin-left: 5rem;"></span>This certification is being issued upon from the request of the above-mentioned named to comply
                                        <strong style="font-family: 'Times New Roman', Times, serif;">FINANCIAL ASSISTANCE from</strong> 
                                        <strong class="text-capitalize" style=" font-size: 17px;">${purpose}</strong>.
                                        <br /> <br />

                                        Given on this
                                        <strong class="text-capitalize" style=" font-size: 17px;">${day}</strong>
                                        <strong style=" font-size: 17px;"><sup>${suffix}</sup></strong>
                                        day of
                                        <strong class="text-capitalize" style=" font-size: 17px;">${month}</strong>
                                        in the year of our Lord,
                                        <strong class="text-capitalize" style=" font-size: 17px;">${year}</strong>
                                        at the office of <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">Office of Barangay 185 Zone 16 District 3, Malaria, City of Caloocan.</span>
                                    </div>
                                    <div class="container-fluid" style="margin-top: 6rem;">
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center mt-5">
                                                <p class="text-center"
                                                    style="font-size: 17px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        HON. RODOLFO D. OLIVA</strong> <br />
                                                    Punong Barangay
                                                </p>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <p class="text-center"
                                                    style="font-size: 17px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        HON. ENGRACIA T. LAMPA</strong> <br />
                                                    Barangay Kagawad On Duty
                                                </p>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center align-items-center border border-dark p-4 text-capitalize fw-bold"
                                                style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 4rem;">
                                                Note: Valid for Six (6) Months from the Date of Issuance
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    `;

            const printWindow = window.open('', '', 'height=800,width=1000');

            // Create a new jsPDF instance
            const pdf = new jsPDF('p', 'pt', 'a4');

            // Add content to the PDF
            pdf.html(modalContent, {
                callback: function (doc) {
                    // Save the PDF
                    doc.save('indigency.pdf');
                },
                x: 10,
                y: 10
            });

            printWindow.document.write('<html><head><title>Print Indigency</title>');
            printWindow.document.write('<style>');
            printWindow.document.write('body { font-family: "Times New Roman", Times, serif; margin: 20px; }');
            printWindow.document.write('</style>');
            printWindow.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">');
            printWindow.document.write('</head><body>');
            printWindow.document.write(modalContent); // Include the newly constructed content
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

    </script>
</body>

</html>