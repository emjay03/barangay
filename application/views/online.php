<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barangay 185</title>
    <link rel="shortcut icon" href="application/public/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            transition: all 0.3s ease;
        }

        main {
            background-image: url("application/public/background.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            filter: contrast(110%) brightness(110%);
            isolation: isolate;
        }

        main::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            opacity: 0.5;
            z-index: -1;
        }

        .login::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 60%;
            height: 60%;
            clip-path: polygon(0 0, 100% 0, 0 100%);
            background-color: #FF0000;
            opacity: 0.3;
            z-index: -1;
        }

        .login::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60%;
            height: 60%;
            clip-path: polygon(100% 100%, 100% 0, 0 100%);
            background-color: #095100;
            opacity: 0.3;
            z-index: -1;
        }

        .loginContainer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 50%;
            clip-path: polygon(0 0, 100% 0, 0 100%);
            background-color: #FF0000;
            opacity: 0.5;
            z-index: -1;
        }

        .loginContainer::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 50%;
            clip-path: polygon(100% 100%, 100% 0, 0 100%);
            background-color: #095100;
            opacity: 0.5;
            z-index: -1;
        }

        .btn-primary {
            background-color: oklch(0.705 0.213 47.604) !important;
        }

        .btn-primary:hover {
            background-color: oklch(0.646 0.222 41.116) !important;
        }
    </style>
</head>
<!--<img class="rounded-circle me-4" style="z-index: 2"
                    src="application/public/logo.png"
                    alt="barangay187" width="100">-->

<body>
    <main class="bg-light" style="height: 100vh;">
        <div class="login" style="height: 100%;">
            <div class="loginContainer" style="height: 100%;">
                <div class="container-fluid ">
                    <div class="d-block text-center d-block d-lg-none">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/brgy185.jpg" alt="barangay187" width="70">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/northcaloocan_logo.png" alt="barangay187" width="70">
                        </div>
                        <p class="text-light fw-bold mt-3" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                            BARANGAY 185
                            MALARIA DISTRICT 3,
                            CALOOCAN CITY</p>
                        <p class="text-light fw-light" style="font-size: 12px;">Barangay Information Management
                            System &copy;
                            <?php echo date('Y'); ?>
                        </p>

                        <p class="text-light fw-bold text-uppercase">Online Request Form</p>
                    </div>

                    <div class="d-block text-center d-none d-lg-block">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/brgy185.jpg" alt="barangay187" width="120">
                            <img class="rounded-circle mx-3 mt-3 mt-lg-5" style="z-index: 2"
                                src="application/public/northcaloocan_logo.png" alt="barangay187" width="120">
                        </div>
                        <h1 class="text-light fw-bold mt-3" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                            BARANGAY 185
                            MALARIA DISTRICT 3,
                            CALOOCAN CITY</h1>
                        <p class="text-light fw-light" style="font-size: 20px;">Barangay Information Management
                            System &copy;
                            <?php echo date('Y'); ?>
                        </p>

                        <h1 class="text-light fw-bold text-uppercase mt-5">Online Request Form</h1>
                    </div>

                    <div class="container-fluid mt-5 pt-3 pt-lg-5 px-lg-5">
                        <div class="row px-lg-5">
                            <div class="col-md-12 col-md-6 col-lg-6 mb-3">
                                <button class="btn btn-primary btn-sm w-100 py-md-3 py-lg-3 py-xl-4 py-2 fw-semibold border-0" onclick="window.location.href = '<?php echo base_url(); ?>OnlineClearance';" id="addresident">Barangay
                                    Clearance</button>
                            </div>
                            <div class="col-md-12 col-md-6 col-lg-6 mb-3">
                                <button class="btn btn-primary btn-sm w-100 py-md-3 py-lg-3 py-xl-4 py-2 fw-semibold border-0" onclick="window.location.href = '<?php echo base_url(); ?>OnlineCertificate';" id="addresident">barangay
                                    Certificate</button>
                            </div>
                            <div class="col-md-12 col-md-6 col-lg-6 mb-3">
                                <button class="btn btn-primary btn-sm w-100 py-md-3 py-lg-3 py-xl-4 py-2 fw-semibold border-0" onclick="window.location.href = '<?php echo base_url(); ?>OnlineIndigency';" id="addresident">barangay
                                    Indigency</button>
                            </div>
                            <div class="col-md-12 col-md-6 col-lg-6">
                                <button class="btn btn-primary btn-sm w-100 py-md-3 py-lg-3 py-xl-4 py-2 fw-semibold border-0" onclick="window.location.href = '<?php echo base_url(); ?>OnlineId';" id="addresident">barangay
                                    I . D</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    </script>
</body>

</html>