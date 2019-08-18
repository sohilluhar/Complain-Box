<?php
	session_start();
	if (!isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}
	
	$name=$_POST["username"];
	$pass=$_POST["passwrd1"];
	$mail=$_SESSION['email'];
	
	$con = new mysqli('localhost', 'root','' ,'complainbox');
		if ($con->connect_error) 
			die("Connection failed: " . $con->connect_error);
	$sqlque="select * from users where username='".$_POST["username"]."'";
	$res_u=mysqli_query($con,$sqlque);
	echo mysqli_num_rows($res_u);
	if (mysqli_num_rows($res_u) == 0) 
	{
		echo "updating..";
		$sql="Update users SET username='$name' , password='$pass' WHERE email='$mail';";
	mysqli_query($con,$sql);
	
	
	}
	header('Location: dashboard.php');
	exit();
	
?>