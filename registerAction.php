<?php
include("conn.php");

$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
$nric = mysqli_real_escape_string($con, $_POST['nric']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$sql="INSERT INTO users('nric', 'firstName', 'lastName', 'email', 'password') VALUES('$nric', '$firstName', '$lastName', '$email', '$password')";

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

$newURL = 'index.php';
header('Location: '.$newURL);
?>
?>