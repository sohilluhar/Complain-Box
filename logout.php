<?php
	require_once "finalconfig.php";
	

	//Unset token and user data from session    
	unset($_SESSION['access_token']);    
	unset($_SESSION['userData']);    

	//Reset OAuth access token    
	$client = new Google_Client();
	//$client->revokeToken();    
	
	//Destroy entire session    
	session_destroy(); 
		
	header('Location: index.php');
	exit();
?>