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
  <?php @include 'header.php' ?>
  <br><br>
<section class="courses" id="courses">
      <h2>Choose your Templates</h2>
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
        <div class="column">
          <img src="img/t4.png" />
          <div class="courses-btn">
            <a href="template2.php" target="_blank" class="btn w3-pink w3-button w3-hover-blue">Select</a>
          </div>
        </div>
      </div>
    </section>
<script src="js/script.js"></script>
  </body>
</html>