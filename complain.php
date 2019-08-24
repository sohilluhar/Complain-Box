<?php
include("header.php");
if(isset($_GET['department']))
  $department=$_GET['department'];
?>



<?php
/*if(isset($_SESSION['complain_body'])){
  $temp=$_SESSION['complain_body'];
  echo '<h1>'.$temp.'</h1>';
}*/

?>






  <style>

 
    body
    {
        text-align:center;
        font-family:Bodoni;
        background-image: url(assets/img/key1.jpg);
        background-position-y:center;
        background-size:cover;
    }

h1{
    text-align: center;
    text-decoration-line: underline;
    /*text-emphasis:filled;*/
    font-family:'Comic Sans MS';
    color:antiquewhite;
    text-shadow:initial;
    font-size:25px;
    padding:0px 0px 0px 0px;
}

a:link, a:visited{

    text-decoration : none;
    
    }
    
    div.polaroid {
      
      width: 500px;
      height: 550px;
      padding: 0px 0px 0px 0px;
      background-image:linear-gradient(darkviolet,violet) ;
      opacity:0.9;
      box-shadow: 10px 10px 10px #aaaaaa;
      box-shadow:mediumturquoise; 
      margin:auto ;
      text-align:center;
      margin-top: 40px;
      /*box-shadow: 10px 10px 5px grey;*/
      
    }
   

    
    </style>
   
    <pre>
<div class="polaroid">
<h1 style="font-size:25px">Department Name:<?php echo $department;  ?><br>Tell something about<br>your complaint</h1>

  <form action="" enctype="multipart/form-data" method="POST">
    <textarea size=40 rows="12" cols="50" autofocus spellcheck="true" type="text" name="complain_body" placeholder="Enter your complaint here...."required ><?php
      if(isset($_SESSION['complain_body'])){
          echo $_SESSION['complain_body'];
      }
    ?></textarea>

    <label for='upload'>Add Attachments:</label>
        <input id='upload' name="upload" type="file" multiple="multiple" />
        <input id='dptmail' name="dptmail" type="hidden" value="" />

         <input type="submit" value="submit" style="width:100px" formtarget="_self" fontcolor="white" border="2" class="complain_submit" name="com_submit" required>
    
    <!--form action="/action_page.php"-->
    <!--<a href="upload.php?department=<?php //echo  $department;  ?>" id="upload_image">Upload Image</a>-->





    <!--<form action="" enctype="multipart/form-data" method="post">-->

    
        
         <!-- </form>-->
    <!--<p><input type="submit" name="submit" value="Submit"></p>-->

    <?php
        if(isset($_GET['set'])=='true'){
        echo '<script>
          
            document.getElementById("upload_image").innerHTML = "Successfully Uploaded!";
          
        </script>';
      }
    ?>
   
  </form>

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

     unset($_SESSION['complain_body']);
	$mysqli = new mysqli("localhost", "root", "", "complainbox");


	$sql = "SELECT email FROM user where name='$department' ";
	$result=mysqli_query($mysqli,$sql);
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

