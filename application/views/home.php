<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay 185</title>
    <link rel="shortcut icon" href="../public/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        .header {
            background-image: url("../public/background.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            isolation: isolate;
            height: 50vh;
        }

        .header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #D94401;
            opacity: 0.5;
            z-index: -1;
        }

        #myChart {
            max-width: 360px;
            height: 400px;
            margin: auto;
        }
    </style>
</head>

<body>
    <header class="sticky-top">
        <?php include '../views/includes/header.php'; ?>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 header text-light d-flex justify-content-center align-items-center text-center">
                    <h1 class="fw-bold">Barangay 185 Malaria, Caloocan City</h1>
                </div>
                <div class="col-12 mt-5 text-justify">
                    <p>What is Lorem Ipsum?<br /> <br />
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>

                    <button class="btn btn-warning text-dark fw-bold px-5 rounded-5 mt-3 mb-5">See more</button>
                </div>

                <div class="col-12 mt-5">
                    <canvas id="myChart"></canvas>
                    <p class="tetx-justify mt-5">What is Lorem Ipsum?<br /> <br />
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>

                <div class="col-12 mt-5">
                    <canvas id="circlegraph"></canvas>
                    <p class="tetx-justify mt-5">What is Lorem Ipsum?<br /> <br />
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar chart initialization (already present)
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['0', '1', '2', '3', '4', '5'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: '#0D523A',
                    borderColor: '#0D523A',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Doughnut chart for demographics
        const circleCtx = document.getElementById('circlegraph').getContext('2d');
        const circleChart = new Chart(circleCtx, {
            type: 'doughnut',
            data: {
                labels: ['Population', 'Females', 'Males', 'Households'],
                datasets: [{
                    label: 'Demographics',
                    data: [9000, 4500, 4500, 5000],
                    backgroundColor: ['#D94401', '#FF671E', '#048D5C', '#00D68C'],
                    borderWidth: 1,
                    marginBottom: '10px'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>