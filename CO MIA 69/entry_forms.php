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
			<h1>Data Entry Forms</h1>
			<p>Welcome to Sushrutarhtiya. Here you can access various data entry forms.</p>
		</div>
	</div>
</header>

<div class="section__container form-container">
	<div class="entry-form-buttons">
		<h3>Available Forms</h3>
		<div class="button-group">
			<a href="pat_add.php" class="btn">Patient Admission Form</a>
			<a href="pat_investigation.php" class="btn">Patient Initial Investigation Form</a>
			<a href="prescription.php" class="btn">Patient's Prescription Form</a>
			<a href="wardInfo.php" class="btn">Ward Info Form</a>
			<a href="medicineEntryForm.php" class="btn">Medicine Entry Form</a>
			<a href="../reception.php" class="btn">Appointments</a>
			<a href="../logout_admin.php" style="background-color:red;" class="btn" >LOGOUT</a>
		</div>
	</div>
</div>


</body>
</html>