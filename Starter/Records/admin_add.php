<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		print_r($_POST);
		$username = $_POST['username'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$category = $_POST['category'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO admin (username, password, lastname, firstname, category, photo) 
		VALUES ('$username','$password', '$lastname', '$firstname', '$category', '$filename')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Admin added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: admin.php');
?>