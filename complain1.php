<?php
	//display complaint page
	session_start();
	$deptname=$_POST["dptname"];
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

			<a href='#' class="login_name">
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
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Option</button>
	 			<button class="profile_complain_button">Option</button>
	 		</div>
 			

	 		
	 	</div>


	 	</div>
		<center>
			<p>Department Name:</p>
			<?php		echo $deptname		?>
			<p>Tell something about your complaint</p>
			<form action="addcomplain.php" method="POST">
				<textarea size=40 rows="10" cols="40" autofocus spellcheck="true" type="text" name="complaintDetail" placeholder="Enter your complaint here...." required ></textarea>
				</br>
				<input type='hidden' name='dptname' value="<?php echo $deptname?>">
				<!--<input type='file' name='complaintImagetest' value="assets/pictures/welding.jpg">-->
				<input type='hidden' name='complaintImage' value="assets/pictures/welding.jpg">
				</br>
				<input type="checkbox" id="myCheck" name="test" required>I have read my complaint and I am sure to submit it.
				</br>
				</br>
				<input type="submit" value="submit" style="width:100px" fontcolor="white" border="2" required>	
			</form>
		</center>

<!-- *******************-->

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


	
