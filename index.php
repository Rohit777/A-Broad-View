<?php
// include 'auth.php';
// session_start();
// if (isset($_SESSION["email"])) {
//   // code...
//   header("Location: main.php");
//   exit();
// }
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/727eec7880.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/form.css">
</head>
<body>

    <div class="container-fluid">
        <div class="navigationBar row">
            <div class="bar col-9">
                <div class="border rounded-lg border-dark">
                    <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-comment"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services"><i class="fas fa-project-diagram"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users"></i> Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-at"></i> Contact Us</a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-2" style="margin-left: 100px;">
                <div class="border rounded-lg border-dark">
                    <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <!-- <a style="width:50%;float:left" class="nav-link active" href="#"><i class="fas fa-sign-in-alt"></i> login </a> -->
                        <!-- <a class="nav-link active" href="#"><i class="fas fa-user-plus"></i> SignUp </a> -->
                        <button  style="width:50%;float:left;" class="nav-link active" onclick="document.getElementById('modal-wrapper-login').style.display='block'"><i class="fas fa-sign-in-alt"></i> login</button>
                        <button  style="width:50%;float:right;" class="nav-link active" onclick="document.getElementById('modal-wrapper-signup').style.display='block'"><i class="fas fa-user-plus"></i> SignUp</button>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="home">
          <div class="modal" id="modal-wrapper-login">
            <form class="modal-content annimate" action="login.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper-login').style.display='none'" class="close" title="Close Login form">&times;</span>
                <img src="images/job.png" class="avatar" alt="avatar">
                <h1 style="text-align:center;">LogIn</h1>
              </div>
              <div class="container">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="*********" required>
                <button id="btn" type="submit" name="submit">LogIn</button>
              </div>
            </form>
          </div>
          <div class="modal" id="modal-wrapper-signup">
            <form class="modal-content annimate" action="signup.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper-signup').style.display='none'" class="close" title="Close SignUp form">&times;</span>
                <img src="images/job.png" class="avatar" alt="avatar">
                <h1 style="text-align:center;">SignUp</h1>
              </div>
              <div class="container">
                <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="lastName" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="*********" required>
                <label id="abc123">Register as: </label>
                <label for="student">Student</label>
                <input type="radio" name="type" id="radio-btn" value="student" required>
                <label for="service">Serice Provider</label>
                <input type="radio" name="type" id="radio-btn" value="service" required>
                <button id="btn" type="submit" name="submit">SignUp</button>
              </div>
            </form>
          </div>
            <img src="images/large.png" alt="logo" width="50%" >
            <img src="images/home.jpg" alt="home image" width="100%" height="65%">
        </div>
        <div class="row" id="about" >
            <div class="col-6">
                <div  class="about">
                    <h1>A Broad View</h1>
                    <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Sed in malesuada orci. Mauris elementum pulvinar felis quis consectetur. Phasellus vulputate hendrerit sagittis. Vestibulum volutpat auctor dui eget congue. Morbi at ligula et nisi ultrices molestie. Nam ac tellus non quam imperdiet efficitur quis eget nisl. Nunc eget aliquam tellus. Nam at porttitor metus, eget rutrum justo. Nullam at ligula nulla. Etiam tellus elit, tristique et ante eu, varius ultrices nibh. Curabitur diam dui, luctus at diam ut, imperdiet aliquet ipsum. Nulla a tempor elit. Donec eget erat non purus blandit interdum. Aenean mauris dolor, molestie id dignissim et, aliquet eu dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie pellentesque sem, vel congue purus blandit vitae.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="about">
                    <img src="images/about.jpg" alt="about image" height="400px" width="700px" >
                </div>
            </div>
        </div>
        <div id="services" class="container">
            <h1>Services </h1>
            <div class="row">
                <div class="col-lg-4">
                    <img src="images/accomodation.png" width="200px" height="200px">
                    <h2>Accomodations</h2>
                </div>
                <div class="col-lg-4" style="margin-top: 35px;">
                    <img src="images/job.png" width="200px" height="180px">
                    <h2>Jobs</h2>
                </div>
                <div class="col-lg-4" style="margin-top: 35px;">
                    <img src="images/emergency.jpg" width="200px" height="180px">
                    <h2>Emergency</h2>
                </div>
            </div>
        </div>
    </div>
</body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
