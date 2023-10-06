<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>RESUME BUDDY</title>
    <link rel="stylesheet" type="text/css" href="dep/normalize.css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="dep/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <body lang="en">
  <?php
         $select_info = mysqli_query($conn, "SELECT * FROM `basic` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_info) > 0){
            while($fetch_info = mysqli_fetch_assoc($select_info)){
      ?>
    <section id="main">
      <header id="title">
        <h1><?php echo $fetch_info['name']; ?></h1>
        <span class="subtitle"><?php echo $fetch_info['profession']; ?></span>
      </header>
      <section class="main-block">
        <h2>
          <i class="fa fa-suitcase"></i> Experiences
        </h2>
        <section class="blocks">
          <div class="date">
            <span><?php echo $fetch_info['js_year1']; ?></span>
          </div>
          <div class="decorator">
          </div>
          <div class="details">
            <header>
              <h3><?php echo $fetch_info['j_profession1']; ?></h3>
              <span class="place"><?php echo $fetch_info['c_name1']; ?></span>
            </header>
            <div>
              <ul>
              <?php echo $fetch_info['details1']; ?>
              </ul>
            </div>
          </div>
        </section>
        <section class="blocks">
          <div class="date">
            <span><?php echo $fetch_info['js_year1']; ?></span>
          </div>
          <div class="decorator">
          </div>
          <div class="details">
            <header>
              <h3><?php echo $fetch_info['j_profession1']; ?></h3>
              <span class="place"><?php echo $fetch_info['c_name1']; ?></span>
            </header>
            <div>
              <ul>
              <?php echo $fetch_info['details1']; ?>
              </ul>
            </div>
          </div>
        </section>
      </section>
      <section class="main-block concise">
        <h2>
          <i class="fa fa-graduation-cap"></i> Education
        </h2>
        <section class="blocks">
          <div class="date">
            <span><?php echo $fetch_info['es_year1']; ?></span>
          </div>
          <div class="decorator">
          </div>
          <div class="details">
            <header>
              <h3><?php echo $fetch_info['degree1']; ?></h3>
              <span class="place"><?php echo $fetch_info['university1']; ?></span>
            </header>
          </div>
        </section>
        <section class="blocks">
          <div class="date">
            <span></span><?php echo $fetch_info['es_year2']; ?></span>
          </div>
          <div class="decorator">
          </div>
          <div class="details">
            <header>
              <h3><?php echo $fetch_info['degree2']; ?></h3>
              <span class="place"><?php echo $fetch_info['university2']; ?></span>
            </header>
          </div>
        </section>
      </section>
    </section>
    <aside id="sidebar">
      <div class="side-block" id="contact">
        <h1>
          Contact Info
        </h1>
        <ul>
          <li><i class="fa fa-globe"></i><?php echo $fetch_info['address']; ?> </li>
          <li><i class="fa fa-linkedin"></i> <?php echo $fetch_info['email']; ?> </li>
          <li><i class="fa fa-phone"></i><?php echo $fetch_info['phone']; ?></li>
        </ul>
      </div>
      <div class="side-block" id="skills">
        <h1>
          Skills
        </h1>
        <ul>
          <li><?php echo $fetch_info['skill1']; ?></li>
          <li><?php echo $fetch_info['skill2']; ?></li>
          <li><?php echo $fetch_info['skill3']; ?></li>
        </ul>
        <ul>
          <li><?php echo $fetch_info['skill4']; ?></li>
          <li><?php echo $fetch_info['skill5']; ?></li>
        </ul>
      </div>
      
      <button onclick="printpage()" id="printpagebutton" class="w3-bottom-left w3-pink">download cv</button>
    </aside>
    <?php
         }
      }else{
         echo '<p class="empty">no info added yet!</p>';
      }
      ?>
      <script type="text/javascript" >
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script> 
  </body>
</html>

