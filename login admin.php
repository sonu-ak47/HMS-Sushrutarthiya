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

    <?php } 
    
    ?>

    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
     <strong><?php  //echo "connected succesfully !"; ?></strong> 
   </div> -->
   
   <script>
     $(".alert").alert();
   </script>

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
        <h1>Admin Login</h1>

        <div class="input-box">
          <input type="text" placeholder="username" name="Aus" required />
        </div>
        <div class="input-box">
          <input type="password" placeholder="password"name="Apass" required />
        </div>

       

       <button type="submit" class="btn" name="adm">Login</button>
      
       <div class="register-link">
          <p><a href="./login_reception.php">Reception</a></p>
        </div>

        <?php      
          if(isset($_POST['adm']))
  {
    $Aname = $_POST['Aus'];
    $Apass= $_POST['Apass'];
    

    $q_val="SELECT * FROM `admin` WHERE Username = '$Aname' AND Password = '$Apass'";
    $result_adm = mysqli_query($con,$q_val);
    $co = mysqli_num_rows($result_adm);

        if($co>0){
          
          $_SESSION['Aus']=$Aname;
          header("location:./pges2/profile.php");

       } 
  
    else{
      echo '<script>alert("Login Failed! Check Your Username and password and TRY AGAIN")</script>'; 
    
    }
    $con-> close();
  }
    ?>

      </form>
    </div>
  </body>
</html>
