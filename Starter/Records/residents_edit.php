<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$age = $_POST['age'];
		$birthdate = $_POST['birthdate'];
		$birthplace = $_POST['birthplace'];
		$gender = $_POST['gender'];
		$civilstatus = $_POST['civilstatus'];
		$street = $_POST['street'];
		$address = $_POST['address'];
		$landownership = $_POST['landownership'];
		$puroknumber = $_POST['puroknumber'];
		$lengthstay = $_POST['lengthstay'];
		$houseownership = $_POST['houseownership'];
		$totalhousehold = $_POST['totalhousehold'];
		$religion = $_POST['religion'];
		$nationality = $_POST['nationality'];
		$phonenumber = $_POST['phonenumber'];	
		$email = $_POST['email'];
		$formeraddress = $_POST['formeraddress'];
		$disableperson = $_POST['disableperson'];
		$registered = $_POST['registered'];
		$barangayidno = $_POST['barangayidno'];

		$sql = "SELECT * FROM residents WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE residents SET firstname = '$firstname', lastname = '$lastname', middlename = '$middlename', age = '$age', birthdate = '$birthdate', birthplace = '$birthplace',gender = '$gender', civilstatus = '$civilstatus', street = '$street', address = '$address', landownership = '$landownership', puroknumber = '$puroknumber', 
		lengthstay = '$lengthstay', houseownership = '$houseownership', totalhousehold = '$totalhousehold', religion = '$religion', nationality = '$nationality', phonenumber = '$phonenumber', email = '$email', formeraddress = '$formeraddress', disableperson = '$disableperson', registered = '$registered', barangayidno = '$barangayidno'  WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Residents updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: residents.php');

?>