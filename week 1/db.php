<?php 
	$server="localhost";
	$username="root";
	$password="";
	$db="week1_m19";

	$conn= new mysqli($server,$username,$password,$db);
	if ($conn->connect_error) {
		die("connection failed");

	}
?>