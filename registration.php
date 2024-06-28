<?php

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
    <link rel="stylesheet" href="./regi.css" />
  </head>
  <body>
    <div class="container">
      <form action="send.php" method="POST">
        <h1>Registration</h1>
        <div class="input-box">
          <input type="text" placeholder="Patient's Name" name="name" required />
          <input type="tel" placeholder="Mobile No" name="phone"  pattern="[6789][0-9]{9}" required />
          <input type="email" placeholder="Email" name="email" required />
          <input type="password" placeholder="Create Password" name="pass" required />
          <input type="password" placeholder="Confirm Password" name="cpass" required />
          <button type="submit" class="btn" name="reg">Submit</button>
        </div>
       </form>
    
    </div>
  </body>
</html>