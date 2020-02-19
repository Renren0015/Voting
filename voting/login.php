<!DOCTYPE html>
<html>
<head>
	<title>Saint Jude College</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">
	<link rel="icon" type="image/png" href="sjc.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="#4a8b2c">
	<div id="container">
		<header>
			<img src="sjc.png" width="25%" id="image">
			<span id="txt">Saint Jude College</span>
			<span id="txt1">PHINMA EDUCATION NETWORK</span>
		</header>
		<form action="log.php" method="post">
			<span id="txt2">Sign In</span><br>
			<span id="txt3">Please login your account to continue</span>
			<center>
				<input type="text" name="username" required placeholder="Username">
			</center>
			<center>
				<input type="password" name="password" required placeholder="Password">
			</center>
			<center>
				<button id="login">Login</button>
			</center>
		</form>
		<div id="footer">
			<center>
				<span id="txt4"><a href="register.php">Don't have an account? Create new</a></span>
			</center>
		</div>
	</div>
</body>
</html>