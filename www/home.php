<?php
$username="";
if(isset($_COOKIE["username"])){
  $username=$_COOKIE["username"];
}else{
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="font-awesome.min.css">
<script type="text/javascript">

function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.width = "300px";
    document.getElementsByClassName("w3-sidenav")[0].style.textAlign = "center";
    document.getElementsByClassName("w3-sidenav")[0].style.fontSize = "40px";
    document.getElementsByClassName("w3-sidenav")[0].style.paddingTop = "10%";
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
var newname="";
function changenam(){
    newname=prompt("What do you want your new name to be?","Type your new name here please.");
    window.location.href="changenam.php?name="+"<?php echo $username; ?>"+"&new="+newname;
}
</script>
</head>
<body id="myPage">

<!-- Side Navigation on click -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="javascript:void(0)">Link 1</a>
  <a href="javascript:void(0)">Link 2</a>
  <a href="javascript:void(0)">Link 3</a>
  <a href="javascript:void(0)">Link 4</a>
  <a href="javascript:void(0)">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="home.php" class="w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a></li>
  <li class="w3-hide-small"><a href="" class="w3-hover-white"><?php echo "Hello, ".$username."." ?></a></li>
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="#" class="w3-hover-white" title="Notifications">Log Out <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="logout.php">Confirm</a>
    </div>
  </li>
  <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-teal" title="Search"><i class="fa fa-search"></i></a></li>
 </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:43px;">
  <ul class="w3-navbar w3-left-align w3-large w3-theme">
    <li><a href="logout.php">Log Out</a></lsi>
  </ul>
</div>

<div class="w3-display-container w3-animate-opacity">
  <img class="testimg" src="pi.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">My Account</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
      <header class="w3-container w3-teal">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn"><i class="fa fa-remove"></i></span>
        <h4><?php echo "Nice to see you, ".$username."," ?></h4>
        <h5>Here you can control your account <i class="fa fa-smile-o"></i> !</h5>
      </header>
      <div class="w3-container">
        <h4>Here you can...</h4>
        <a class="w3-btn" href="javascript:changenam();">Change your account name</a><br><br>
        <a class="w3-btn" href="Deleteacc.php?username="+"<?php echo $username; ?>">Delete this account     </a><br><br>
      </div>
      <footer class="w3-container w3-teal">
        <p>HakD Dulwich 2017</p>
      </footer>
    </div>
</div>

<!-- Container -->
<div class="w3-container w3-padding-64 w3-center">
<h2>Online GlassDrives</h2>
<p>Make sure you've connected to the same wifi as the GlassDrives do:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <a href="transfer.php"> <img src="detected.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"> </a>
  <h3>Detected: 190.168.1.1</h3>
</div>

<div class="w3-quarter">
  <img src="nothing.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Not Detected</h3>
</div>

<div class="w3-quarter">
  <img src="nothing.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Not Detected</h3>
</div>

<div class="w3-quarter">
  <img src="nothing.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Not Detected</h3>
</div>

</div>
</div>

<!-- Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1">

<div class="w3-quarter">
<h2>Our Portfolio</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="img_fjords.jpg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <h3>Customer 1</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="img_lights.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>Customer 2</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="img_mountains.jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>Customer 3</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-btn-floating-large w3-teal" style="position:absolute;top:-28px;right:24px;z-index:0;">
  <i class="fa fa-plus"></i></a>
</div>

<div class="w3-row-padding w3-center w3-padding-64">
    <h2>PRICING</h2>
    <p>Choose a pricing plan that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>
</div>

<!-- Container -->
<div class="w3-container w3-padding-64 w3-theme-l5">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white">
      <div class="w3-group">
        <label class="w3-label">Name</label>
        <input class="w3-input" type="text">
      </div>
      <div class="w3-group">
        <label class="w3-label">Email</label>
        <input class="w3-input" type="text">
      </div>
      <div class="w3-group">
        <label class="w3-label">Subject</label>
        <input class="w3-input" type="text">
      </div>
      <input class="w3-check" type="checkbox" checked>
      <label class="w3-validate">I Like it!</label>
      <button type="button" class="w3-btn w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="default.html" target="_blank">w3.css</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<!-- Script For Side Navigation -->


</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_website&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2016 15:23:29 GMT -->
</html>
