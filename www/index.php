<?php
$username="";
if(isset($_COOKIE["username"])){
  header("Location: home.php");
}else{
  //stay in the page
}
?>
<!DOCTYPE html>
<html>
<title>GlassDrive</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Header -->
<div class="w3-container w3-red w3-center w3-padding-128">
  <h1 class="w3-margin w3-jumbo">GLASSDRIVE</h1>
  <p class="w3-xlarge">Record your life on your glasses.</p>
  <a href="login.php"><button class="w3-btn w3-padding-16 w3-large w3-margin-top" >Get Started</button></a>
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>"I want to share a file with you"</h1>
      <h5 class="w3-padding-32">Cloud Storage is slow, and who wants to give their data away to some 3rd party?  USBs?  Sorry if you're on a new USB-C computer.  Airdrop?  It works for everyone except the majority of people on Windows.  If only there were a way to bring your files with you and let everyone access them.  Well now there is with GlassDrive.  GlassDrive is a portable wireless device that anyone can connect to over Wi-Fi.</h5>

      <p class="w3-text-grey">From this locally-hosted page, you can access the file storage on board the device.  With the correct credentials, you can can both upload and download files from here.  The files are stored on the GlassDrive device, so you can access the files on the device wherever you bring it.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Bluetooth</h1>
      <h5 class="w3-padding-32">If you happen to need an internet connection while using GlassDrive, you can also use Bluetooth File Transfer to connect to the device using Bluetooth.  After pairing, you can browse, download, and upload files to and from the device.</h5>
      </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
   <a href="https://www.facebook.com" class="w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
   <a href="https://www.pinterest.de" class="w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
   <a href="https://twitter.com" class="w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>
   <a href="https://www.flickr.com" class="w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>
   <a href="https://www.linkedin.com" class="w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
 </div>
 <p>Powered by <a href="http://hakd.online" target="_blank">HakD</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_start_page&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2016 15:23:29 GMT -->
</html>
