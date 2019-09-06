<?php
	
	//set  password and username for new user (first time user) to database
	
  include("config/config.php");
  
	$name=$_POST["username"];
	$pass=$_POST["passwrd1"];
	$mail=$_SESSION['email'];
	
	$sqlque="select * from user where username='".$_POST["username"]."'";
	$res_u=mysqli_query($con,$sqlque);
	//echo mysqli_num_rows($res_u);
	if (mysqli_num_rows($res_u) == 0) 
	{
	//	echo "updating..";
		$sql="Update user SET username='$name' , password='$pass' WHERE email='$mail';";
		mysqli_query($con,$sql);
	
	header('Location: dashboard.php');
	exit();
	
	}
	else{
		echo'<script>alert("Username already exists.\nChoose different username");
		window.location.href = "userprofile.php";
		
		</script>
		';
		
	}
	
?>