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
	<title>Data Entry Forms</title>
	<link rel="stylesheet" href="CO MIA 69/style.css">
	<link rel="stylesheet" href="CO MIA 69/entry_forms.css">
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
		<?php while($row = mysqli_fetch_assoc($result2)) { ?> 
			<a href="./tips_user.php" style="text-decoration:none"><h1>WELCOME <?php  echo  $row['Firstname']; ?></h1></a>
			<?php }?>
			<p>Welcome to Sushrutarhtiya. Here you can access various data About Your Patient</p>
		</div>
	</div>
</header>

<div class="section__container form-container">
	<div class="entry-form-buttons">
		<h3>Available Details</h3>
		<div class="button-group">
			<a href="./user.php" class="btn"><i class="ri-user-add-line"></i>Patient Admission Details</a>
			<a href="#" class="btn"><i class="ri-stethoscope-line"></i>Patient Initial Investigation Details</a>
			<a href="#" class="btn"><i class="ri-pill-line"></i>Patient's Prescription Details</a>
			<a href="#" class="btn"><i class="ri-hospital-line"></i>Ward Info Details</a>
			<a href="#" class="btn"><i class="ri-drop-line"></i>Medicine Entry Details</a>
			
			
		</div>
	</div>

	<div class="patient-details">
		<h3></h3>
		<div class="button-group">
        <a href="./logout_admin.php" style="background-color:red;" class="btn" >LOGOUT</a>
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