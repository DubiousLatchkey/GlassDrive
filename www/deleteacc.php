<?php
$username=$_GET['username'];
$host="localhost";
$user="robin";
$pass="172/16.3_170";
$database="Robin_Game";
$connection=mysqli_connect($host,$user,$pass,$database);
	
if(mysqli_connect_errno()){
	die("Database connection fail:".
	mysqli_connect_error().
	"(".mysqli_connect_error().")"
	);
}
	
$query="delete from user where username = '{$username}'";
$checkUsername=mysqli_query($connection,$query);

?>