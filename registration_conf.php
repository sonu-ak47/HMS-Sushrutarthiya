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
    <link rel="stylesheet" href="./regi.css" />
    <style>

        #text1{
          height: 345px;
          width: 100%;
          margin-top: 35px;
          margin-bottom: 50px;
          padding: 20px;
          border-radius: 30px;
          border-style: double;
          border-color: chartreuse;
          background-color: rgb(44, 36, 36, 0.3);
        }
      
        .container{
          width:550px;
        }

       

    </style>
    <title>LOGIN</title>
   
  </head>
  <body>
    <div class="container">
  
        <h1>Registration</h1>
       
        <div id="text1">
           <h2>CONGRATULATIONS !<br><br> You Are Successfully Registered on SUSHRUTARTHIYA !</h2><br>
           <h2>A Confirmation Mail has been send to your Registered Email Id, Make sure you login with the same Email id as Provided during Registration.</h2><br>
           <h5>As we do not have 'Forget password' Option yet, So you should Remember your own Password, In case you Forgot password Contact the Hospital  </h5>
        </div>


      <a href="./login.php" id="but1"> <button type="button" class="btn" name="reg">LOGIN</button></a>
    
    </div>
  </body>
</html>