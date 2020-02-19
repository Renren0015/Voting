<?php 

$con = mysqli_connect('localhost','root','','test');

if(isset($_POST['kenneth'])){
	$vote_name = "update vote set kenneth=kenneth+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['lauren'])){
	$vote_name = "update vote set lauren=lauren+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['misanes'])){
	$vote_name = "update vote set misanes=misanes+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['baroto'])){
	$vote_name = "update vote set baroto=baroto+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['konsi'])){
	$vote_name = "update vote set konsi=konsi+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['mark'])){
	$vote_name = "update vote set mark=mark+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['prince'])){
	$vote_name = "update vote set prince=prince+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['mendoza'])){
	$vote_name = "update vote set mendoza=mendoza+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
if(isset($_POST['roane'])){
	$vote_name = "update vote set roane=roane+1";
	$run_name = mysqli_query($con, $vote_name);
	echo "<script>alert('Thanks for voting');</script>";
	header("refresh:1;url=vote.php");
}
?>