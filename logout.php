<?php
	//require_once "finalconfig.php";
	

	//Unset token and user data from session    
	unset($_SESSION['access_token']);    
	unset($_SESSION['type']);    
	unset($_SESSION['userData']);    

	//Reset OAuth access token    
	//$client = new Google_Client();
	//$client->revokeToken();    
	
	//Destroy entire session    
	session_destroy(); 
	
	echo '
	<script>
 
				window.location.href = "https://accounts.google.com/Logout";
	</script>
 
	';


?>