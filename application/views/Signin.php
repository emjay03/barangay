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
    </style>
</head>
<!--<img class="rounded-circle me-4" style="z-index: 2"
                    src="application/public/logo.png"
                    alt="barangay187" width="100">-->

<body>
    <main class="bg-light" style="height: 100vh;">
        <div class="login" style="height: 100%;">
            <div class="loginContainer d-flex justify-content-center align-items-center" style="height: 100%;">
                <div class="container-fluid p-5 d-flex justify-content-center align-items-center">
                    <div class="row" style="max-width: 992px">
                        <div class="col-md-7 d-none d-md-block d-flex justify-content-center align-items-center">
                            <div class="d-block text-center py-5 px-5">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img class="rounded-circle mx-3" style="z-index: 2"
                                        src="application/public/brgy185.jpg" alt="barangay187" width="120">
                                    <img class="rounded-circle mx-3" style="z-index: 2"
                                        src="application/public/northcaloocan_logo.png" alt="barangay187" width="120">
                                </div>
                                <h1 class="text-light fw-bold mt-3"
                                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">BARANGAY 185
                                    MALARIA DISTRICT 3,
                                    CALOOCAN CITY</h1>
                                <p class="text-light fw-light">Barangay Information Management System @2024</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="bg-light rounded-4 p-3 shadow-lg text-start">
                                <h3 class="fw-bold ">Signin</h3>
                                <p class="fw-semibold">Signin to start your session</p>

                                <form action="<?php echo site_url('auth/login'); ?>" method="post"
                                    class="p-3 rounded-3">
                                    <div class="row">
                                        <!-- Success Message -->
                                        <?php if ($this->session->flashdata('success')): ?>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <?php echo $this->session->flashdata('success'); ?>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Error Message -->
                                        <?php if ($this->session->flashdata('error')): ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <?php echo $this->session->flashdata('error'); ?>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="email" class="form-label fw-bold" style="font-size: 14px">Email</label>
                                        <input type="text" name="email" class="form-control border-2 Username"
                                            placeholder="Enter your Email"
                                            style="box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1); font-size: 14px;"
                                            required>
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="password" class="form-label fw-bold" style="font-size: 14px">Password</label>
                                        <input type="password" name="password" class="form-control border-2 shadow-lg Password"
                                            placeholder="Enter your password"
                                            style="box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1); font-size: 14px;"
                                            required>
                                    </div>

                                    <div class="mt-4">
                                        <input type="submit" value="Sign in"
                                            class="btn btn-primary w-100 px-5 border-0 text-center text-light fw-normal"
                                            style="font-size: 14px;">
                                    </div>
                                </form>
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