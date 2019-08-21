<?php
	session_start();
	//dashboard of normal user
		$mysqli = new mysqli("localhost", "root", "", "complainbox");
	$sql = "SELECT name FROM user WHERE email='".$_SESSION["email"]."'";
	$res=$res_u=mysqli_query($mysqli,$sql);
	$row=$res->fetch_assoc();
	$uname=$row["name"];//set name to department name instead of gmail account name
	$_SESSION["name"] =$uname;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="google-signin-client_id" content="1085777605069-2qss1bn1n04qpq0t8ip51o8ulkh1gdte.apps.googleusercontent.com">
</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="index.php">COMPLAIN<strong>BOX</strong></a>
		</div>

		<nav>

			<a href='' class="login_name">
				<?php echo $_SESSION['name'];  ?>
			</a>

			<a href="#">
				<i class="fa fa-home fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-envelope fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-bell fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-info-circle fa-2x"></i>
				
			</a>
			<a href="#">
				<i class="fa fa-cog fa-2x"></i>
			</a>
			<a href="./logout.php">
				<i class="fa fa-sign-out fa-2x"></i>
			</a>
			
		

		</nav>


	</div>


<!-- profile         -->



<div class="profile_left">
 		<img src="<?php  echo $_SESSION['imgurl'];  ?>">
 		<div class="profile_info">
	 		<strong class="my_name"><?php  echo $_SESSION['name'];  ?></strong>
	 		<div class="profile_buttons">
	 			<button onclick="window.location.href = '/ComplainBox/adddepartment.php';" class="profile_complain_button">Add Department</button>
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Complain History</button>
	 		</div>
 			

	 		
	 	</div>


	 	</div>

<!-- *******************-->

<div class="card_list">
<div class="card-columns">
	<?php
	
	$mysqli = new mysqli("localhost", "root", "", "complainbox");


	$sql = "SELECT * FROM department ";
	$result=mysqli_query($mysqli,$sql);
		//display all department
		while($row = mysqli_fetch_array($result)){ 
			$dptname=$row['dname'];
			echo "<form method='GET' action='deptcomplain.php?department=$dptname' id=".$row['id'].">"; 
			echo " <input type='hidden' name='department' value=".$row['dname'].">";
			echo '<div class="card">';
			echo " <img src=".$row['deptimg']." class='card-img-top' alt='...'>";
			echo ' <div class="card-body">';
			echo "  <button  class='card_button' type='Submit' form=".$row['id'].">";
			echo "  ".$row['dname']."";
			echo '   </button>'; 
			echo '  </div>';
			echo ' </div></form>';
		}
?>

 <!-- <div class="card">
    <img src="assets/pictures/welding.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <button class='card_button'>
     	Carpentry
     </button>
     
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/carp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <button class='card_button'>
     	Carpentry
     </button>
      
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/carp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
     <button class='card_button'>
     	Carpentry
     </button>
      
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/carp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <button class='card_button'>
     	Carpentry
     </button>
      
    </div>
  </div>

  <div class="card">
    <img src="assets/pictures/welding.jpg" class="card-img-top" alt="...">
    <div class="card-body">
     <button class='card_button'>
     	Carpentry
     </button>
     
    </div>
  </div>-->
  
  
 
 
  






</div>

</div>

      
</body>
</html>


	
