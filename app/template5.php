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
<html lang="et" >
<head>
  <meta charset="UTF-8">
  <title>Portfolio</title>
</head>
<body>
<html lang="et" >
   <head>
      <title>RESUME BUDDY</title>
      <meta name="viewport" content="width=device-width" />
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
  
      <style>
         body {
         background: rgb(204,204,204); 
         }
         page {
         background: #fff;
         display: block;
         margin: 0 auto;
         margin-bottom: 5mm;
         margin-top: 5mm;
         }
         page[size="A4"] {  
         width: 210mm;
         height: 297mm;
         }
         @page {
         size: 210mm 297mm;
         margin: 0; 
         }
         @media print { /* Print settings */
         html, body, page {
         width: 210mm;
         height:100%;
         margin: 0 !important; 
         padding: 0 !important;
         overflow: hidden; 
         }
         .no-overflow{
         overflow: hidden; 
         }
         #Header, #Footer { 
         display: none !important;
         }
         button {
         display: none;
         }
         size: A4 portrait;
         }
         html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video {
         border:0;
         font:inherit;
         font-size:100%;
         margin:0;
         padding:0;
         vertical-align:baseline;
         }
         article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
         display:block;
         }
         html, body {font-family: 'Lato', helvetica, arial, sans-serif; font-size: 11pt; color: #222;}
         .clear {clear: both;}
         p {
         line-height: 15pt;
         margin-bottom: 4mm;
         color: #444;
         word-break: break-word;
         }
         a {
            text-decoration: none;
         }
         a:hover { 
            text-decoration:underline;
         }
         a, .fa-check, .fa-arrow-right {
         color: #da2d2d;
         }
         .cv {
         width: 210mm;
         height: 297mm;
         background: #fff;
         }
         .mainDetails {
         padding: 8mm 0 0 8mm;
         background: #fff;
         }
         #name {
         float: left;
         text-transform: uppercase;
         padding: 8.5mm 0 0 7mm;
         }
         #name h1 {
         font-size: 33pt;
         font-weight: 400;
         font-family: 'Oswald', Helvetica, Arial, sans-serif;
         line-height: 38pt;
         color:#da2d2d;
         }
         #name h2 {
         font-size: 18pt;
         font-family: 'Oswald', Helvetica, Arial, sans-serif;
         line-height: 20pt;
         }
         h3 {
         font-size: 18pt;
         font-family: 'Oswald', Helvetica, Arial, sans-serif;
         line-height: 20pt;
         }
         #mainArea, #mainAreaTwo {
         padding: 0 8mm;
         }
         #headshot {
         width: 46mm;
         float: left;
         margin-top:10mm;
         margin-left:-.5mm;
         }
         #headshot img {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border:2px solid var(--black);
            object-fit: cover;
            margin-bottom: 10px;
         -webkit-border-radius: 50%;
         border-radius: 50%;
         }
         .contactDetails {
         float:right;
         margin:10mm 8mm 0  0;
         float: right;
         }
         .contactDetails ul { 
         list-style-type: none;
         font-family: 'Oswald', Helvetica, Arial, sans-serif;
         }
         .contactDetails ul li {
         line-height: 24pt;
         color: #444;
         }
         .contactDetails ul li a, a[href^=tel] {
         color: #444; 
         padding: 4px 8px;
         text-decoration: none;
         -webkit-transition: all .1s ease-in;
         -moz-transition: all .1s ease-in;
         -o-transition: all .1s ease-in;
         -ms-transition: all .1s ease-in;
         transition: all .1s ease-in;
         }
         .contactDetails ul li a:hover { 
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
         color:#da2d2d;
         }
         .icon {
         font-size: 14pt;
         }
         .bold{
         font-weight:bold;
         }
         section {
         border-top: 1mm dotted #444;
         padding: 4mm 0 0 0;
         }
         section:first-child {
         border-top: 0;
         padding: 8mm 0 0 0;
         }
         section:last-child {
         padding: 4mm 0 0 0;
         }
         .sectionTitle {
         float: left;
         width: 50mm;
         margin-bottom:6mm; 
         }
         .sectionContent {
         float: right;
         width: 141mm;
         }
         .sectionTitle h1 {
         font-family: 'Oswald', Helvetica, Arial, sans-serif;
         font-weight: 400;
         text-transform: uppercase;
         font-size: 18pt;
         color: #da2d2d;
         }
         .sectionContent h2 {
         font-family: 'Oswald', Helvetica, Arial, sans-serif;
         text-transform: uppercase;
         font-size: 18pt;
         }
         .subDetails {
         font-family: 'Lato', Helvetica, Arial, sans-serif;
         font-size: 11pt;
         font-weight:bold;
         color: #da2d2d;
         }
         .nameDetails {
         font-size: 11pt;
         font-family: 'Lato', Helvetica, Arial, sans-serif;
         color: #444;
         text-transform: lowercase;
         }
         .keySkills {
         list-style-type: none;
         -moz-column-count:3;
         -webkit-column-count:3;
         column-count:3;
         margin-bottom: 4mm;
         font-size: 11pt;
         color: #444;
         line-height: 15pt;
         }
         .keySkills ul li {
         margin-bottom: 6mm;
         }
         .clients {
         list-style-type: none;
         -moz-column-count:1;
         -webkit-column-count:1;
         column-count:1;
         margin-bottom: 4mm;
         font-size: 11pt;
         color: #444;
         line-height: 15pt;
         text-decoration: none;
         }
         .clients ul li {
         margin-bottom: 6mm;
         }
         .list {
         list-style-type: none;
         -moz-column-count:1;
         -webkit-column-count:1;
         column-count:1;
         margin-bottom: 4mm;
         font-size: 11pt;
         color: #444;
         line-height: 15pt;
         }
         button{
         background-color: black;
         width:245px;
         border:none;
         outline:0;
         color: #fff;
         font-family: 'Oswald', Helvetica, Arial, sans-serif;
         font-size: 20px;
         font-weight:bold;
         padding: 8px 20px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         margin: 0px 550px;
         cursor: pointer; 
         text-transform:uppercase
         }
         button:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
         color: #da2d2d;
         }
         @media print
         {    
         .no-print, .no-print *
         {
         display: none !important;
         }
         }
         #button{
         width:210mm;
         height:40px;
         position:fixed;
         z-index: 10;
         background: #da2d2d;
         border-bottom:solid #da2d2d 6px;
         top:0px;
         }
      </style>
   </head>

   <body id="top">
   <?php
         $select_info = mysqli_query($conn, "SELECT * FROM `basic` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_info) > 0){
            while($fetch_info = mysqli_fetch_assoc($select_info)){
      ?>
      <!--Page 1-->
      <page size="A4">
         <div id="button" class="no-print">
            <button type="button" onclick="myFunction()"><span class="button-txt"><i class="fa fa-print" aria-hidden="true"></i>
            &nbsp;Portfolio</span></button>
            <script>
               function myFunction() {
                   window.print();
               }
            </script>
         </div>
         <div class="cv">
            <div id="header">
               <div class="contactDetails">
                  <ul>
                     <li class="icon" title="Kirjuta mulle!"><a href=""><i class="fa fa-envelope">&nbsp;&nbsp;</i> <?php echo $fetch_info['email']; ?></a></li>
                     <li class="icon" title="Helista mulle!"><a href=""><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $fetch_info['phone']; ?>09123456789</a></li>
                 
                  </ul>
               </div>
            </div>
            <div class="mainDetails">
               <div id="headshot">
                  <img id="avatar" src="uploaded_img/<?php echo $fetch_info['image']; ?>" alt="" title="See olen mina" />
               </div>
               <div id="name">
                  <h1><?php echo $fetch_info['name']; ?><span class="nameDetails">&nbsp;&nbsp;</span></h1>
               </div>
               <div class="clear"></div>
            </div>
            <div id="mainArea">
               <section>
                  <article>
                     <div class="sectionTitle">
                        <h3><?php echo $fetch_info['profession']; ?></h3>
                     </div>
                     <div class="sectionContent">
                        <p><?php echo $fetch_info['about']; ?></p>
                     </div>
                  </article>
                  <div class="clear"></div>
               </section>
               <section>
                  <div class="sectionTitle">
                     <h1>Skills</h1>
                  </div>
                  <div class="sectionContent">
                     <ul class="keySkills">
                        <li class="subDetails"></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<?php echo $fetch_info['skill1']; ?></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<?php echo $fetch_info['skill2']; ?></li>
               
                        <li class="subDetails"></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<?php echo $fetch_info['skill3']; ?></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<?php echo $fetch_info['skill4']; ?></li>

                        <li class="subDetails"></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<?php echo $fetch_info['skill5']; ?></li>

                
                     </ul>
                  </div>
                  <div class="clear"></div>
               </section>
               <section>
                  <div class="sectionTitle">
                     <h1>Education</h1>
                  </div>
                  <div class="sectionContent">
                     <ul class="list">
                        <li><span class="subDetails"><?php echo $fetch_info['degree1']; ?></span></li>
                        <li><span class="bold"></span> <?php echo $fetch_info['es_year1']; ?></li>
                       <li><span class="bold"></span><?php echo $fetch_info['university1']; ?></li>
                     </ul>
                  </div>
                  <div class="sectionContent">
                     <ul class="list">
                        <li><span class="subDetails"><?php echo $fetch_info['degree2']; ?></span></li>
                        <li><span class="bold"></span> <?php echo $fetch_info['es_year2']; ?></li>
                       <li><span class="bold"></span><?php echo $fetch_info['university2']; ?></li>
                     </ul>
                  </div>
                  <div class="clear"></div>
               </section>
               <section>
                  <div class="sectionTitle">
                     <h1>Experience</h1>
                  </div>
                  <div class="sectionContent">
                     <ul class="list">
                        <li><span class="subDetails"><?php echo $fetch_info['j_profession1']; ?></span></li>
                        <li><span class="bold"></span> <?php echo $fetch_info['c_name1']; ?></li>
                       <li><span class="bold"></span><?php echo $fetch_info['js_year1']; ?></li>
                       <li><span class="bold"></span><?php echo $fetch_info['details1']; ?></li>
                     </ul>
                  </div>
                  <div class="sectionContent">
                     <ul class="list">
                        <li><span class="subDetails"><?php echo $fetch_info['j_profession2']; ?></span></li>
                        <li><span class="bold"></span> <?php echo $fetch_info['c_name2']; ?></li>
                       <li><span class="bold"></span><?php echo $fetch_info['js_year2']; ?></li>
                       <li><span class="bold"></span><?php echo $fetch_info['details2']; ?></li>
                     </ul>
                  </div>
                  <div class="clear"></div>
               </section>
               <section>
                  <div class="sectionTitle">
                    
                     </ul>
                  </div>
                  <div class="clear"></div>
               </section>
            </div>
         </div>
      </page>
      <?php
         }
      }else{
         echo '<p class="empty">no info added yet!</p>';
      }
      ?>
   </body>
<html>  

