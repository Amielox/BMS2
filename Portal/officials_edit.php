<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$position = $_POST['position'];
        $term = $_POST['term'];

		$sql = "SELECT * FROM webofficial WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

        $sql = "UPDATE webofficial SET name = '$name', position = '$position', term = '$term' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Officials updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: official.php');

?>