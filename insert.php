<?php 
	require_once("db.php");
	if (isset($_GET["name"])) {
		$name=mysqli_real_escape_string($conn,$_GET["name"]);
		$sql="INSERT INTO `users`(`name`, `password`) 
		VALUES ('$name','pwd')";
		if ($conn->query($sql) === TRUE) {
			echo "success";
		}
		else{
			echo "error". $conn->error;
		}
	}
?>