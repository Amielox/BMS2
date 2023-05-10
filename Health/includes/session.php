<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['residentid']) || trim($_SESSION['residentid']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM admin WHERE residentid = '".$_SESSION['residentid']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>