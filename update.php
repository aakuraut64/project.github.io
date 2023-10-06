<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

if(isset($_POST['update'])){

   $update_d_id = $_POST['update_d_id'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
    $profession = mysqli_real_escape_string($conn, $_POST['profession']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folter = 'uploaded_img/'.$image;
    $skill1 = mysqli_real_escape_string($conn, $_POST['skill1']);
    $skill2 = mysqli_real_escape_string($conn, $_POST['skill2']);
    $skill3 = mysqli_real_escape_string($conn, $_POST['skill3']);
    $skill4 = mysqli_real_escape_string($conn, $_POST['skill4']);
    $skill5 = mysqli_real_escape_string($conn, $_POST['skill5']);
    $degree1= mysqli_real_escape_string($conn, $_POST['degree1']);
    $university1 = mysqli_real_escape_string($conn, $_POST['university1']);
    $es_year1 = mysqli_real_escape_string($conn, $_POST['es_year1']);
    $degree2 = mysqli_real_escape_string($conn, $_POST['degree2']);
    $university2 = mysqli_real_escape_string($conn, $_POST['university2']);
    $es_year2 = mysqli_real_escape_string($conn, $_POST['es_year2']);
    $c_name1 = mysqli_real_escape_string($conn, $_POST['c_name1']);
    $j_profession1 = mysqli_real_escape_string($conn, $_POST['j_profession1']);
    $js_year1 = mysqli_real_escape_string($conn, $_POST['js_year1']);
    $details1 = mysqli_real_escape_string($conn, $_POST['details1']);
    $c_name2 = mysqli_real_escape_string($conn, $_POST['c_name2']);
    $j_profession2 = mysqli_real_escape_string($conn, $_POST['j_profession2']);
    $js_year2 = mysqli_real_escape_string($conn, $_POST['js_year2']);
    $details2 = mysqli_real_escape_string($conn, $_POST['details2']);


   mysqli_query($conn, "UPDATE `basic` SET user_id = '$user_id', name = '$name', profession = '$profession', email = '$email', phone = '$phone', address = '$address', about = '$about', 
   skill1 = '$skill1', skill2 = '$skill2', skill3 = '$skill3', skill4 = '$skill4', degree1 = '$degree1', university1 = '$university1', es_year1 = '$es_year1',degree2 = '$degree2', university2 = '$university2', es_year2 = '$es_year2',
    c_name1 = '$c_name1', j_profession1 = '$j_profession1', js_year1 = '$js_year1', details1 = '$details1', c_name2 = '$c_name2', j_profession2 = '$j_profession2', js_year2 = '$js_year2', details2 = '$details2'   WHERE id = '$update_d_id'") or die('query failed');

   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folter = 'uploaded_img/'.$image;
   $old_image = $_POST['update_d_image'];
   
   if(!empty($image)){
      if($image_size > 2000000){
         $message[] = 'image file size is too large!';
      }else{
         mysqli_query($conn, "UPDATE `basic` SET image = '$image' WHERE id = '$update_d_id'") or die('query failed');
         move_uploaded_file($image_tmp_name, $image_folter);
         unlink('uploaded_img/'.$old_image);
         $message[] = 'image updated successfully!';
      }
   }

   $message[] = 'info updated successfully!';

}

?>

<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title> Resume buddy </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <!-- FontAwesome Icons -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="css/info_style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <style>
    #education, #skill, #experience, #download{
          display: none;
    }
  </style>


</head>
<body>

<?php @include'header.php'; ?>

<br><br><br>
<div class="container ">
<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-1"></div>
  <div class="col-lg-10">
    <div class="cwell ">
    <?php

    $update_id = $_GET['update'];
    $select_basic = mysqli_query($conn, "SELECT * FROM `basic` WHERE id = '$update_id' ") or die('query failed');
    if(mysqli_num_rows($select_basic) > 0){
    while($fetch_info = mysqli_fetch_assoc($select_basic)){
    ?>
        <!-- Personal Information -->
        <div id="basic" >   
        <div class="row">  
     
           <div class="col-sm-12 ">
                 <h1 class="text-center text-danger"> Update Personal Information</h1>
                 <p class="text-center">Employers will use this information to contact you.</p>
                <br><br>
            </div>
            
            

            <div class="col-lg-6 col-sm-6">
                <div class="form-group input-box">
                    <input name="name" type="text" value="<?php echo $fetch_info['name']; ?>"class=""/>
                    <label>Name</label>
                </div>
            </div><br><br>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group input-box">
                    <input name="address" type="text" value="<?php echo $fetch_info['address']; ?>" class=""/>
                    <label>Address</label>
                </div>
            </div><br><br>
       
             <div class="col-lg-6 col-sm-6">
                <div class="form-group input-box">
                    <input name="phone" type="Number" value="<?php echo $fetch_info['phone']; ?>" class=""/>
                    <label>Phone Number</label>
                </div>
            </div><br><br>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group input-box">
                    <input name="email" type="email" value="<?php echo $fetch_info['email']; ?>" class=""/>
                    <label>Email</label>
                </div>
            </div><br><br>

            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="profession" type="text" value="<?php echo $fetch_info['profession']; ?>" class=""/>
                    <label>Profession</label>
                </div>
            </div>
            <br><br>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="about" type="text" cols="30" rows="20" value="<?php echo $fetch_info['about']; ?>" class=""/>
                    <label>About</label>
                </div>
            </div>
            
        </div>
        <br><br><br><br><br>
        <div class="col-md-11 col-sm-11 col-xs-11 text-right">
              <a onclick="foreducation()" class="btn btn-danger w3-right" id="button" name="update">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>
      
        <!-- Education Information -->
        <div id="education">
          <div class="row">
            <div class="col-sm-12 ">
                
                <h1 class="text-center text-danger"> Update Education</h1>
                <p class="text-center">Add information about your educational background.</p>
                <br><br>
            </div>

            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="university1" type="text" value="<?php echo $fetch_info['university1']; ?>"class=""/>
                    <label>University</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="university2" type="text" value="<?php echo $fetch_info['university2']; ?>" class=""/>
                    <label>University</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="es_year1" type="text" value="<?php echo $fetch_info['es_year1']; ?>"  class=""/>
                    <label>Year</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="es_year2" type="text" value="<?php echo $fetch_info['es_year2']; ?>"  class=""/>
                    <label>Year</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="degree1" type="text"value="<?php echo $fetch_info['degree1']; ?>" class=""/>
                    <label>Degree</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="degree2" type="text"value="<?php echo $fetch_info['degree2']; ?>" class=""/>
                    <label>Degree</label>
                </div>
            </div>

        </div>
        <br><br><br><br>
        <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="forbasic()" class="btn btn-danger" id="button">&lt;&lt;BACK</a>
        </div>

         <div class="col-md-11 col-sm-11 col-xs-11 text-right ">
              <a onclick="forskill()" class="btn btn-danger w3-right " id="button" name="update">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>

        <!-- Skills  Information -->
        <div id="skill">
          <div class="row">
            <div class="col-sm-12">
                
                <h1 class="text-center text-danger"> Update Skills & Abilities</h1>
                <p class="text-center">Highlight of your 3 top skills.</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="skill1" type="text" value="<?php echo $fetch_info['skill1']; ?>" class=""/>
                    <label>Skill 1</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="skill2" type="text" value="<?php echo $fetch_info['skill2']; ?>" class=""/>
                    <label>Skill 2</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="skill3" type="text" value="<?php echo $fetch_info['skill3']; ?>" class=""/>
                    <label>Skill 3</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="skill4" type="text" value="<?php echo $fetch_info['skill4']; ?>" class=""/>
                    <label>Skill 4</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="skill5" type="text" value="<?php echo $fetch_info['skill5']; ?>" class=""/>
                    <label>Skill 5</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12 ">
        <label> PROFILE IMAGE :</label>
        <input type="file" accept="image/jpg, image/jpeg, image/png" class="box" name="image">
     </div>
     <input type="hidden" value="<?php echo $fetch_info['id']; ?>" name="update_d_id">
     <input type="hidden" value="<?php echo $fetch_info['image']; ?>" name="update_d_image">
     <br><br><br><br>
     <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="foreducation()" class="btn btn-danger" id="button">&lt;&lt;BACK</a>
        </div>

         <div class="col-md-11 col-sm-11 col-xs-11 text-right">
              <a onclick="forexperience()" class="btn btn-danger w3-right" id="button" name="update">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>

      
        <!-- Experience Information -->
        <div id="experience">
          <div class="row">
            <div class="col-sm-12">
                
                <h1 class="text-center text-danger"> Update Experience</h1>
                <p class="text-center">List your work experience, from the most recent to the oldest. Feel free to use our pre-written examples.
</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="c_name1" type="text" value = "<?php echo $fetch_info['c_name1']; ?>" class=""/>
                    <label>Company Name</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="c_name2" type="text" value = "<?php echo $fetch_info['c_name2']; ?>"class=""/>
                    <label>Company Name</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="j_profession1" type="text" value="<?php echo $fetch_info['j_profession1']; ?>"  class=""/>
                    <label>Profession</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="j_profession2" type="text" value="<?php echo $fetch_info['j_profession2']; ?>"  class=""/>
                    <label>Profession</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="js_year1" type="text"  value="<?php echo $fetch_info['js_year1']; ?>" class=""/>
                    <label>Year</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="js_year2" type="text"  value="<?php echo $fetch_info['js_year2']; ?>"class=""/>
                    <label>Year</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="details1" type="text" value="<?php echo $fetch_info['details1']; ?>" class=""/>
                    <label>Description</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            <div class="form-group input-box">
                    <input name="details2" type="text" value="<?php echo $fetch_info['details2']; ?>" class=""/>
                    <label>Description</label>
                </div>
            </div>
            <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="forskill()" class="btn btn-danger" id="button">&lt;&lt;BACK</a>
        </div>
        <div class="col-md-11 col-sm-11 col-xs-11 text-right ">
        <input type="submit" name="update" value="Update" id="button" class="btn btn-danger w3-right">
        </div>
      </div>
  </div>

</div>
</div></div>


<div class="col-md-1"></div>
</form>
</div>

<?php
      }
   }else{
      echo '<p class="empty">no update info select</p>';
   }
?>
    
</body>
<script type="text/javascript">
  function forbasic() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "block";
    e.style.display = "none";
    s.style.display = "none";
    ex.style.display = "none";
    d.style.display = "none";  
  }

    function foreducation() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "none";
    e.style.display = "block";
    s.style.display = "none";
    ex.style.display = "none";
    d.style.display = "none";  
  }


  function forskill() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "none";
    e.style.display = "none";
    s.style.display = "block";
    ex.style.display = "none";
    d.style.display = "none";  
  }


  function forexperience() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "none";
    e.style.display = "none";
    s.style.display = "none";
    ex.style.display = "block";
    d.style.display = "none";  
  }

</script>

</body>
</html>
