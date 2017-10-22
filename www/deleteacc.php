<?php
$username=$_GET['username'];
$host="localhost";
$user="root";
$pass="password";
$database="user_db";
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
