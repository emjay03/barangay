<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
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

    .center {
        height: 100%;
        width: 100%;
        background-image: url("https://scontent.fmnl17-1.fna.fbcdn.net/v/t39.30808-6/243452652_187913776797965_1265155358119833421_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEltPmCH2mkgGbpveR0mr_VrRZEYCFUhn2tFkRgIVSGfQj2VRqYC62Ulv7atBqLLYHXVyGuPcIOKzs0kQTGmT4O&_nc_ohc=Dr6MphUMueIQ7kNvgFhqORh&_nc_ht=scontent.fmnl17-1.fna&_nc_gid=AzXGoAs9u8wUQ0zAHWW7eTv&oh=00_AYASuq7fK6lB9nINGhx1R_YjIJ0otVPB2sBGgRV-i1sRsQ&oe=67059F1D");
        background-position: center;
        background-repeat: repeat;
        background-size: auto;
        opacity: 0.1;
        position: absolute;
        top: 0;
        left: 0;
    }

    .content {
        margin-top: 4rem;
    }
</style>

<body>

    <div class="d-flex">
        <?php include 'application/views/admin/include/sidebar.php'; ?>
        <main class="bg-light">
            <?php include 'application/views/admin/include/header.php'; ?>


            <div class="row content">
                <div class="center"></div>
                <h1>Resident Information</h1>

                <table border="1">
                    <thead>
                        <tr>
                            <th>incident_type</th>
                            <th>status</th>
                            <th>schedule</th>
                            <th>date_reported</th>
                            <th>time_reported</th>
                            <th>date_incident</th>
                            <th>time_incident</th>
                            <th>incident_location</th>
                            <th>incident_narrative</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_blotters as $all_blotter): ?>
                            <tr>

                                <td><?php echo $all_blotter['incident_type']; ?></td>
                                <td><?php echo $all_blotter['status']; ?></td>
                                <td><?php echo $all_blotter['schedule']; ?></td>
                                <td><?php echo $all_blotter['date_reported']; ?></td>
                                <td><?php echo $all_blotter['time_reported']; ?></td>
                                <td><?php echo $all_blotter['date_incident']; ?></td>
                                <td><?php echo $all_blotter['time_incident']; ?></td>
                                <td><?php echo $all_blotter['incident_location']; ?></td>
                                <td><?php echo $all_blotter['incident_narrative']; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>