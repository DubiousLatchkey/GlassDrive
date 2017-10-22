<?php
$expire=time()+(60*60*24*360);
$error="";
$yiiish=0;
$table="user";
	if(isset($_POST["submit"])){
		$username=$_POST["username"];
		$username = trim($username);
		$password2=$_POST["again"];
		
		$errorMessage = "";
		if($username==""||$password2==""){
			echo "U didn't type in all the information! ";
		}else{
			$yiiish=1;
		}
	}
	
	if($yiiish==1){
		$host="101.132.130.229";
		$user="robin";
		$pass="robin_13579";
		$database="robin_game";
		$connection=mysqli_connect($host,$user,$pass,$database);
		
		if(mysqli_connect_errno()){
			die("Database connection fail:".
			mysqli_connect_error().
			"(".mysqli_connect_error().")"
			);
		}
		
		$query="select username, password from user where username='{$username}'";
		$checkUsername=mysqli_query($connection,$query);
		$row=mysqli_fetch_assoc($checkUsername);
		$userCheck=$row["username"];
		$passCheck=$row["password"];
		
		//$query="select password from score where username='{$username}'";
		//$checkUsername=mysqli_query($connection,$query);
		//$row=mysqli_fetch_assoc($checkUsername);
		
		if(isset($userCheck)&&$password2==$passCheck){
			setcookie("username",$username,$expire);
			//echo $_COOKIE['username'];
			$loc = "Location: home.php";
			header($loc);
		}else{
			$error= "There is a mistake on your Log in.";
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<title> Log In </title>
		<!--<link rel="stylesheet" href="font-awesome.min.css">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="w3.css">
		<style>
		html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
		.w3-sidenav a,.w3-sidenav h4{padding:12px;}
		.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
		.w3-theme-l5 {color:#000 !important; background-color:#f0f0f0 !important}
		.w3-theme-l4 {color:#000 !important; background-color:#cccccc !important}
		.w3-theme-l3 {color:#fff !important; background-color:#999999 !important}
		.w3-theme-l2 {color:#fff !important; background-color:#666666 !important}
		.w3-theme-l1 {color:#fff !important; background-color:#333333 !important}
		.w3-theme-d1 {color:#fff !important; background-color:#000000 !important}
		.w3-theme-d2 {color:#fff !important; background-color:#000000 !important}
		.w3-theme-d3 {color:#fff !important; background-color:#000000 !important}
		.w3-theme-d4 {color:#fff !important; background-color:#000000 !important}
		.w3-theme-d5 {color:#fff !important; background-color:#000000 !important}
		
		.w3-theme-light {color:#000 !important; background-color:#f0f0f0 !important}
		.w3-theme-dark {color:#fff !important; background-color:#000000 !important}
		.w3-theme-action {color:#fff !important; background-color:#000000 !important}
		
		.w3-theme {color:#fff !important; background-color:#000000 !important}
		.w3-text-theme {color:#000000 !important}
		.w3-theme-border {border-color:#000000 !important}
		.w3-hover-theme:hover {color:#fff !important; background-color:#000000 !important}
		body{
			margin:0px;
		}
		form {
			margin:10px;
		    border: 3px solid #f1f1f1;
		}
		
		input[type=text], input[type=password] {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}
		
		button {
		    background-color: black;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 100%;
		}
		
		button:hover {
		    opacity: 0.8;
		}
		
		.cancelbtn {
		    width: auto;
		    padding: 10px 18px;
		    background-color: #f44336;
		}
		
		.imgcontainer {
		    text-align: center;
		    margin: 24px 0 12px 0;
		}
		
		img.avatar {
		    width: 30%;
		    border-radius: 50%;
		}
		
		.container {
		    padding: 16px;
		}
		
		span.psw {
		    float: right;
		    padding-top: 16px;
		}
		
		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
		    span.psw {
		       display: block;
		       float: none;
		    }
		    .cancelbtn {
		       width: 100%;
		    }
		}
		h2{
			color:red;
		}
		.top{
			padding-left:10px;
			height:50px;
			width:100%;
			background-color:black;
			color:white;
			position:fixed;
			top:0px;
			left:0px;
		}
		a:visited {
			color: white;
		}
		h1{
			margin-top:60px;
			margin-left:10px;
		}
		.signin{
			color:black;
			transition-duration: 0.5s;
			-webkit-transition-duration: 0.5s; /* Safari */
		}
		.signin:hover{
			font-size:20px;
		}
		</style>
	</head>
<body>
	<ul class="w3-navbar w3-theme w3-top w3-left-align w3-large" style="z-index:4;">
		  <li class="w3-opennav w3-right w3-hide-large">
		    
		  </li>
		  <li><a href="index.php" class="w3-theme-l1">Home</a></li>
		</ul>
	<h1>Login</h1>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="again" required>
        
	<h2><?php echo $error ?></h2>
	<a href="signin.php"> <label><p class="signin">Don't have an account? Create one!</p></label> </a>
    <button type="submit" name="submit" value="Submit">Login</button>
  </div>
</form>
<div class="w3-row" style="background-color:#595959">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1>Hello! Once you log in, you could store your interested files in GlassDrive!</h1>
    </div>
    <div class="w3-padding-64">
      <p>Finish in: Dulwich School</p>
      <p>This is made during HakD competetion,</p>
      <p>And go check out other ones' projects!</p>
    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>Shanghai Dulwich </h1>
      <img src="dulwich.png" class="w3-margin w3-circle" alt="Person" style="width:50%">
      <div class="w3-left-align w3-padding-xxlarge">
        <h3 style="text-align:center;">HaKD</h3>
        
      </div>
    </div>
  </div>
</div>
<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
  
  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Tip: Make sure your device and GlassDrive are connected before transmittion!</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Finished in: Dulwich</p>
    </div>
  </footer>
 
</body>
</html>
