<?php
	session_start();
	//set  password and username for new user (first time user) to database
	
	$name=$_POST["username"];
	$pass=$_POST["passwrd1"];
	$mail=$_SESSION['email'];
	
	$con = new mysqli('localhost', 'root','' ,'complainbox');
		if ($con->connect_error) 
			die("Connection failed: " . $con->connect_error);
	$sqlque="select * from user where username='".$_POST["username"]."'";
	$res_u=mysqli_query($con,$sqlque);
	echo mysqli_num_rows($res_u);
	if (mysqli_num_rows($res_u) == 0) 
	{
		echo "updating..";
		$sql="Update user SET username='$name' , password='$pass' WHERE email='$mail';";
		mysqli_query($con,$sql);
	
	
	}
	header('Location: dashboard.php');
	exit();
	
?>