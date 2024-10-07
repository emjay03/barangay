<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barangay 185</title>
    <link rel="shortcut icon"
        href="https://scontent.fmnl17-1.fna.fbcdn.net/v/t39.30808-6/243452652_187913776797965_1265155358119833421_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEltPmCH2mkgGbpveR0mr_VrRZEYCFUhn2tFkRgIVSGfQj2VRqYC62Ulv7atBqLLYHXVyGuPcIOKzs0kQTGmT4O&_nc_ohc=4ggRdj8r1O0Q7kNvgFxnVpc&_nc_ht=scontent.fmnl17-1.fna&_nc_gid=At8TKuEvrMepfYoHu0Bfpua&oh=00_AYBbrZcMxPhOWcosaQGQjJ52t9tErnPAXExZoW4boghv_Q&oe=66FB131D"
        type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: "Poppins", sans-serif;
            transition: all 0.3s ease;
        }

        body {
            overflow-y: hidden;
            overflow-y: scroll;
        }

        main {
            height: 100%;
        }

        h1 {
            letter-spacing: 2px;
            font-size: 50px;
        }

        .Username,
        .Password {
            text-indent: 1rem;
            letter-spacing: 1px;
            color: #282828ff;
            font-size: 15px;
            box-shadow: 0px 5px 10px 0px #2828285d;
        }

        .Username:hover,
        .Password:hover {
            background-color: #f0f0f0;
        }

        .Button {
            background-color: #2A57FFff;
            text-indent: 0rem;
            letter-spacing: 1px;
            height: 30px;
            text-transform: uppercase;
        }

        .Button:hover {
            background-color: #4b72ff;
        }

        .Risghtside img {
            filter: brightness(50%) contrast(80%);
        }

        .BackgroundBlue {
            left: 0;
            top: 0;
            border-left: 700px solid #2A57FFff;
            border-right: 50px solid transparent;
            border-bottom: 600px solid transparent;
        }

        .BackgroundRed {
            right: 0;
            bottom: 0;
            border-left: 50px solid transparent;
            border-right: 700px solid #FF0000ff;
            border-top: 600px solid transparent;
        }

        .BackgroundBlue,
        .BackgroundRed {
            width: 0;
            height: 0;
            position: absolute;
            opacity: 1;
            z-index: -1;
        }

        .mask {
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
</head>

<body>
    <main class="position-relative">
        <div class="container-fluid p-1">
            <div class="container d-flex justify-content-center align-items-center mt-5">
                <img class="rounded-circle me-4" style="z-index: 2"
                    src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t39.30808-6/243452652_187913776797965_1265155358119833421_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEltPmCH2mkgGbpveR0mr_VrRZEYCFUhn2tFkRgIVSGfQj2VRqYC62Ulv7atBqLLYHXVyGuPcIOKzs0kQTGmT4O&_nc_ohc=Dr6MphUMueIQ7kNvgFhqORh&_nc_ht=scontent.fmnl17-1.fna&_nc_gid=AzXGoAs9u8wUQ0zAHWW7eTv&oh=00_AYASuq7fK6lB9nINGhx1R_YjIJ0otVPB2sBGgRV-i1sRsQ&oe=67059F1D"
                    alt="barangay187" width="100">

                <h2 class="text-light fw-bold" style="z-index: 2">BARANGAY 185 MALARIA DISTRICT 3, <br />
                    CALOOCAN CITY</h2>
            </div>
        </div>

        <div class="mt-2">
            <div class="container p-5">
                <div class="contianer-fluid bg-light p-2 rounded-4 shadow" style="z-index: 5">
                    <div class="row d-flex">

                        <div class="col-6 p-5 Leftside">

                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success mx-5">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('error')): ?>
                                <div class="alert alert-danger mx-5">
                                    <?php echo $this->session->flashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <h3 class="fw-bold mx-5">Login</h3>
                            <h6 class="fw-normal mx-5 mt-3">Signin to start your session</h6>

                            <form action="<?php echo site_url('auth/login'); ?>" method="post" class="p-5 rounded-start-3">
                                <input type="text" name="email" placeholder="Username :"
                                    class="mb-5 py-2 w-100 border-0 rounded-3 Username">
                                <input type="password" name="password" placeholder="Password :"
                                    class="mb-5 py-2 w-100 border-0 rounded-3 Password">

                                <div class="row">
                                    <div class="col-6">
                                        <input type="submit" value="Sign in"
                                            class="px-5 border-0 text-center text-light fw-semibold fs-6 Button">
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="" class="text-decoration-none">Forget Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 rounded-3 Risghtside">
                            <img class="rounded-end-3 object-fit-cover h-100 w-100"
                                src="https://scontent.fmnl17-4.fna.fbcdn.net/v/t1.15752-9/460205774_1066625491057187_3834867613454557937_n.png?_nc_cat=105&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGswJd_jCp1zwDE7tipx5ruw4zsJoMwZhHDjOwmgzBmEUuRc8bPVcQafpQtsRhDx8RvQaxuMEDIs_uS7hEtvQzz&_nc_ohc=n1XefTNFqqUQ7kNvgFCmDP8&_nc_ht=scontent.fmnl17-4.fna&_nc_gid=A4dXJTXn0xFOpprjOMP87pq&oh=03_Q7cD1QHz3aiRkh9nwp7VZ4d07YByfVsvfWNxbbErYwF1rIdomw&oe=671C86B6"
                                alt="barangay187">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img class="object-fit-cover h-100 w-100 z-n1 position-absolute top-0"
            src="https://scontent.fmnl17-4.fna.fbcdn.net/v/t1.15752-9/460205774_1066625491057187_3834867613454557937_n.png?_nc_cat=105&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGswJd_jCp1zwDE7tipx5ruw4zsJoMwZhHDjOwmgzBmEUuRc8bPVcQafpQtsRhDx8RvQaxuMEDIs_uS7hEtvQzz&_nc_ohc=n1XefTNFqqUQ7kNvgFCmDP8&_nc_ht=scontent.fmnl17-4.fna&_nc_gid=A4dXJTXn0xFOpprjOMP87pq&oh=03_Q7cD1QHz3aiRkh9nwp7VZ4d07YByfVsvfWNxbbErYwF1rIdomw&oe=671C86B6"
            alt="barangay187">

        <div class="BackgroundBlue"></div>
        <div class="BackgroundRed"></div>
        <div class="mask bg-dark opacity-50 position-absolute top-0"></div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>