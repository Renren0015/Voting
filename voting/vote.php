<!DOCTYPE html>
<html>
<head>
	<title>Saint Jude College</title>
	<link rel="stylesheet" type="text/css" href="css/vote.css">
	<link rel="icon" type="image/png" href="sjc.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
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
					<a href="vote.php"><li class="line" style="color: #d79a2b;">Vote now</li></a>
					<a href="logout.php"><li class="line">Logout</li></a>
				</ul>
			<div id="header1"></div>
		</div>
		<div>
			<center>
				<form action="voting.php" method="POST" style="margin-top: 180px;">
					<span class="txt" style="color: #d79a2b;"><b>Vote wisely please!</b></span><br><br>
					<span class="txt">For President</span><br><br>
					<button name="kenneth" class="box">Kenneth Villacastin</button> 
					<button name="prince" class="box">Prince Domingo</button> 
					<button name="lauren" class="box">Lauren Tejada</button><br><br>
					<span class="txt">For Vice President</span><br><br>
					<button name="misanes" class="box">Kenneth Misanes</button>
					<button name="roane" class="box">Roane Aguas</button>
					<button name="baroto" class="box">Julius Baroto</button><br><br>
					<span class="txt">For Secretary</span><br><br>
					<button name="konsi" class="box">Jonathan Konsi Berona</button>
					<button name="mark" class="box">Mark Gaspan</button>
					<button name="mendoza" class="box">Connie Mendoza</button>
				</form>
			</center>
		</div>
		<div id="footer">
			<center style="margin-top: 24px; color: white;">
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