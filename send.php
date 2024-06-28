
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


<?php 
    $Name = $_POST['name'];
    $Phone= $_POST['phone'];
    $Email = $_POST['email'];
    $Pass = $_POST['pass'];
    $Cpass= $_POST['cpass'];

    

    $q3= "INSERT INTO `register`(`name`, `phone`, `email`, `createpass`, `confirm`, `created_at`) VALUES ('$Name','$Phone','$Email','$Pass','$Cpass' , current_timestamp());";

    if($con -> query($q3)==true){
    
      
      echo $var_value;
      header("location:send.php");

    } 
  
    else{
         echo"Error: $q1 <br> $con -> error";
    }
  
        
       
          
        
    $con-> close();
  
    ?>

 <?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'Phpmail/src/Exception.php';
require 'Phpmail/src/PHPMailer.php';
require 'Phpmail/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
// if (isset($_POST["send"])) {

  
// }
$mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'sushrutarthiya@gmail.com';   //SMTP write your email
    $mail->Password   = 'bpbglrmedbvpqben';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('sushrutarthiya@gmail.com'); // Sender Email and name
    $mail->addAddress($Email);     //Add a recipient email  
    $mail->addReplyTo('sushrutarthiya@gmail.com'); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = "Registration Confirmation";   // email subject headings
    $mail->Body    = "CONGRATULATIONS !! 
    Your Registration is Successful ,This is a Confirmation Mail send from our side , You can now login with the Email Id and Password set during Your registration 
    Make sure you login with the same Email Id as used during Registration
    As we do not have any 'Forget Password ?' Option Yet, Make sure You Remember your password, In case you can't remember your password, Please contact to the Hospital."; //email message

    // Success sent message alert
    $mail->send();
    echo
    " 
    
     alert('Registered successfully! A mail will be sent to your registered mail id for Registration');
    
   
    ";
     header("location:registration_conf.php");
   
    


   