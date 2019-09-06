<?php

ob_start();        // output buffer start 
session_start();  //session start

date_default_timezone_set('Asia/Kolkata');

$con=mysqli_connect("localhost","root","","complainbox");

if(mysqli_connect_errno()){
	echo "failed to connect" . mysqli_connect_errno;
}

	

	

	/*$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
	$result = $mysqli->query($sql);


	if(!empty($result->fetch_assoc())){
		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
		$sql2 = "UPDATE users SET imgurl='".$_POST["imgurl"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$sql2 = "INSERT INTO users (name, email, google_id,imgurl) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."', '".$_POST["imgurl"]."')";
	}


	$mysqli->query($sql2);


	echo "Updated Successful";*/




?>