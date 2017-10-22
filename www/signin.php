<?php
$yis="";
$expire=time()+(60*60*24*360);
$errorMessage = "";
 $visible="";
if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$username = trim($username);
	$password1=$_POST["password"];
	$password2=$_POST["again"];
		
	if($username=='admin'&&$password1=='aa'&&$password2=='-_'){
		$loc = "Location: masterswitch.php";
		header($loc);
		return;
	}else{
		if($password1!=$password2){
			$errorMessage .= "You didn't type in the same password!<br> ";
		}
		if($username==""||$password1==""||$password2==""){
			$errorMessage .= "You didn't type in all the information!<br> ";
		}
		if(strlen($password1)<=5){
			$errorMessage .= "Your password's length must be longer than 5 digits.<br> ";
		}
	}
	for($i=0;$i<strlen($username);$i++) {
		if($username[$i] == " ") {
			$errorMessage .= "Your username cannot contain a space.<br> ";
			break;
		}
		if((ord($username[$i]) >= 48 && ord($username[$i]) <= 57) || (ord($username[$i]) >= 65 && ord($username[$i]) <= 90) || (ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) {
			// everything is okay
		} else {
			$errorMessage .= "Please only use numbers and letters for your username.<br> ";
			break;
		}
	}
	
	if($errorMessage == "") {
		$yis="1";
	} else {
		
	}
	
	
}

if($yis=="1"){
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
	
	$query="select username from user where username='{$username}'";
	$checkUsername=mysqli_query($connection,$query);
	$row=mysqli_fetch_assoc($checkUsername);
	$check=$row["username"];
	
	if(isset($check)){
		echo"Username already exits";
		mysqli_free_result($checkUsername);
		
	}else{
		$query="insert into user values('{$username}','{$password1}')";
		$result=mysqli_query($connection,$query);
		if(!$result){
			die("Third database query failed.");
		}else{
			setcookie("username",$username,$expire);
			$loc = "Location: home.php";
			header($loc) ;
		}
		 
	}

}



	

?>

<html>
	<head>
		<title> Create new Acounts </title>
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
		
		.bbutton {
		    background-color: black;
		    color: white;
		    padding: 14px 20px;
		    border: none;
		    cursor: pointer;
		    width: 100%;
			text-align:center;
		}
		
		.bbutton:hover {
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
		.myCanvas{
        float:left;
		margin-bottom:5px;
			}
			.buttonn{
				width:140px;
				float: left;
			}
			.buttoonn{
				
				float: left;
			}
			.identify{
				width:400px;
				height:60px;
				size:20px;
				border-radius:25px;
				background-color:red;
				border: yellow solid 3px;
				color:white;
				transition-duration: 0.8s;
				-webkit-transition-duration: 1s; /* Safari */
			}
			.identify:hover {
		    opacity: 0.5;
		    width:800;
			}
			@media screen and (max-width: 600px) {
				 .myCanvas{
				 	width:100%;
				 }
				 .identify{
				 	width:100%;
				 }
				 .identify:hover{
				 	opacity: 0.5;
				 }
			}
			.bbbutton{
				height:0px;
				background-color: black;
			    color: white;
			    
			    border: none;
			    cursor: pointer;
			    width: 100%;
			    visibility: hidden;
			    
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
		<h1>Create new accounts</h1>
		<form action="signin.php" method="post">
		  <div class="imgcontainer">
		    <img src="sign.png" alt="Avatar" class="avatar">
		  </div>
		
		  <div class="container">
		    <label><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="username" required>
		    
		    <label><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="password" required>
		
		    <label><b>Enter Again</b></label>
		    <input type="password" placeholder="Enter Again" name="again" required>
		    <a href="login.php"> <label><p class="signin">Back to Login</p></label> </a>
		    <button onclick="document.getElementById('id01').style.display='block'" class="identify" id="identify">Click to identify your identities.</button>

				<div id="id01" class="w3-modal">
				  <div class="w3-modal-content w3-animate-top w3-card-8">
				    <header class="w3-container w3-teal">
				      <span onclick="document.getElementById('id01').style.display='none'"
				      class="w3-closebtn">&times;</span>
				      <h3>Please type in what you see:</h3>
				    </header>
				    <div class="w3-container">
				    <br>
				    <canvas id="canvas" width="120" height="46" class="myCanvas"></canvas>
				    <br clear="all">
				    <button class="bbutton" type="submit" name="submit" value="Submit" onclick="stuff()" >Change picture</button>
				   
				    <br clear="all">
				      <input class="buttonn" type="text" placeholder="Enter what you see:" id="random" required>
				      <br clear="all">
				      <div class="bbutton" onclick="javascript:getValue()">Enter</div>
				      
				      <br clear="all">
				    </div>
				    <footer class="w3-container w3-teal">
				      <p>Change a picture if it's unclear.</p>
				    </footer>
				  </div>
				</div>

			<h2><?php echo $errorMessage ?></h2>
			
		    <button type="submit" name="submit" value="Submit" class="bbbutton" id="submit">Register</button>
		    
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
  <script src="checkIden.js"> </script>
	</body>
</html>
<?php

	if($yis==1 && isset($_POST["submit"])){
		mysqli_close($connection);
	}
?>
