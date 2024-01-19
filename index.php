<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="imgs/ds.png" class="logo">
                <ul>
                    <li><a href="index.php" class="active">Dashboard</a></li>
                    <li><a href="pl.php">Patient List</a></li>
                    <li><a href="calendar.php">Calendar</a></li>
                    <li><a href="dg.php">Dental Gallery</a></li>
                    <li><a href="msg.php">Notifications</a></li>
                    <li><a href="apt.php">Appointments</a></li>
                    <li>
                        <div class="scene">
                            <div class="cube">
                                <span class="side top">Logout?</span>
                                <span class="side front">Hello, [DR.Name]</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <!----------end-of-nav---------->

            <!----------Title---------->
            <div class="header-text">
                <section id="reminder-section" class="welcome-section">
                    <h1>Reminders</h1>
                </section>
            </div>
            <!----------end-of-title---------->

            <!----------Cards---------->
            <div class="card-container">
                <div class="card">
                    <h3 class="card-title">11:00AM - 12:00PM</h3>
                    <p class="card__content">Gabe Ollero</p>
                    <p class="card__content-service">Orthodontics</p>
                    <div class="card__date">January 2, 2024</div>

                </div>
                <div class="card">
                    <h3 class="card-title">11:00AM - 12:00PM</h3>
                    <p class="card__content">Echo Dizon</p>
                    <p class="card__content-service">Orthodontics</p>
                    <div class="card__date">January 2, 2024</div>

                </div>
                <div class="card">
                    <h3 class="card-title">11:00AM - 12:00PM</h3>
                    <p class="card__content">Leslie Fuentes</p>
                    <p class="card__content-service">Orthodontics</p>
                    <div class="card__date">January 2, 2024</div>

                </div>
                <div class="card">
                    <h3 class="card-title">11:00AM - 12:00PM</h3>
                    <p class="card__content">Lyka Andrada</p>
                    <p class="card__content-service">Orthodontics</p>
                    <div class="card__date">January 2, 2024</div>
                </div>

            </div>

            <!----------end-of-cards---------->

            <!----------Title---------->
            <div class="header-text-pending">
                <section id="reminder-section" class="welcome-section">
                    <h1>Pending Booking</h1>
                </section>
            </div>
            <!----------end-of-title---------->

            <!----------Pending Booking---------->
            <div class="box">
                <div class="row">
                    <div class="container-table">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Schedule</th>
                                <th>Service</th>
                                <th>More Information</th>
                            </tr>
                            <?php

                            $sql = "SELECT * FROM `patients`";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $status = $row['status'];
                                    $schedule = $row['schedule'];
                                    $service = $row['service'];


                                    echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $status . '</td>
                            <td>' . $schedule . '</td>
                            <td>' . $service . '</td>
                            <td>
                            <button class = "goto"><a href="aptDetail.php?showid=' . $name . '">View Details</a></button>
                            <label class="check">
                            <button class = "goto"><a href="aptDetail.php?showid=' . $name . '">Accept Booking</a></button>
                            </td>
                            </tr>';
                                }
                            }
                            ?>
                    </div>
                </div>
                <!---------end-of-pending booking---------->

            </div>
        </div>
    </div>
    </div>
</body>
</php>