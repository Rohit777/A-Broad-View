<?php
session_start();
include 'config.php';
$query="Select * From jobs";
$result = mysqli_query($con, $query)or die(mysqli_error($con));

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " First Name: " . $row["firstName"]. " Last Name: " . $row["lastName"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
    <script src="https://kit.fontawesome.com/727eec7880.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="container-fluid">
        <div class="navigationBar row">
            <div class="col-2" style="margin-right: 80px; margin-left: 20px;">
                <div class="dropdown">
                    <a class="btn border dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pradyumna Agarwal
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> My Account</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-heart"></i> Favorites</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-share-alt"></i> Referrals</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </div>
            <div class="bar col-9">
                <div class="border rounded-lg border-dark">
                    <ul class="nav nav-pills nav-fill">
                    <li class="items nav-item">
                        <a class="nav-link active" href="#about"><i class="fas fa-map-marker-alt"></i> Region</a>
                    </li>
                    <li class="items nav-item">
                        <a class="nav-link" href="#services"><i class="far fa-file"></i> Document</a>
                    </li>
                    <li class="items nav-item">
                        <a class="nav-link" href="accomodation.php"><i class="fas fa-hotel"></i> Accomodation</a>
                    </li>
                    <li class="items nav-item">
                        <a class="nav-link" href="jobs.php"><i class="fas fa-user-tie"></i> Job</a>
                    </li>
                    <li class="items nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-ambulance"></i> Emergency</a>
                    </li>
                    <li class="items nav-item">
                            <a class="nav-link" href="#"><i class="far fa-question-circle"></i> Help</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content row">
            <div class="col-3">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="side-items nav-item">
                            <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="side-items nav-item">
                            <a class="nav-link" href="#"><i class="far fa-envelope"></i> Messeges</a>
                        </li>
                        <li class="side-items nav-item">
                            <a class="nav-link" href="#"><i class="far fa-bell"></i> Notifications</a>
                        </li>
                        <li class="side-items nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-users"></i> Networks</a>
                        </li>
                        <li class="side-items nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
                        </li>
                        <li class="side-items nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-wrench"></i> Customer Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <p class="medium-text">All jobs</p>
                <div class="toolbar"><a class="tool" href="#"><i class="fas fa-sort-amount-down fa-3x"></i></a>
                                    <a class="tool" href="#"><i class="fas fa-filter fa-3x"></i></a>
                                    <a class="tool" href="#"><i class="fas fa-star fa-3x"></i></a>
                                </div>

                <div class="accomodation-listing">
                  <?php
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="list">';
                              echo '<div class="row">';
                              echo '<div class="col-11"><p style="font-weight:bold;">Name of Service Provider: '.$row["firstName"].' '.$row["lastName"].'<span style="font-weight:bold;float:right;margin-right:25%;">Stipend: '.$row["stipend"].'$</span></p></div><hr>';
                              echo '<div class="col-1"><a class="tool" href="#"><i class="fas fa-star"></i></a></div>';
                              echo '</div>';
                              echo '<div class="description">';
                              echo '<h4>Job Title: '.$row["jobTitle"].'</h4>';
                              echo '<p>Job Description: '.$row["jobDesc"].'</p>';
                              echo '</div></div>';
                          // echo "id: " . $row["id"]. " First Name: " . $row["firstName"]. " Last Name: " . $row["lastName"]. "<br>";
                      }
                  } else {
                      echo "0 results";
                  }
                   ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
