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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Admission Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="section__container nav__container">
        <div class="nav__logo">SUSHRU<span>TARTHIYA</span></div>
        <img src="logo.png" alt="Logo" class="nav__logo-img">
    </nav>
    <div class="section__container header__container">
        <div class="header__content">
            <h1>Patient Admission Form</h1>
            <p>Welcome to Sushrutarhtiya. Please provide the following details to complete your admission process.</p>
        </div>
    </div>
</header>

<div class="section__container form-container">
    <form class="admission-form" method="POST">
        <h3>Personal Information</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" placeholder="Enter your last name" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" min="0" max="120" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Gender</label>

                <select id="blood-group" name="gender" required>
                    <option value="" selected>Select Gender</option>
                    <option value="Mail">Male</option>
                    <option value="Femail">Female</option>
                    <option value="Other">Other</option>
                   
                </select>

                <!-- <div class="custom-radio-group">
                    <div class="custom-radio">
                        <input type="radio" id="male" name="gender" value="male" checked="checked" >
                        <label for="male" class="radio-label">
                            <span class="radio-circle"></span>
                            Male
                        </label>
                    </div>
                    <div class="custom-radio">
                        <input type="radio" id="female" name="gender" value="female" >
                        <label for="female" class="radio-label">
                            <span class="radio-circle"></span>
                            Female
                        </label>
                    </div>
                    <div class="custom-radio">
                        <input type="radio" id="other" name="gender" value="other" >
                        <label for="other" class="radio-label">
                            <span class="radio-circle"></span>
                            Other
                        </label>
                    </div>
                </div> -->
            </div>
        </div>

        <h3>Contact Information</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email_address" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone_number" placeholder="Enter your phone number">
            </div>
        </div>

        <h3>Address</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="street-address">Street Address</label>
                <input type="text" id="street-address" name="street_address" placeholder="Enter your street address">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter your city">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter your state">
            </div>
            <div class="form-group">
                <label for="pin">PIN Code</label>
                <input type="text" id="pin" name="pin_code" placeholder="Enter your PIN code">
            </div>
        </div>

        <h3>Medical Information</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="blood-group">Blood Group</label>
                <select id="blood-group" name="blood_group" required>
                    <option value="" selected>Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group">
                <label for="disease">Disease Name and Severity</label>
                <input type="text" id="disease" name="disease" placeholder="Enter disease name and severity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="special-note">Special Note</label>
                <textarea id="special-note" name="comments" maxlength="500" placeholder="Enter any special notes"></textarea>
            </div>
        </div>

        <h3>Admission Details</h3>
        <div class="form-row admission-details">
            <div class="form-group">
                <label for="admission-date">Admission Date/Time</label>
                <input type="datetime-local" id="admission-date" name="admission_time" required>
            </div>
            <div class="form-group">
                <label for="ward">Ward Number</label>
                <input type="text" id="ward" name="ward_no" placeholder="Enter ward number">
            </div>
        </div>
        <div class="form-row admission-details">
            <div class="form-group">
                <label>Room Choice</label>

                <select id="blood-group" name="choice" required>
                    <option value="" selected>Select Bed type</option>
                    <option value="Cabin">cabin</option>
                    <option value="Normal bed">Normal Bed</option>
                   
                </select>

                <!-- <div class="custom-radio-group">
                    <div class="custom-radio">
                        <input type="radio" id="cabin" name="choice" value="cabin" >
                        <label for="cabin">
                            <span class="radio-circle"></span>
                            Cabin
                        </label>
                    </div>
                    <div class="custom-radio">
                        <input type="radio" id="bed" name="choice" value="bed" >
                        <label for="bed">
                            <span class="radio-circle"></span>
                            Bed
                        </label>
                    </div>
                </div> -->
            </div>
            <div class="form-group">
                <label for="amount"><b>Amount Deposited</b></label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount deposited" required>
            </div>
        </div>

        <!-- <div class="form-row">
            <div class="form-group form-actions"> -->
                 <button type="submit" name="sub12" class="btn">Submit</button>
           <!-- </div>
        </div> -->

        <?php      
          if(isset($_POST['sub12']))
  {
    $Fname = $_POST['first_name'];
    $Lname= $_POST['last_name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gen = $_POST['gender'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone_number'];
    $stret = $_POST['street_address'];
    $city = $_POST['city'];
    $stat= $_POST['state'];
    $pin = $_POST['pin_code'];
    $blood = $_POST['blood_group'];
    $des = $_POST['disease'];
    $com = $_POST['comments'];
    $addat = $_POST['admission_time'];
    $ward = $_POST['ward_no'];
    $cho = $_POST['choice'];
    $amo = $_POST['amount'];

    $q167= "INSERT INTO `details`(`Firstname`, `Lastname`, `DOB`, `age`, `gender`, `email`, `phone`, `street`, `city`, `state`, `pin`, `bgroup`, `disease`, `notes`, `adddate`, `ward`, `amount`, `room`, `created_at`) VALUES ('$Fname','$Lname','$dob','$age' ,'$gen','$email','$phone','$stret','$city','$stat','$pin','$blood','$des','$com','$addat','$ward','$amo','$cho',current_timestamp());";

    if($con -> query($q167)==true){
        header("location:CO MIA 69/entry_forms.php");
     
     } 
  
    else{
         echo"Error: $q167 <br> $con -> error";
    }
    $con-> close();
  }
    ?>

    </form>

</div>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const amountInput = document.getElementById('amount');

        amountInput.addEventListener('input', () => {
            if (amountInput.value < 0) {
                amountInput.value = 0;
            }
        });
    });
    function calculateAge() {
        const dobInput = document.getElementById('dob');
        const ageInput = document.getElementById('age');

        const currentYear = new Date().getFullYear();
        const birthYear = new Date(dobInput.value).getFullYear();
        const age = currentYear - birthYear;

        ageInput.value = age;
    }

    // Add an event listener to the date of birth input field
    document.getElementById('dob').addEventListener('input', calculateAge);

</script>

</body>
</html>
