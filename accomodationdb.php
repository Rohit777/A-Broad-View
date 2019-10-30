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
$bhk=$_POST['bhk'];
$description=$_POST['description'];
$rent=$_POST['rent'];
$query="insert into accomodation(email,firstName,lastName,city,state,zip,bhk,description,rent) values('$email','$firstName','$lastName','$city','$state','$zip','$bhk','$description','$rent')";
// $result=mysqli_query($con,$query)or die(mysqli_error($con));
if(!mysqli_query($con,$query))
    {
        die('Error: ' . mysqli_error($con));
    }

    else
    {

        echo '<script language="javascript">';
        echo 'alert("operation sucessfully");';
        echo '</script>';
    }
    header("location:service.php");
    exit();
    }

 ?>
