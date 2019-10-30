<?php
// extract($_POST);
// include("auth.php");
session_start();
include("config.php");
$email=$_POST['email'];
$password=$_POST['password'];

$password=md5($password);


$rs=mysqli_query($con,"select * from users where email='$email' AND password='$password'");
if (mysqli_num_rows($rs)==0)
{
	?> <script type="text/javascript">
    console.log("No user exists");
  </script>
  <?php
  header("location:index.php");
}else{
	$_SESSION['email']=$email;
// header("location:main.php");
$query1="select type from users where email='$email'";
$rs1=mysqli_query($con,$query1)or die("Could Not Perform the Query");
$row = mysqli_fetch_array($rs1);
// echo $row['type'];
if ($row['type']=='student') {
	// code...
	header("location:main.php");
} else {
	// code...
	header("location:hello.php");
}
}
 ?>
