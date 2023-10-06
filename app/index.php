<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESUME BUDDY</title>
    <!------ Font Awesome ------>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/queries.css" />
  </head>
  <body>
    <!------ Scroll To Top Button ------>
    <button id="scroll-top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <!------ Header ------>
    <header>
      <nav>
        <a href="#home" id="logo">Resume buddy</a>
        <i class="fas fa-bars" id="ham-menu"></i>
        <ul id="nav-bar">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="profile.php">Profile</a>
          </li>
          <li>
            <a href="sampless.php">Samples</a>
          </li>
          <li>
            <a href="templates.php">Templates</a>
          </li>
        </ul>
      </nav>
    </header>
    <!------ Section: Hero ------>
    <section class="hero" id="home">
      <img src="header-shape.svg" id="header-shape" />
      <div class="hero-content">
        <h1>ONLINE RESUME BUILDER</h1>
        <p class="w3-xlarge w3-text-pink">
        Only 2% of resumes make it past the first round. Be in the top 2%
        </p>
        <p>
        Use professional field-tested resume templates that follow the exact ‘resume rules’ employers look for. Easy to use and done within minutes - try now for free!
        </p><br><br>
        <div class="btn-container">
        <p><a href="info.php" class="w3-button w3-pink w3-padding-large w3-large w3-hover-blue">CREATE NOW</a></p>
        </div>
      </div>
      <div class="hero-img">
        <img src="hero-image.svg" />
      </div>
    </section>
    <!------ Section: Features ------>
    <section class="features" id="features">
      <h2>3 EASY STEPS TO CREATE YOUR PERFECT RESUME </h2>
      <p class="section-desc">
      </p>
      <div class="row">
        <div class="column">
          <i class="	fas fa-address-card"></i>
          <h3> CHOOSE YOUR RESUME TEMPLATE</h3>
          <p>
            Our professional resume templates are designed strictly following all industry guidelines and best practices
            employers are looking for.
          </p>
        </div>
        <div class="column">
          <i class="fas fa-star"></i>
          <h3>SHOW WHAT YOU'RE MADE OF</h3>
          <p>
          Not finding the right words to showcase yourself? We´ve added thousands of pre-written examples and resume samples. As easy as a click.
          </p>
        </div>
        <div class="column">
          <i class="fas fa-download"></i>
          <h3>DOWNLOAD YOUR RESUME</h3>
          <p>
          Start impressing employers. Download your awesome resume and land the job you are looking for, effortlessly.
          </p>
        </div>
      </div>
    </section>
    <!------ Section: Courses ------>
    <section class="courses" id="courses">
      <h2>Our Popular Templates</h2>
      <p class="section-desc">
      </p>
      <div class="row">
        <div class="column">
          <img src="img/t1.png" />
          <div class="courses-btn">
            <a href="template5.php" target="_blank" class="btn w3-pink w3-button w3-hover-blue">Select</a>
          </div>
        </div>
        <div class="column">
          <img src="img/t2.png" />
          <div class="courses-btn">
            <a href="template3.php" target="_blank" class="btn w3-pink w3-button w3-hover-blue">Select</a>
          </div>
        </div>
        <div class="column">
          <img src="img/t3.png" />
          <div class="courses-btn">
            <a href="template.php" target="_blank" class="btn w3-pink w3-button w3-hover-blue">Select</a>
          </div>
        </div>
      </div>
    </section>
    <!------ Footer ------>
    <footer>
      <div class="row footer-about">
        <h3>Resume Buddy</h3>
        <p>
        Only 2% of resumes make it past the first round. Be in the top 2% <br>Use professional field-tested resume templates that follow the exact ‘resume rules’ employers look for. Easy to use and done within minutes - try now for free!
        </p>
        <div class="social-links">
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
      <div class="row footer-contact">
        <div class="column">
          <h4>Phone No</h4>
          <p>+12 123456</p>
        </div>
        <div class="column">
          <h4>Email</h4>
          <p>resumebuddy@domain.com</p>
        </div>
      </div>
      <p class="footer-copyright">
        Copyright &copy; 2021 Akanksha. All rights reserved.
      </p>
    </footer>
    <!------ Script ------>
    <script src="js/script.js"></script>
  </body>
</html>

