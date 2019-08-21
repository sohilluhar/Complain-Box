<?php
	session_start();
	//verify and login user from database by providing id and password

	
	$name=$_POST["username"];
	$pass=$_POST["password"];
	
	
	$con = new mysqli('localhost', 'root','' ,'complainbox');
		if ($con->connect_error) 
			die("Connection failed: " . $con->connect_error);
	$sqlque="select * from user where username='$name' AND password='$pass'";

	
	$res_u=mysqli_query($con,$sqlque);
	if (mysqli_num_rows($res_u) == 1 ) 
	{
			if (!isset($_SESSION['access_token'])) {
				//Generate a random string for token.
				$token = openssl_random_pseudo_bytes(16);
				$token = bin2hex($token);
				$_SESSION['access_token'] = $token;
			}
		$row=$res_u->fetch_assoc();
		$_SESSION['id'] = $row["id"];
		$_SESSION['name'] =$row["name"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['imgurl'] =$row["Imgurl"];
		$type=$row["usertype"];
		if($type=="Department")	{	
		    header('Location: depthome.php');
			exit();
		}
		else if($type=="admin"){
		 header('Location: admindashboard.php');
			  exit();
		}
		else{
			  header('Location: dashboard.php');
			  exit();
		}
	
	}
	else{
		echo "Wrong id or password";
	}
	
	
?>