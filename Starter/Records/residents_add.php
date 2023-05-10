<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		//print_r($_POST);
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
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO residents (firstname, lastname, middlename, age, birthdate, birthplace, gender, civilstatus, street, address, landownership, puroknumber, lengthstay, houseownership, totalhousehold, religion, nationality, phonenumber, email, formeraddress, disableperson, registered, barangayidno, photo) 
		VALUES ('$firstname', '$lastname', '$middlename', '$age', '$birthdate', '$birthplace', '$gender', '$civilstatus', '$street', '$address', '$landownership', '$puroknumber', '$lengthstay', '$houseownership', '$totalhousehold', '$religion', '$nationality', '$phonenumber', '$email', '$formeraddress', '$disableperson', '$registered', '$barangayidno', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Resident added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>