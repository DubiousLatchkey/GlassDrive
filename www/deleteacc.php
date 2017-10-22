<?php
$username=$_GET['username'];
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
	
$query="delete from user where username = '{$username}'";
$checkUsername=mysqli_query($connection,$query);
setcookie("username", null);

$loc = "Location: home.php";
header($loc);

?>