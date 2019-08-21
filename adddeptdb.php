<?php
	session_start();
	//set  password and username for new user (first time user) to database
	
	$name=$_POST["departmentname"];
	$pass=$_POST["passwrd1"];
	$hmail=$_POST["headmail"];
	$dimg=$_POST["deptimg"];

	
	$con = new mysqli('localhost', 'root','' ,'complainbox');
		if ($con->connect_error) 
			die("Connection failed: " . $con->connect_error);
	$sqlque="select * from user where username='".$name."'";
	$res_u=mysqli_query($con,$sqlque);
	echo mysqli_num_rows($res_u);
	if (mysqli_num_rows($res_u) == 0) 
	{
		echo "updating..";
		$sql="insert into department (dname,deptimg) values('$name','$dimg')";
		mysqli_query($con,$sql);
		
		$sql="insert into user (name,username,email,password,usertype) values('$name','$name','$hmail','$pass','Department')";
		mysqli_query($con,$sql);
	
	
	}
	header('Location: dashboard.php');
	exit();
	
?>