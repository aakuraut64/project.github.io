<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('info.php');
};

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `basic` WHERE id = '$delete_id'") or die('query failed');
    header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESUME BUDDY</title>
    <link rel="icon" type="image/x-icon" href="img/LOGO.ico">
    <link rel="stylesheet" href="css/profile_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>

<?php @include 'header.php' ?>

<div class="container" id="team">

    <div class="profile">
    <?php
         $select_info = mysqli_query($conn, "SELECT * FROM `basic` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_info) > 0){
            while($fetch_info = mysqli_fetch_assoc($select_info)){
      ?>
        <img class="img" src="uploaded_img/<?php echo $fetch_info['image']; ?>" alt="">
        <h3><?php echo $fetch_info['name']; ?></h3>
        <p><?php echo $fetch_info['profession']; ?></p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
        <div class="buttons">
            <a href="update.php?update=<?php echo $fetch_info['id']; ?>" class="btn" id="hidebtn()">Update</a>
            <a href="templates.php" class="btn" id="hidebtn()">Templete</a>
            <a href="profile.php?delete=<?php echo $fetch_basic['id']; ?>" onclick="return confirm('delete this user?');" class="btn">delete</a>
        </div>
        
    </div>
    <div class="information">

        <div class="about">
            <h3 class="title">about me</h3>
            <p><?php echo $fetch_info['about']; ?></p>
            <div class="box-container">
                <div class="box">
                    <h3> <span> address : </span> <?php echo $fetch_info['address']; ?> </h3>
                    <h3> <span> number : </span> <?php echo $fetch_info['phone']; ?> </h3>
                    <h3> <span> email : </span> <?php echo $fetch_info['email']; ?> </h3>
                </div>
                <div class="box">
                    <h3> <span> skill : </span> <?php echo $fetch_info['skill1']; ?> , <?php echo $fetch_info['skill2']; ?> , <?php echo $fetch_info['skill3']; ?> , <?php echo $fetch_info['skill4']; ?> , <?php echo $fetch_info['skill5']; ?> </h3>
                </div>
            </div>
            
        </div>

        <div class="experience">
            <h3 class="title">my education</h3>
            <div class="box-container">
                <div class="box">
                    <h3><?php echo $fetch_info['degree1']; ?></h3>
                    <span><?php echo $fetch_info['es_year1']; ?></span>
                    <h3><?php echo $fetch_info['university1']; ?></h3>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <h3><?php echo $fetch_info['degree2']; ?></h3>
                    <span><?php echo $fetch_info['es_year2']; ?></span>
                    <h3><?php echo $fetch_info['university2']; ?></h3>
                </div>
            </div>
        </div>

        <div class="experience">
            <h3 class="title">my experience</h3>
            <div class="box-container">
                <div class="box">
                    <h3><?php echo $fetch_info['j_profession1']; ?></h3>
                    <span><?php echo $fetch_info['js_year1']; ?></span>
                    <h3><?php echo $fetch_info['c_name1']; ?></h3>
                    <p><?php echo $fetch_info['details1']; ?></p>
                </div>
                <div class="box">
                    <h3><?php echo $fetch_info['j_profession2']; ?></h3>
                    <span><?php echo $fetch_info['js_year2']; ?></span>
                    <h3><?php echo $fetch_info['c_name2']; ?></h3>
                    <p><?php echo $fetch_info['details2']; ?></p>
                </div>
            </div>
        </div>

        <div class="contact">
            <h3 class="title">contact info</h3>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-map"></i>
                    <div class="info">
                        <h3>my address</h3>
                        <p><?php echo $fetch_info['address']; ?></p>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-phone"></i>
                    <div class="info">
                        <h3>my number</h3>
                        <p>+<?php echo $fetch_info['phone']; ?></p>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <div class="info">
                        <h3>my email</h3>
                        <p><?php echo $fetch_info['email']; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
         }
      }else{
         echo '<p class="empty">no info added yet!</p>';
      }
      ?>

</div>


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