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
        background-image: url("application/public/indigency.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .clearance {
        background-image: url("application/public/clearance.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .brgyid {
        background-image: url("application/public/indigency.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .certificate {
        background-image: url("application/public/certificate.jpg");
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
                                <div class="card-head text-center fw-bold fs-4">B. CLEARANCE</div>
                                <div class="card-body text-center d-flex justify-content-center">
                                    <div class="bg-danger border border-light shadow p-2 clearance"
                                        style="width: 250px; height: 300px;"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#clearanceModal">
                                        <i class="bi bi-box-arrow-in-down-left"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="card p-2 shadow">
                                <div class="card-head text-center fw-bold fs-4">B. I.D</div>
                                <div class="card-body text-center d-flex justify-content-center">
                                    <div class="bg-danger border border-light shadow p-2 brgyid"
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
                                <div class="card-head text-center fw-bold fs-4">B. CERTIFICATE</div>
                                <div class="card-body text-center d-flex justify-content-center">
                                    <div class="bg-danger border border-light shadow p-2 certificate"
                                        style="width: 250px; height: 300px;"></div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#certificateModal">
                                        <i class="bi bi-box-arrow-in-down-left"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'application/views/admin/include/indigency.php'; ?>
            <?php include 'application/views/admin/include/clearance.php'; ?>
            <?php include 'application/views/admin/include/certificate.php'; ?>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script src="application/public/js/indigency.js"></script>
    <script src="application/public/js/clearance.js"></script>
    <script src="application/public/js/certificate.js"></script>
</body>

</html>