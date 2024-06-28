<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_col";
    $con = mysqli_connect($server,$username,$password,$dbname);
    if(! $con){
      ?>

       <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <strong><?php echo("connection faled due to : <br> $con -> error");?></strong> 
       </div>
       
       <script>
         $(".alert").alert();
       </script>

    <?php } ?>

    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
     <strong><?php  //echo "connected succesfully !"; ?></strong> 
   </div>
   
   <script>
     $(".alert").alert();
   </script> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="./login.css" />
  </head>
  <body>
    <div class="container">
      <form method="post">
        <h1>Login</h1>

        <div class="input-box">
          <input type="email" placeholder="Email ID" name="us" required />
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="pass" required />
        </div>

       

        <button type="submit" class="btn" name="log">Login</button>

        <div class="register-link">
          <p>Don't have an account? <a href="registration.php">Register here!</a></p>
          <p><a href="./login admin.php">Admin</a></p>
        </div>
      </form>

      <?php      
          if(isset($_POST['log']))
  {
    $uname = $_POST['us'];
    $pass= $_POST['pass'];
    

    $q_val="SELECT * FROM `register` WHERE `email` = '$uname' AND `confirm` = '$pass'";
    $result_adm = mysqli_query($con,$q_val);
    $co = mysqli_num_rows($result_adm);

        if($co>0){
          
          $_SESSION['us']=$uname;
          header("location:user_landing.php");

       } 
  
    else{
      echo '<script>alert("Login Failed! Check Your Username and password and TRY AGAIN")</script>'; 
    
    }
          
        
    $con-> close();
  }
    ?>

    </div>
  </body>
</html>
