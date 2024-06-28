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
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles.css" />
    <title>SUSHRUTARTHIYA</title>
  </head>
  <body>
    <header>
      <nav class="section__container nav__container">
        <div class="nav__logo">SUSHRU<span>TARTHIYA</span></div>
        <ul class="nav__links">
          <li class="link"><a href="index.php">Home</a></li>
          <li class="link"><a href="service.php">Services</a></li>
          <li class="link"><a href="depertment.php">Department</a></li>
          <li class="link"><a href="about.php">About Us</a></li>
          <li class="link"><a href="contact.php">Contact Us</a></li>
        </ul>
        <button type="button" class="btn" onclick="location.href='login.php'">Login</button>
      </nav>
      <div class="section__container header__container">
        <div class="header__content">
          <h1>Providing an Exceptional Patient Experience</h1>
          <p>
            Welcome, where exceptional patient experiences are our priority.
            With compassionate care, state-of-the-art facilities, and a
            patient-centered approach, we're dedicated to your well-being. Trust
            us with your health and experience the difference.
          </p>
          <button class="btn"onclick="location.href='service.php'">See Services</button>
        </div>
        <div class="header__form">

          <form method="post">
            <h4>Book Now</h4>
            <input type="text" name="Firstname" placeholder="First Name" required/>
            <input type="text" name="Lastname" placeholder="Last Name" required/>
            <input type="text" name="address" placeholder="Address" required/>
            <input type="tel" name="phone" placeholder="Phone No." pattern="[789][0-9]{9}" required/>
            <button class="btn form__btn" name="sub" onclick="tryit()">Book Appointment</button>
          </form>
    <?php      
          if(isset($_POST['sub']))
  {
    $Fname = $_POST['Firstname'];
    $Lname= $_POST['Lastname'];
    $Add = $_POST['address'];
    $Phone = $_POST['phone'];

    $q1= "INSERT INTO `appointment`(`Firstname`, `Lastname`, `address`, `phone`, `created_at`) VALUES ('$Fname','$Lname','$Add','$Phone' , current_timestamp());";

    if($con -> query($q1)==true){
      
    ?>  
        
      <script>
         function tryit(){
            alert("Your Appointment is booked!");
          }
      </script>

    <?php } 
  
    else{
         echo"Error: $q1 <br> $con -> error";
    }
    $con-> close();
  }
    ?>
        </div>
      </div>
    </header>

    <section class="section__container service__container">
      <div class="service__header">
        <div class="service__header__content">
          <h2 class="section__header">Our Special service</h2>
          <p>
            Beyond simply providing medical care, our commitment lies in
            delivering unparalleled service tailored to your unique needs.
          </p>
        </div>
      </div>
      <div class="service__grid">
        <div class="service__card">
          <span><i class="ri-microscope-line"></i></span>
          <h4>Laboratory Test</h4>
          <p>
            Accurate Diagnostics, Swift Results: Experience top-notch Laboratory
            Testing at our facility.
          </p>
        </div>
        <div class="service__card">
          <span><i class="ri-mental-health-line"></i></span>
          <h4>Health Check</h4>
          <p>
            Our thorough assessments and expert evaluations help you stay
            proactive about your health.
          </p>
        </div>
        <div class="service__card">
          <span><i class="ri-hospital-line"></i></span>
          <h4>General Dentistry</h4>
          <p>
            Experience comprehensive oral care with Dentistry. Trust us to keep
            your smile healthy and bright.
          </p>
        </div>
      </div>
    </section>
    <section class="section__container about__container">
      <div class="about__content">
        <h2 class="section__header">About Us</h2>
        <p>
          Welcome to our healthcare website, your one-stop destination for
          reliable and comprehensive health care information. We are committed
          to promoting wellness and providing valuable resources to empower you
          on your health journey.
        </p>
        <p>
          Explore our extensive collection of expertly written articles and
          guides covering a wide range of health topics. From understanding
          common medical conditions to tips for maintaining a healthy lifestyle,
          our content is designed to educate, inspire, and support you in making
          informed choices for your health.
        </p>
        <p>
          Discover practical health tips and lifestyle advice to optimize your
          physical and mental well-being. We believe that small changes can lead
          to significant improvements in your quality of life, and we're here to
          guide you on your path to a healthier and happier you.
        </p>
      </div>
      <div class="about__image">
        <img src="assets/about.jpg" alt="about" />
      </div>
    </section>

    <section class="section__container why__container">
      <div class="why__image">
        <img src="assets/choose-us.jpg" alt="why choose us" />
      </div>
      <div class="why__content">
        <h2 class="section__header">Why Choose Us</h2>
        <p>
          With a steadfast commitment to your well-being, our team of highly
          trained healthcare professionals ensures that you receive nothing
          short of exceptional patient experiences.
        </p>
        <div class="why__grid">
          <span><i class="ri-hand-heart-line"></i></span>
          <div>
            <h4>Intensive Care</h4>
            <p>
              Our Intensive Care Unit is equipped with advanced technology and
              staffed by team of professionals
            </p>
          </div>
          <span><i class="ri-truck-line"></i></span>
          <div>
            <h4>Free Ambulance Car</h4>
            <p>
              A compassionate initiative to prioritize your health and
              well-being without any financial burden.
            </p>
          </div>
          <span><i class="ri-hospital-line"></i></span>
          <div>
            <h4>Medical and Surgical</h4>
            <p>
              Our Medical and Surgical services offer advanced healthcare
              solutions to address medical needs.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container doctors__container">
      <div class="doctors__header">
        <div class="doctors__header__content">
          <h2 class="section__header">Our Special Doctors</h2>
          <p>
            We take pride in our exceptional team of doctors, each a specialist
            in their respective fields.
          </p>
      <div class="doctors__grid">
        <div class="doctors__card">
          <div class="doctors__card__image">
            <img src="assets/doctor-1.jpg" alt="doctor" />
            <div class="doctors__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Dr. Smitaparna Biswas</h4>
          <p>Cardiologist</p>
        </div>
        <div class="doctors__card">
          <div class="doctors__card__image">
            <img src="assets/doctor-2.jpg" alt="doctor" />
            <div class="doctors__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Dr. Santanu Mondal</h4>
          <p>Neurosurgeon</p>
        </div>
        <div class="doctors__card">
          <div class="doctors__card__image">
            <img src="assets/doctor-3.jpg" alt="doctor" />
            <div class="doctors__socials">
              <span><i class="ri-instagram-line"></i></span>
              <span><i class="ri-facebook-fill"></i></span>
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-twitter-fill"></i></span>
            </div>
          </div>
          <h4>Dr. Anindya Mukherjee </h4>
          <p>Dermatologist</p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>SUSHRU<span>TARTHIYA</span></h3>
          <p>
            We are honored to be a part of your healthcare journey and committed
            to delivering compassionate, personalized, and top-notch care every
            step of the way.
          </p>
          <p>
            Trust us with your health, and let us work together to achieve the
            best possible outcomes for you and your loved ones.
          </p>
        </div>
        <div class="footer__col">
          <h4><a href="./about.php" class="link1">About Us</a></h4>
          <p>History</p>
          <p>Gallery</p>
          <p>Research</p>
          <p>Terms & Conditions</p>
        </div>
        <div class="footer__col">
          <h4><a href="./service.php">Services</a></h4>
          <p>Facilities</p>
          <p><a href="./depertment.php">Departments</a></p>
          <p>Shedule</p>
          <p>Pathology</p>
          <p>Phermacy</p>
        </div>
        <div class="footer__col">
          <h4><a href="./contact.php">Contact Us</a></h4>
          <p>
            <i class="ri-map-pin-2-fill"></i> Dgp , West Bengal,
          </p>
          <p><i class="ri-mail-fill"></i> sushrutarthiya.com</p>
          <p><i class="ri-phone-fill"></i> 1800-441-4463</p>
        </div>
      </div>
      <div class="footer__bar">
        <div class="footer__bar__content">
          <p>Copyright © 2024 Michal Madhusudan Memorial College. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </body>
 
</html>
