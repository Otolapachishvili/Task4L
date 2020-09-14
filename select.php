<?php 
	$server="localhost";
	$username="root";
	$password="";
	$db="week1_m19";

	$conn= new mysqli($server,$username,$password,$db);
	if ($conn->connect_error) {
		die("connection failed");

	}
	$sql="SELECT * FROM `users` WHERE 1";
	$result=$conn->query($sql);
	while ($row=$result->fetch_assoc()) { 
		echo $row["name"];
	}


?>