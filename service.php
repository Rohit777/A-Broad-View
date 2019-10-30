<?php
session_start();
include 'config.php' ?>
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
            <div class="col-3" style="margin-right: 80px; margin-left: 20px;">
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
                <div class="row">
                    <div class="col-6">
                        <div class="heading">
                            <p>Job Posting</p>
                        </div>
                        <form class="needs-validation" method="post" action="servicedb.php">
                            <div class="form-row">
                                <div class="col-md-10 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" name="firstName" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" name="lastName" class="form-control" id="validationCustom02" placeholder="Last name" value="otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" name="city" placeholder="City" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="validationCustom04" name="state" placeholder="State" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip</label>
                                    <input type="number" class="form-control" id="validationCustom05" name="zip" placeholder="Zip" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <label for="jobTitle">Job</label>
                                    <input type="text" name="jobTitle" class="form-control" id="validationCustom06" placeholder="Job" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <label for="jobDesc">Description</label>
                                    <textarea name="jobDesc"  type="number" class="form-control" id="validationCustom07" placeholder="Description" required></textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <label for="stipend">Stipend</label>
                                    <input type="number" class="form-control" id="validationCustom08" name="stipend" placeholder="Stipend" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                      </label>
                                      <div class="invalid-feedback">
                                        You must agree before submitting.
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                        </form>
                    </div>
                    <div class="col-6">
                            <div class="heading">
                                <p>Accomodation Posting</p>
                            </div>
                            <form class="needs-validation" method="post" action="Accomodationdb.php">
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="firstName">First name</label>
                                        <input type="text" name="firstName" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="lastName"class="form-control" id="validationCustom02" placeholder="Last name" value="otto" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" id="validationCustom03" placeholder="City" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" name="state"id="validationCustom04" placeholder="State" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="number" class="form-control" id="validationCustom05" name="zip" placeholder="Zip" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="bhk">BHK</label>
                                        <select name="bhk" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="description">Description</label>
                                        <textarea name="description" type="number" class="form-control" id="validationCustom07" placeholder="Description" required></textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="rent">Rent</label>
                                        <input type="number" class="form-control" name="rent"id="validationCustom08" placeholder="Stipend" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                          <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                          </label>
                                          <div class="invalid-feedback">
                                            You must agree before submitting.
                                          </div>
                                        </div>
                                      </div>
                                      <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                            </form>
                        </div>
                </div>
            </div>
    </div>
    </div>
</body>
<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
