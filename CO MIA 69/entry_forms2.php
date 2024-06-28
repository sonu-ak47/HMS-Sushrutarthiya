<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data Entry Forms</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="entry_forms.css">
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
			<a href="../tips_rec.php" style="text-decoration:none;"><h1>Data Entry Forms</h1></a>
			<p>Welcome to Sushrutarhtiya. Here you can access various data entry forms.</p>
		</div>
	</div>
</header>

<div class="section__container form-container">
	<div class="entry-form-buttons">
		<h3>Available Forms</h3>
		<div class="button-group">
			<a href="./pat_add.php" class="btn"><i class="ri-user-add-line"></i>Patient Admission Form</a>
			<a href="pat_investigation.php" class="btn"><i class="ri-stethoscope-line"></i>Patient Initial Investigation Form</a>
			<a href="prescription.php" class="btn"><i class="ri-pill-line"></i>Patient's Prescription Form</a>
			<a href="wardInfo.php" class="btn"><i class="ri-hospital-line"></i>Ward Info Form</a>
			<a href="medicineEntryForm.php" class="btn"><i class="ri-drop-line"></i>Medicine Entry Form</a>
			<a href="../reception.php" class="btn">Appointments</a>
			
		</div>
	</div>

	<div class="patient-details">
		<!-- <h3>View Patient Details</h3> -->
		<div class="button-group">
			<!-- <a href="./view_patAcc.php" class="btn"><i class="ri-user-line"></i>View Patient</a> -->
			<a href="../logout_admin.php" style="background-color:red;" class="btn" >LOGOUT</a>
		</div>
	</div>
</div>

<footer class="footer">
	<div class="footer__container section__container">
		<!-- Footer content remains the same -->
	</div>
</footer>

</body>
</html>