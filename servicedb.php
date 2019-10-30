<?php
session_start();
include 'config.php';
if(isset($_POST['submit'])){
$email =$_SESSION['email'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$jobTitle=$_POST['jobTitle'];
$jobDesc=$_POST['jobDesc'];
$stipend=$_POST['stipend'];
$query="insert into jobs(email,firstName,lastName,city,state,zip,jobTitle,jobDesc,stipend) values('$email','$firstName','$lastName','$city','$state','$zip','$jobTitle','$jobDesc','$stipend')";
// $result=mysqli_query($con,$query)or die(mysqli_error($con));
if(!mysqli_query($con,$query))
    {
        die('Error: ' . mysqli_error($con));
    }

    else
    {

        echo '<script language="javascript">';
        echo 'alert("Job updates sucessfully");';
        echo '</script>';
    }
    header("location:service.php");
    exit();
    }

 ?>
