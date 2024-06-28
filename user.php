<?php 

session_start();
                
              $server = "localhost";
              $username = "root";
              $password = "";
              $dbname = "hospital_col";
                  $con = mysqli_connect($server,$username,$password,$dbname);
                  if(! $con){
                      die("connection faled due to :");
                  }
                  ?>
                  <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong> <?php echo "Connected Successfully !"; ?> </strong> 
                  </div> -->
                  
                  <script>
                    $(".alert").alert();
                  </script>
            <?php      
                 $profile = $_SESSION['us'];

                        if($profile == true){

                        }
                        else{
                        header("location:login.php");
                        }
?>
<?php
                  $que2= "SELECT * FROM `details` WHERE `email` = '$profile' ";
                  $result2 = mysqli_query($con,$que2);
              
                  
                ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Patients' Accounts</title>
    <link rel="stylesheet" href="CO MIA 69/style.css">
    <link rel="stylesheet" href="CO MIA 69/view_patAcc.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="section__container nav__container">
        <div class="nav__logo">SUSHRU<span>TARTHIYA</span></div>
        <img src="logo.png" alt="Logo" class="nav__logo-img">
    </nav>
    <?php     while($row = mysqli_fetch_assoc($result2)) { ?>
    <div class="section__container header__container">
        <div class="header__content">
           <a href="./tips_user.php" style="text-decoration:none"><h1><?php  echo  $row['Firstname']; ?>'s Accounts</h1></a>
            <p>Welcome to Sushrutarhtiya. View your patients' account details.</p>
        </div>
    </div>
</header>


   
<div class="section__container account-container">
    <div class="patients-header">
        <h2>Patients' Information</h2>
       
    </div>
    <div class="patient-list" id="patientList">
        <div class="patient-item">
            <div class="patient-summary" onclick="togglePatientDetails(this)">
                
                <h3><?php  echo  $row['Firstname']; ?></h3>
                <p><?php  echo  $row['adddate']; ?></p>
                <i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="patient-details">
                <div class="account-info">
                    <div class="account-section">
                        <h3>Admission Details</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Admission Date/Time</label>
                                <input type="text" value="<?php  echo  $row['adddate']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                       
                        <h3>Patient's Name</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" value="<?php  echo  $row['Firstname']; ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" value="<?php  echo $row['Lastname']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Patient's Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" value="<?php  echo $row['DOB']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" value="<?php  echo $row['gender']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" value="<?php  echo $row['age']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <input type="text" value="<?php  echo $row['bgroup']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" value="<?php  echo $row['phone']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="<?php  echo $row['email']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Present Address</h3>
                        <div class="form-row">
                            
                            <div class="form-group">
                                <label>Street Name</label>
                                <input type="text" value="<?php  echo $row['street']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Area/Village/Town/City</label>
                                <input type="text" value="<?php  echo $row['city']; ?>" readonly>
                            </div>
                           
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" value="<?php  echo $row['state']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Pin Code</label>
                                <input type="text" value="<?php  echo $row['pin']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Room Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Ward No.</label>
                                <input type="text" value="<?php  echo $row['ward']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Room Choice</label>
                                <input type="text" value="<?php  echo $row['room']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Disease Name and Severity</label>
                                <input type="text" value="<?php  echo $row['disease']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Special Note</label>
                                <input type="text" value="<?php  echo $row['notes']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Amount Deposited</label>
                                <input type="text" value="<?php  echo $row['amount']; ?>" readonly>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      <?php }?>  

</div>



<script>
    function togglePatientDetails(element) {
        const details = element.nextElementSibling;
        const arrow = element.querySelector('i');
        details.classList.toggle('show');
        arrow.classList.toggle('ri-arrow-up-s-line');
        arrow.classList.toggle('ri-arrow-down-s-line');
    }

    function searchByEmail() {
        const searchEmail = document.getElementById('emailSearch').value.toLowerCase();
        const patientList = document.getElementById('patientList');
        const patients = Array.from(patientList.getElementsByClassName('patient-item'));

        patients.forEach(patient => {
            const emailInput = patient.querySelector('input[type="email"]');
            const email = emailInput ? emailInput.value.toLowerCase() : '';

            if (email === searchEmail) {
                patient.classList.add('highlighted');
                patientList.prepend(patient);
                const details = patient.querySelector('.patient-details');
                const summary = patient.querySelector('.patient-summary');
                const arrow = summary.querySelector('i');
                details.classList.add('show');
                arrow.classList.remove('ri-arrow-down-s-line');
                arrow.classList.add('ri-arrow-up-s-line');
            } else {
                patient.classList.remove('highlighted');
            }
        });
    }
</script>
      

       
</body>
</html>