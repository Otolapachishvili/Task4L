<?php 
require_once("db.php");
if (isset($_POST['name'],$_POST["password"])) {
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);
	$sql="SELECT * FROM `users` WHERE `name`='$name' AND `password`='$password'";
	$result=$conn->query($sql);
	if ($result->num_rows>0) {
		echo "yeahy";
	}
}


?>