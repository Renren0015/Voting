<?php
session_start();
if(empty($_POST['username']) || empty($_POST['password'])){
	$error = "Username or Password is Invalid";
	} else {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$conn = mysqli_connect("localhost", "root", "");

	$db = mysqli_select_db($conn, "test");

	$query = mysqli_query($conn, "SELECT * FROM user WHERE password='$password' AND username='$username'");
	 
	$rows = mysqli_num_rows($query);

	if($rows == 1){
		$_SESSION['username']=$username;
		header("Location: index.php"); 
		} else {
		echo "<script type='text/javascript'>alert('Username or password is invalid');</script>";
		header("refresh:1;url=login.php");
		}
	mysqli_close($conn); 
}
 
?>