<?php
// extract($_POST);
// include("auth.php");
session_start();
include("config.php");
$email=$_POST['email'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$password=$_POST['password'];
$password=md5($password);
$type=$_POST['type'];
// $password=mysqli_real_escape_string($password);
$rs=mysqli_query($con,"select * from users where email='$email'");
if (mysqli_num_rows($rs)>0)
{
	?> <script type="text/javascript">
    alert("Email already exists");
  </script>
  <?php
  header("location:index.php");
	exit;
}else{
$query="insert into users(firstName,lastName,password,email,type) values('$firstName','$lastName','$password','$email','$type')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
?> <script type="text/javascript">
  // alert("Signup Sucessfull. Kindly LogIn with your email and pasword");
</script>
<?php
$_SESSION['email']=$email;
$query1="select type from users where email='$email'";
$rs1=mysqli_query($con,$query1)or die("Could Not Perform the Query");
$row = mysqli_fetch_array($rs1);
// echo $row['type'];
if ($row['type']=='student') {
	// code...
	header("location:main.php");
} else {
	// code...
	header("location:service.php");
}

}



 ?>
