<?php
	session_start();
	//add complaint  to database
	
	$name=$_POST["dptname"];
	$details=$_POST["complaintDetail"];
	$cimg=$_POST["complaintImage"];
	$cname=$_SESSION['name'];
	$cmail=$_SESSION['email'];
	
	


	$con = new mysqli('localhost', 'root','' ,'complainbox');
	if ($con->connect_error) 
		die("Connection failed: " . $con->connect_error);

	echo "updating.. ";
	$sql="insert into complain (description,complainimg,Departmentname,status,complainant,complainantmail) values('".$details."','".$cimg."','".$name."','Pending','".$cname."','".$cmail."')";
	echo $sql;
	mysqli_query($con,$sql);
	//SEND MAIL
	//$sqlque="select email from user where username='$name'";
	//$res_u=mysqli_query($con,$sqlque);
	//$row=$res_u->fetch_assoc();
	
	//$dmail=$row["email"];
	//echo $dmail;
	header('Location: dashboard.php');
	exit();
	
?>