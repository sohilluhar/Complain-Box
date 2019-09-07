<?php


    include("config/config.php");
	
	$deptn=$_GET['dept'].','.;
	$id=$_GET['id'];
	
	 $query= mysqli_query($con,"UPDATE complain SET Departmentname=concat( '$deptn',Departmentname)  WHERE id='$id'");
	 $result1=mysqli_query($con,$query);
	 
	 
	header("Location: admindashboard.php");
	exit();
					
?>