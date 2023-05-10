<?php
	include 'includes/session.php';

	if(isset($_POST['view'])){
        $residentid = $_POST['residentid'];
        $fullname = $_POST['fullname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $contno = $_POST['contno'];
        $address = $_POST['address'];

		$sql = "SELECT * FROM residents WHERE residentid = $residentid";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
	}

	header('location: HealthView.php');

?>