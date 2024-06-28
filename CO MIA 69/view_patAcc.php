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
             

                $profile = $_SESSION['Aus'];

                if($profile == true){

                }
                else{
                  header("location:login admin.php");
                }

                  $que1= "SELECT * FROM `register` WHERE 1";
                  $result1 = mysqli_query($con,$que1);
              
                 
                ?>  
                
                <?php
                  $que2= "SELECT * FROM `details` WHERE 1";
                  $result2 = mysqli_query($con,$que2);
              
                  
                ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Patients' Accounts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view_patAcc.css">
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
            <h1>My Patients' Accounts</h1>
            <p>Welcome to Sushrutarhtiya. View and manage your patients' account details.</p>
        </div>
    </div>
</header>

<div class="section__container account-container">
    <div class="patients-header">
        <h2>Patients' Information</h2>
        <div class="search-container">
            <input type="text" id="emailSearch" placeholder="Search by email...">
            <button onclick="searchByEmail()">Search</button>
        </div>
    </div>
    <div class="patient-list" id="patientList">
        <div class="patient-item">
            <div class="patient-summary" onclick="togglePatientDetails(this)">
                <?php     while($row = mysqli_fetch_assoc($result2)) { ?>
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
                                <input type="text" value="<?php  echo  $row['adddate']; ?>" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                       
                        <h3>Patient's Name</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label><?php  echo  $row['Firstname']; ?></label>
                                <input type="text" value="Jasmine" disabled>
                            </div>
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" value="" disabled>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" value="Walia" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Patient's Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" value="02-july-1993" disabled>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" value="Female" disabled>
                            </div>
                            <div class="form-group">
                                <label>Profession</label>
                                <input type="text" value="Private Job" disabled>
                            </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <input type="text" value="O+" disabled>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" value="01234567891" disabled>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="jwalia@gmail.com" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Present Address</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Street No.</label>
                                <input type="text" value="17" disabled>
                            </div>
                            <div class="form-group">
                                <label>Street Name</label>
                                <input type="text" value="Johnson" disabled>
                            </div>
                            <div class="form-group">
                                <label>Area/Village</label>
                                <input type="text" value="Gulshan" disabled>
                            </div>
                            <div class="form-group">
                                <label>Thana</label>
                                <input type="text" value="Gulshan" disabled>
                            </div>
                            <div class="form-group">
                                <label>District</label>
                                <input type="text" value="Dhaka" disabled>
                            </div>
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" value="1000" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Room Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Ward No.</label>
                                <input type="text" value="13" disabled>
                            </div>
                            <div class="form-group">
                                <label>Room Choice</label>
                                <input type="text" value="Cabin" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Disease Name and Severity</label>
                                <input type="text" value="Typhoid" disabled>
                            </div>
                            <div class="form-group">
                                <label>Special Note</label>
                                <textarea disabled>none</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Amount Deposited</label>
                                <input type="text" value="7,500" disabled>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      <?php }?>  

        <div class="patient-item">
            <div class="patient-summary" onclick="togglePatientDetails(this)">
                <h3>Robert Johnson</h3>
                <p>Admission: 23-August-2017</p>
                <i class="ri-arrow-down-s-line"></i>
            </div>
            <div class="patient-details">
                <div class="account-info">
                    <div class="account-section">
                        <h3>Admission Details</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Admission Date/Time</label>
                                <input type="text" value="23-August-2017" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Patient's Name</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" value="Robert" disabled>
                            </div>
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" value="Alan" disabled>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" value="Johnson" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Patient's Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" value="15-March-1980" disabled>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" value="Male" disabled>
                            </div>
                            <div class="form-group">
                                <label>Profession</label>
                                <input type="text" value="Software Engineer" disabled>
                            </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <input type="text" value="B-" disabled>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" value="01987654321" disabled>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="robert.johnson@email.com" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Present Address</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Street No.</label>
                                <input type="text" value="42" disabled>
                            </div>
                            <div class="form-group">
                                <label>Street Name</label>
                                <input type="text" value="Green Road" disabled>
                            </div>
                            <div class="form-group">
                                <label>Area/Village</label>
                                <input type="text" value="Dhanmondi" disabled>
                            </div>
                            <div class="form-group">
                                <label>Thana</label>
                                <input type="text" value="Dhanmondi" disabled>
                            </div>
                            <div class="form-group">
                                <label>District</label>
                                <input type="text" value="Dhaka" disabled>
                            </div>
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" value="1205" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="account-section">
                        <h3>Room Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Ward No.</label>
                                <input type="text" value="5" disabled>
                            </div>
                            <div class="form-group">
                                <label>Room Choice</label>
                                <input type="text" value="Single Room" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Disease Name and Severity</label>
                                <input type="text" value="Appendicitis, Acute" disabled>
                            </div>
                            <div class="form-group">
                                <label>Special Note</label>
                                <textarea disabled>Patient is allergic to penicillin.</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Amount Deposited</label>
                                <input type="text" value="12,000" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer__bar">
        <div class="footer__bar__content">
            <p>&copy; All Rights Reserved by We Care Hospital</p>
        </div>
    </div>
</footer>

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