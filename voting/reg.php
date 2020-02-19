<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($username) || !empty($email) || !empty($password)) {
	$servername = "localhost";
	$name = "root";
	$pass = "";
	$dbname = "test";

	$conn = new mysqli($servername, $name, $pass, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} else {
		$SELECT = "SELECT email From user Where email = ? Limit 1";
		$INSERT = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum==0) {
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->execute();
			header("refresh:1;url=login.php");
		} else {
			echo "<script>alert('Email has already taken');</script>";
			header("refresh:2;url=register.php");
		} 
		$stmt->close();
		$conn->close();
	}
} 
?>
