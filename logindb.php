<?php
	session_start();
	if (!isset($_SESSION['access_token'])) {
		//Generate a random string.
		$token = openssl_random_pseudo_bytes(16);
		 
		//Convert the binary data into hexadecimal representation.
		$token = bin2hex($token);
		$_SESSION['access_token'] = $token;
	}
	
	$name=$_POST["username"];
	$pass=$_POST["password"];
	
	
	$con = new mysqli('localhost', 'root','' ,'complainbox');
		if ($con->connect_error) 
			die("Connection failed: " . $con->connect_error);
	$sqlque="select * from users where username='$name' AND password='$pass'";
	$res_u=mysqli_query($con,$sqlque);
	echo mysqli_num_rows($res_u);
	if (mysqli_num_rows($res_u) == 1) 
	{
		$row=$res_u->fetch_assoc();
		$_SESSION['id'] = $row["id"];
		$_SESSION['name'] =$row["name"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['imgurl'] =$row["imgurl"];
		header('Location: dashboard.php');
		exit();
		
	
	}
	else{
		echo "Wrong Password";
	}
	
	
?>