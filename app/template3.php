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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <link id="theme-style" rel="stylesheet" href="css/temp3.css">
  </head>
  <body lang="en">
  <?php
         $select_info = mysqli_query($conn, "SELECT * FROM `basic` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_info) > 0){
            while($fetch_info = mysqli_fetch_assoc($select_info)){
      ?>

    <base>

    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="media flex-column flex-md-row">
                 <img class="img" src="uploaded_img/<?php echo $fetch_info['image']; ?>" alt=""width="220" height="220">
				    <img class="mr-3 img-fluid picture mx-auto" src="" alt="">
				    <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
					    <div class="primary-info">
						    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $fetch_info['name']; ?></h1>
						    <div class="title mb-3"><?php echo $fetch_info['profession']; ?></div>
						    <ul class="list-unstyled">
							    <li class="mb-2"><i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i> <?php echo $fetch_info['email']; ?></li>
							    <li><a><i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i><?php echo $fetch_info['phone']; ?></a></li>
						    </ul>
					    </div>
				    </div>
			    </div>
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $fetch_info['about']; ?></p>
				    </div>
			    </section>
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1" ><?php echo $fetch_info['j_profession1']; ?></h3>
										        <div class="resume-company-name ml-auto"><?php echo $fetch_info['c_name1']; ?></div>
										    </div>
										    <div class="resume-position-time"><?php echo $fetch_info['js_year1']; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $fetch_info['details1']; ?></p>
										</div>

								    </article>
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $fetch_info['j_profession2']; ?></h3>
										        <div class="resume-company-name ml-auto"><?php echo $fetch_info['c_name2']; ?></div>
										    </div>
										    <div class="resume-position-time"><?php echo $fetch_info['js_year2']; ?></div>
									    </div>
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $fetch_info['details2']; ?></p>
									    </div>
								    </article>
                                    
                    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">EDUCATION</h2>
						    <div class="resume-section-content">
							    <ul class="list-styled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $fetch_info['degree1']; ?></div>
								        <div class="resume-degree-org"><?php echo $fetch_info['university1']; ?></div>
								        <div class="resume-degree-time"><?php echo $fetch_info['es_year1']; ?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?php echo $fetch_info['degree2']; ?></div>
								        <div class="resume-degree-org"><?php echo $fetch_info['university2']; ?></div>
								        <div class="resume-degree-time"><?php echo $fetch_info['es_year2']; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section>
							    </div>
                  </body>
							    
							    
							    
							    
							    
							    
						    </div>
					    </section>
				    </div>
				    <div class="col-lg-2">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"></h2>
						    <div class="resume-section-content">   
						        
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">SKILLS</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><?php echo $fetch_info['skill1']; ?></li><br>
							            <li class="list-inline-item"><?php echo $fetch_info['skill2']; ?> </span></li><br>
							            <li class="list-inline-item"><?php echo $fetch_info['skill3']; ?> </span></li><br>
							            <li class="list-inline-item"><?php echo $fetch_info['skill4']; ?> </span></li><br>
							            <li class="list-inline-item"><?php echo $fetch_info['skill5']; ?> </span></li><br>
						            </ul>
						        </div>
						    </div>
					    </section>
					    <button onclick="printpage()" id="printpagebutton" class="w3-bottom-left w3-pink">download cv</button>
				    </div>
			    </div>
		    </div>
		    
		    
	    </div>
    </article>  
   
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