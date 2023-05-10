<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		$middlename = $_POST['middlename'];
		$suffix = $_POST['suffix'];
		$datebirth = $_POST['datebirth'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$contact_num = $_POST['contact_num'];
		$category = $_POST['category'];
		$priority = $_POST['priority'];
		$allergy = $_POST['allergy'];
		$comorbidities = $_POST['comorbidities'];

		$sql = "INSERT INTO cbarchive (id, firstname, lastname, middlename, suffix, birthdate, gender, email, contact_num, category, priority, allergy, comorbidities) 
		VALUES ('$id', '$firstname', '$surname', '$middlename', '$suffix', '$datebirth', '$gender', '$email', '$contact_num', '$category', '$priority', '$allergy', '$comorbidities');";
		
		$sql .= "DELETE FROM covidbooster WHERE id = '$id';";

		
		if($conn->multi_query($sql)){
			$_SESSION['success'] = 'Deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: CBResult.php');
	
?>