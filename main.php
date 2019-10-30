<?php
//include auth.php file on all secure pages
session_start();
include("auth.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                        <a class="nav-link" href="#"><i class="fas fa-hotel"></i> Accomodation</a>
                    </li>
                    <li class="items nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-tie"></i> Job</a>
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
                            <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
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
                <div class="username">
                    <h1>Hi Pradyumna!</h1>
                </div>
                <div class="accomodation">
                    <div class="pre-def">
                        <p>Looking for accomodation?</p>
                    </div>
                    <div class="result">
                        <p>We have found 45 new accomodation at amazing prices near you. cheack them out before someonce else grab the deal.</p>
                    </div>
                </div>
                <div class="job">
                    <div class="pre-def">
                        <p>Looking for jobs?</p>
                    </div>
                    <div class="result">
                        <p>We have found 72 new job opening near you. Cheack them out now!</p>
                    </div>
                </div>
                <div class="Document">
                    <div class="pre-def">
                        <p>Want to get document verified or renewed?</p>
                    </div>
                    <div class="result">
                        <p>We have found three new offices near you. cheack them out for hassle-free document verfication and renewals</p>
                    </div>
                </div>
                <div class="medic">
                    <div class="pre-def">
                        <p>Got a medical emergancy?</p>
                    </div>
                    <div class="result">
                        <p>We have found 9 new hospital with 83 specialised doctors new you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
