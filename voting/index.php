<!DOCTYPE html>
<html>
<head>
	<title>Saint Jude College</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" type="image/png" href="sjc.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="background">
	<div>
		<div id="header">
			<a href="index.php"><img src="phinma.webp" width="374px" id="img" href="index.php"></a>
				<ul align="right">
					<li style="font-weight: bold;"><?php 
				 	session_start();
					if(isset($_SESSION['username'])) {
						echo $_SESSION['username'];
					}
					?></li>
					<a href="vote.php"><li class="line">Vote now</li></a>
					<a href="logout.php"><li class="line">Logout</li></a>
				</ul>
			<div id="header1"></div>
		</div>
		<center>
			<h1 id="txt">Online Voting</h1>
			<h3 id="txt1">The BS Information Technology program provides students online voting <br>needed in relevant emerging high-growth areas in the industry. Through our program, we train <br>students with the development and management of contemporary areas such as cloud computing and <br>applications, analytics and data science, artificial intelligence, and the Internet of <br>Things. We use a curriculum based on inputs and guidance from practicing industry experts.</h3>
		</center>
		<center>
			<img src="cite.webp" id="img1">
		</center>
		<div id="footer">
			<center style="margin-top: 24px;">
				<span>
					&copy;Copyright 
					<script type="text/javascript">
					document.write(new Date().getFullYear());
					</script> by BSIT-1C 
				</span>
			</center>
		</div>
	</div>
</body>
</html>