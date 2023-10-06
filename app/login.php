<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>RESUME BUDDY</title>
    <link rel="icon" type="image/x-icon" href="img/LOGO.ico">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/login_style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php @include 'header.php'; ?>
  <div class="coverlay container" id="myOverlay">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/b2.png" alt="">
        <div class="text">
        <span class="text-1">Writing a great resume is a  <br> crucial step in your job search</span>
          <span class="text-2">try now for free!</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="img/img.png" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email"  required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <a href="register.php">Signup now</a></div>
            </div>
        </form>
      </div>
    </div>
    </div>
  </div>
<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>

