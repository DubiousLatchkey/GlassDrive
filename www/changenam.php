<?php
$expire=time()+(60*60*24*360);
$username=$_GET['username'];
$newname=$_GET['new'];

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
	
$query="update user set '{$username}'='{$newname}' where username='{$username}' ";
$checkUsername=mysqli_query($connection,$query);
setcookie("username",$newname,$expire);

$loc = "Location: home.php";
header($loc);

?>