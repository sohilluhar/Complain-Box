<?php
	//session_start();

  include("config/config.php");
  if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $img   = $_SESSION['imgurl'];
  }
  else{
	header("Location: index.php");
	exit();
  }
	//dashboard of normal user
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Dashboard | Complain Box </title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a class="simple-text logo-normal">
          Complain Box
        </a>
      </div>
	  
	  
      <div class="sidebar-wrapper">
        <ul class="nav">

		<li class="nav-item">
			<br/>
			<div class="card-profile">
                <div class="card-avatar">
                    <img class="img" src="<?php  echo $_SESSION['imgurl'];  ?>" />
                </div>
					<div class="card-body">
						<h5 class="card-title">	<?php echo $_SESSION['name'];  ?></h5>
					</div>
		</li>
		
		
         <li class="nav-item active ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">content_paste</i>
              <p>My Complains</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./logout.php">
              <i class="material-icons">arrow_back</i>
              <p>Logout</p>
            </a>
          </li>
     
        </ul>
      </div>
    </div>
    <div class="main-panel" data-background-color="white">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"><b>Dashboard</b></a>
          </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content" >
        <div class="container-fluid">
          <div class="row">
			
				<?php
	
	$con = new mysqli("localhost", "root", "", "complainbox");


	$sql = "SELECT * FROM department ";
	$result=mysqli_query($con,$sql);
		//display all department
		while($row = mysqli_fetch_array($result)){ 
				$dptname=$row['dname'];
		
		  echo '     <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header ">';
		
			echo "<form method='POST' action='' id=".$row['id'].">"; 
			echo " <input type='hidden' name='department' value=".$row['dname'].">";		
		echo '		</br>
                  <h3 class="card-title text-center" name="'.$row["dname"].'">'.$row["dname"].'</h3>									  
				</br>
				
				<a href="#complain" class="btn btn-primary btn-block" name="'.$row["dname"].'" onClick="scrollToBottom(event)">Click to Complain</a>
				</form>
				</div>
              </div>
            </div>';
		}
?>

             </div>
	 
	 <br/>
	 <br/>
	 <br/>
	 <div class="row" style="display: none" id="complain">	 
            	
			<div class="col-md-8 offset-md-2">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" id="complain_card"></h4>
                  <p class="card-category">Complain Form</p>
                </div>
                <div class="card-body">
                  <form action="" enctype="multipart/form-data" method="POST">

                     <div class="form-group">
                      
						
						
                            <label class="bmd-label-floating"> Enter your complain here</label>
						 <textarea class="form-control" name="complain_body" rows="10" required><?php
                          if(isset($_SESSION['complain_body'])){
                              echo $_SESSION['complain_body'];
                          }
                        ?></textarea>
						
                      </div>

                       
                          <div class="form-group">
						  <label class="bmd-label-floating">Supporting Doc</label>
						 
                            <label for="upload"
                                style="margin: 0px 70px 10px 228px;
                                    border: 3px solid #9c27b0;
                                    border-radius: 13px;
                                    padding: 5px;
                                    background-color: #9c27b0;
                                    color: white;
                                    cursor: pointer;">Upload File</label>
                                    <input id='upload' name="upload" type="file" >
                                    <div id="file-upload-filename" style=" margin: 0px 70px 10px 213px;"></div>
                             <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1">-->
                          </div>
                       
                          <script>
                            input[type="file"] { 
                                z-index: -1;
                                position: absolute;
                                opacity: 0;
                              }

                              input:focus + label {
                                outline: 2px solid;
                              }
                          </script>



                          <script type="text/javascript">
                            

                              var input = document.getElementById( 'upload' );
                            var infoArea = document.getElementById( 'file-upload-filename' );

                            input.addEventListener( 'change', showFileName );

                            function showFileName( event ) {
                              
                              // the change event gives us the input it occurred in 
                              var input = event.srcElement;
                              
                              // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                              var fileName = input.files[0].name;
                              
                              // use fileName however fits your app best, i.e. add it into a div
                              infoArea.textContent = 'File name: ' + fileName;
                            }



                          </script>
                        




                    	<input type="submit" name="com_submit" class="btn btn-primary btn-block" value="Submit Complain">
						
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
      		
			
          </div>
		
		
      </div>
    
    </div>

<?php
include("footer.php");
  if(isset($_COOKIE['dname']))
    $department= $_COOKIE['dname'];
   ?>

  










  </div>
  
  
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
  
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  
  
 
  
  <script>

    function scrollToBottom(event){

       var y = document.getElementById("complain_card");
       
       var dname=event.target.name;
       y.innerHTML  = dname;
	   

      window.scrollTo(0,document.querySelector("#complain").scrollHeight);
      //var dname=event.target.name;
      document.cookie = "dname=" + dname; 
	  var z = document.getElementById("complain");
	   z.style.display = "block";
	   
	   
    }

  
   </script>








</body>

<?php
 if(isset($_POST['com_submit'])){



  $complain_body = $_POST['complain_body'];

  if($complain_body != ''){
    $body = mysqli_real_escape_string($con,$complain_body);

    $_SESSION['complain_body']=$body;



      //  if(isset($_POST['submit'])){
   // if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
       // for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path

            $uploadOk=1;
            $tmpFilePath = $_FILES['upload']['tmp_name'];//[$i];
            $file_path='';

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
             if ($_FILES["upload"]["size"] < 25000000) {
                //save the filename
                $shortname = $_FILES['upload']['name'];

                //save the url and the file
                $filePath = "assets/img/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'];

                $imageFileType = strtolower(pathinfo($filePath,PATHINFO_EXTENSION));



                if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" || $imageFileType == "pdf" || $imageFileType == "doc" || $imageFileType == "docx" ) {

                //echo $imageFileType;
                //Upload the file into the temp dir
              //  if(move_uploaded_file($tmpFilePath, $filePath)) {
                    move_uploaded_file($tmpFilePath, $filePath);
                    //$files[] = $shortname;
                    $file_path=$filePath;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file
                  }else{
                    $uploadOk=0;
                    $msg='<script>alert("Sorry, File format is not supported.")</script>';
                    echo $msg;
                  //  header("Location: complain.php?department=$department");
                  }
                //}
              }else{
                $uploadOk=0;
                $msg='<script>alert("Sorry, your file should not be more than 25MB.")</script>';
                echo $msg;
               // header("Location: complain.php?department=$department");                               
           }



            }
       // }
    //}
             /* echo $tmpFilePath;
              echo $shortname;*/

    //show success message
   // echo "<h1>Uploaded:</h1>";    
    /*if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }*/
//}

   /* if(isset($_GET['id'])){
      $id=$_GET['id'];

    $update = mysqli_query($con,"UPDATE complain SET description='$body',Departmentname='$department' ,complainant='$name' WHERE id=$id");
      }else{    
    $query =  mysqli_query($con,"INSERT INTO complain (description,complainantmail,status,Departmentname,complainant) values('','$body','$email','Pending','$department','$name')");
     }*/


     // $query =  mysqli_query($con,"INSERT INTO complain (description,complainantmail,status,Departmentname,complainant); 


     if($uploadOk==1){
     $query = mysqli_query($con,"INSERT into complain(description,complainimg,Departmentname,status,complainant,complainantmail) values('$body','$file_path','$department','pending','$name','$email')");
		
		echo '<script>	swal("Your complain successfully submitted"); </script>';
     unset($_SESSION['complain_body']);
	 
	 	$con = new mysqli("localhost", "root", "", "complainbox");


	$sql = "SELECT email FROM user where name='$department' ";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$dptmail=$row['email'];

      $var ='<script type="text/javascript">
        
      $.ajax({              
                url:"complain_submit_ajax.php",
                type:"POST",
                data:"body='.$body.'&attachment='.$file_path.'&deptmail='.$dptmail.'",
                cache:false,

              
            }).done(function(data){
                console.log(data);
                window.location.href = "dashboard.php";

            }).fail(function() { 
                alert( "Login with Somaiya mail" );
            });
			
			
          </script>';

         echo $var;
    }else{
      $msg='<script>alert("Sorry, Something went wrong.")</script>';
      echo $msg;
      //header("Location: complain.php?department=$department");
        
    }
  }
 
 

}

?>

</div>
<!--/form-->
</pre>



</body>
</html>

</html>
