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
    <link rel="stylesheet" type="text/css" href="dep/normalize.css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="dep/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/temp4.css">
  </head>
  <body lang="en">
  <?php
         $select_info = mysqli_query($conn, "SELECT * FROM `basic` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_info) > 0){
            while($fetch_info = mysqli_fetch_assoc($select_info)){
      ?>

<div class="container">
  <div class="word_split wrapper">
  <span class="word word1"> Antony </span>
  <span class="word word2">Smith</span>
  <span class="word word3">Personal</span>
  <span class="word word4">Details</span>
  <span class="word word5">Employment</span>
  <span class="word word6">History </span>
  <span class="word word7">Education</span>
  <span class="word word8">Personal</span>
  <span class="word word9">Skills </span>
  <span class="word word10">Technical</span>
  <span class="word word11">Skills </span>
  <span class="word word12">Get In </span>
  <span class="word word13">Touch</span>
    
    <div class="bubble1">
     <span class="the-arrow1"></span>
      HI! <br/> I AM..
   </div>
  <div class="bubble2">
     <span class="the-arrow2"></span>
    <img src="https://dribbble.s3.amazonaws.com/users/10958/screenshots/271458/librarian.jpg"/>
   </div>
  <div class="bubble3">
     <span class="the-arrow3"></span>
    NATIONALITY...<br/>
    LOCATION...<br/>
    BIRTHDAY...<br/>
    HOBBIES<br/>
    ETC...<br/>
    ETC...<br/>
   </div>
  <div class="bubble4">
     <span class="the-arrow4"></span>
    GRAPHIC DESIGNER 2005 - 2007<br/>
    Lorem Ipsum dolor sit amet. Lorem Ipsum dolor.<br/><br/>
    CREATIVE DIRECTOR 2008 - Current
    <br/>
    Lorem Ipsum dolor sit amet.
    
   </div>
  <div class="bubble5">
     <span class="the-arrow5"></span>
    HIGH SCHOOL<br/>
    Lorem Ipsum dolor sit amet<br/>
    May 2004, GPA 1.5<br/><br/>
    UNIVERSITY <br/>
    Lorem Ipsum dolor sit amet<br/>
    July 2007, GPA 1.5
    
   </div>
  <div class="bubble6">
     <span class="the-arrow6"></span>
    SOCIAL COMMITMENT<br/>
    ORGANIZATION<br/>
    CREATIVITY<br/>
    COMMUNICATION<br/>
    TEAMWORK<br/>
   </div>
  <div class="bubble7">
     <span class="the-arrow7"></span>
    PHOTOSHOP<br/>
    ILLUSTRATOR<br/>
    INDESIGN<br/>
    FLASH<br/>
    DREAMWEAVER<br/>
    XHTML/CSS<br/>
    JAVASCRIPT<br/>
   </div>
  <div class="bubble8">
     <span class="the-arrow8"></span>
    PHONE...<br/>
    EMAIL...<br/>
    WEBSITE... <br/>
    TWITTER...<br/>
    FACEBOOK...<br/>
    DRIBBBLE...<br/>
   </div>   
</div>
   
</div><!--end container-->

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