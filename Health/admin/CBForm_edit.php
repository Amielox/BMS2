<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
	  $id = $_POST['id'];
	  $firstname = $_POST['firstname'];
	  $lastname = $_POST['lastname'];
	  $middlename = $_POST['middlename'];
	  $suf = $_POST['suf'];
	  $dob = $_POST['dob'];
	  $gender = $_POST['gender'];
	  $email = $_POST['email'];
	  $contno = $_POST['contno'];
	  $category = $_POST['category'];
	  $priority = $_POST['priority'];
	  $allergy = $_POST['allergy'];
	  $comorbidities = $_POST['comorbidities'];
	  $sched = $_POST['sched'];
	  $site = $_POST['site'];


		$sql = "SELECT * FROM covidbooster WHERE id=$id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE covidbooster SET firstname = '$firstname', lastname = '$lastname', middlename = '$middlename', suffix = '$suf', birthdate = '$dob', gender = '$gender', email = '$email', contact_num = '$contno', category = '$category', priority = '$priority', allergy = '$allergy', comorbidities = '$comorbidities', sched = '$sched', site = '$site'  WHERE id =$id";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: CBResult.php');

?>