<style>

:root{
    --blue: #2980b9;
}
body,h1,h2,h3,h4,h5,h6 {
    font-family: "Open Sans", sans-serif
}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: linear-gradient( 114.2deg,  rgba(121,194,243,1) 22.6%, rgba(255,180,239,1) 67.7% );
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

.ico {
    margin:0 1rem;
   font-size: large;
   font-weight: 600;
    background-image: linear-gradient(45deg, deeppink, var(--blue));
    filter: drop-shadow(0 20px 30px #91e2f533);
    color: black;
   -webkit-text-fill-color: transparent;
   -webkit-background-clip: text;
   -webkit-box-decoration-break: clone;
   text-transform: uppercase;
}
</style>

<div class="w3-top">

    <div class="w3-bar w3-white w3-card" id="navbar">
        
        <a href="index.php" class="ico w3-bar-item w3-button w3-wide">RESUME BUDDY</a>

        <!-- Right-sided navbar links -->
         <div class="w3-right w3-hide-small" >
          <a href="index.php" class="ico w3-bar-item w3-button">HOME</a>
          <a href="profile.php" class="ico w3-bar-item w3-button"> PROFILE</a>
          <a href="samples.php" class="ico w3-bar-item w3-button">SAMPLES</a>
          <a href="templates.php" class="ico w3-bar-item w3-button">TEMPLATE</a>
         </div>

          <!-- Hide right-floated links on small screens and replace them with a menu icon -->

          <a href="javascript:void(0)" class="ico w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
          <i class="fa fa-bars"></i>
          </a>
         </div>
      </div>

      <!-- Sidebar on small screens when clicking the menu icon -->
         <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="ico w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
            <a href="index.php" onclick="w3_close()" class="ico w3-bar-item w3-button">HOME</a>
            <a href="profile.php" onclick="w3_close()" class="ico w3-bar-item w3-button">PROFILE</a>
            <a href="login.php" onclick="w3_close()" class="ico w3-bar-item w3-button">LOGIN</a>
            <a href="templates.php" onclick="w3_close()" class="ico w3-bar-item w3-button">TEMPLATE</a>
         </nav>


<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>