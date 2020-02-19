<!DOCTYPE html>
<html>
<head>
	<title>Saint Jude College</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="icon" type="image/png" href="sjc.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="#4a8b2c">
	<div id="container">
		<header>
			<img src="sjc.png" width="25%" id="image">
			<span id="txt2">Saint Jude College</span>
			<span id="txt3">PHINMA EDUCATION NETWORK</span>
		</header>
		<form action="reg.php" method="post">
			<span id="txt">Register</span><br>
			<span id="txt1">Please register to have an account</span>
			<center>
				<input type="text" name="username" required placeholder="Username">
				<input type="email" name="email" required placeholder="Email address">
				<input type="password" name="password" required placeholder="Password">
				<button id="register">Register</button>
			</center>
		</form>
		<div id="footer">
			<center>
				<span id="login"><a href="login.php">Already have an account? Login now</a></span>
			</center>
		</div>
	</div>
</body>
</html>
