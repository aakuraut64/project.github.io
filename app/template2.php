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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/temp2.css">
  </head>
  <body lang="en">
  <?php
         $select_info = mysqli_query($conn, "SELECT * FROM `basic` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_info) > 0){
            while($fetch_info = mysqli_fetch_assoc($select_info)){
      ?>

<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo $fetch_info['name']; ?></span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val"><?php echo $fetch_info['email']; ?></span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val"><?php echo $fetch_info['phone']; ?></span>
    </div>
    
    <div class="about">
      <span class="position"><?php echo $fetch_info['profession']; ?> </span>
      <br><br>
      <span class="desc">
      <?php echo $fetch_info['about']; ?> 
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $fetch_info['c_name1']; ?></div>
            <div class="duration"><?php echo $fetch_info['js_year1']; ?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $fetch_info['j_profession1']; ?></div>
            <div class="desc"><?php echo $fetch_info['details1']; ?></div>
          </div>
        </div>
                <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $fetch_info['c_name2']; ?></div>
            <div class="duration"><?php echo $fetch_info['js_year2']; ?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $fetch_info['j_profession2']; ?></div>
            <div class="desc"><?php echo $fetch_info['details2']; ?></div>
          </div>
        </div>

      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $fetch_info['university1']; ?></div>
            <div class="duration"><?php echo $fetch_info['es_year1']; ?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $fetch_info['degree1']; ?></div>
          </div>
        </div>
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $fetch_info['university2']; ?></div>
            <div class="duration"><?php echo $fetch_info['es_year2']; ?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $fetch_info['degree2']; ?></div>
          </div>
        </div>

      </div>
      
  </div>
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
         <div class="skills__item">
           <div class="left"><div class="name">
           <?php echo $fetch_info['skill1']; ?>
             </div><div class="name">
           <?php echo $fetch_info['skill2']; ?>
             </div><div class="name">
           <?php echo $fetch_info['skill3']; ?>
             </div><div class="name">
           <?php echo $fetch_info['skill4']; ?>
             </div><div class="name">
           <?php echo $fetch_info['skill5']; ?>
             </div></div>
         </div>
         
       </div>
       <button onclick="printpage()" id="printpagebutton" class="w3-bottom-left w3-pink">download cv</button>
     </div>
  </div>
</div>
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