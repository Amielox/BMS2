<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		//print_r($_POST);
		$name = $_POST['name'];
		$position = $_POST['position'];
		$term = $_POST['term'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$filename);	
		}

		$sql = "INSERT INTO webofficial (name, position, term, photo) 
		VALUES ('$name','$position', '$term', '$filename')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Officials added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: official.php');
?>