<?php
	session_start();
	//add complaint  to database
	
	$name=$_POST["dptname"];
	$details=$_POST["complaintDetail"];

	$con = new mysqli('localhost', 'root','' ,'complainbox');
	if ($con->connect_error) 
		die("Connection failed: " . $con->connect_error);

	echo "updating.. ";
	$sql="insert into complain (description,Departmentname,status) values('".$details."','".$name."','Pending');";
	mysqli_query($con,$sql);
	
	//SEND MAIL
	$sqlque="select email from user where username='$name'";
	$res_u=mysqli_query($con,$sqlque);
	$row=$res_u->fetch_assoc();
	
	$dmail=$row["email"];

	header('Location: dashboard.php');
	exit();
	
?>