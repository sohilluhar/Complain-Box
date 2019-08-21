<?php
include("header.php");
if(isset($_GET['department']))
  $department=$_GET['department'];
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

  <form action="" method="POST">
    <textarea size=40 rows="12" cols="50" autofocus spellcheck="true" type="text" name="complain_body" placeholder="Enter your complaint here...." required ></textarea>


    <!--form action="/action_page.php"-->
    <a href="upload.php?department=<?php echo  $department;  ?>" id="upload_image">Upload Image</a>
    <?php
        if(isset($_GET['set'])=='true'){
        echo '<script>
          
            document.getElementById("upload_image").innerHTML = "Successfully Uploaded!";
          
        </script>';
      }
    ?>
    <input type="submit" value="submit" style="width:100px" formtarget="_self" fontcolor="white" border="2" class="complain_submit" name="com_submit" required>
  </form>

<?php

 

  if(isset($_POST['com_submit'])){

  $complain_body = $_POST['complain_body'];

  if($complain_body != ''){
    $body = mysqli_real_escape_string($con,$complain_body);

    if(isset($_GET['id'])){
      $id=$_GET['id'];

    $update = mysqli_query($con,"UPDATE complain SET description='$body',Departmentname='$department' ,complainant='$name' WHERE id=$id");
      }else{    
    $query =  mysqli_query($con,"INSERT INTO complain (description,complainantmail,status,Departmentname,complainant) values('','$body','$email','Pending','$department','$name')");
     }

      $var ='<script type="text/javascript">
        
      $.ajax({              
                url:"complain_submit_ajax.php",
                type:"POST",
                data:"body='.$body.'",
                cache:false,

              
            }).done(function(data){
                console.log(data);
                window.location.href = "dashboard.php";

            }).fail(function() { 
                alert( "Login with Somaiya mail" );
            });
          </script>';

          echo $var;

  }
 
 

}

?>

</div>
<!--/form-->
</pre>



</body>
</html>

