<?php 
	require_once("db.php");
	
		//$name=mysqli_real_escape_string($conn,$_GET["name"]);
	$sql="UPDATE `users` SET `password`='randompwd' WHERE `id` =2";
	if ($conn->query($sql) === TRUE) {
		echo "updated ";
	}
	else{
		echo "error". $conn->error;
	}
	
?>