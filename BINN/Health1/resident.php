<?php
	include 'includes/session.php';

	if(isset($_POST['submit'])){
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
		$asthma = $_POST['asthma'];
		$cancer = $_POST['cancer'];
		$diabetes = $_POST['diabetes'];
		$hypertension = $_POST['hypertension'];
		$epilepsy = $_POST['epilepsy'];
		$dizziness = $_POST['dizziness'];
		$snoring = $_POST['snoring'];
		$chestpain = $_POST['chestpain'];	
		$abdominalpain = $_POST['abdominalpain'];
		$heartburn = $_POST['heartburn'];
		$fever = $_POST['fever'];
		$headache = $_POST['headache'];
		$vomitting = $_POST['vomitting'];
		$hunger = $_POST['hunger'];
		$rash = $_POST['rash'];
		$insomnia = $_POST['insomnia'];	
		$mens = $_POST['mens'];
		$pregnancies = $_POST['pregnancies'];
		$births = $_POST['births'];
		$birh_control = $_POST['birh_control'];
		$irreg_period = $_POST['irreg_period'];
		$medicine = $_POST['medicine'];
		$medicinetype = $_POST['medicinetype'];
		$allergies = $_POST['allergies'];
		$tobacco = $_POST['tobacco'];
		$drugs = $_POST['drugs'];
		$alcohol = $_POST['alcohol'];

		$sql = "INSERT INTO hmf (firstname, lastname, middlename, age, birthdate, birthplace, gender, civilstatus, street, address, asthma, cancer, diabetes, hypertension, epilepsy, dizziness, snoring, chestpain, abdominalpain, heartburn, fever, headache, vomitting, hunger, rash, insomnia, mens, pregnancies, births, birth_control, irreg_period, medicine, medicinetype, allergies, tobacco, drugs, alcohol) 
		VALUES ('$firstname', '$lastname', '$middlename', '$age', '$birthdate', '$birthplace', '$gender', '$civilstatus', '$street', '$address', '$asthma', '$cancer', '$diabetes', '$hypertension', '$epilepsy', '$dizziness', '$snoring', '$chestpain', '$abdominalpain', '$heartburn', '$fever', '$headache', '$vomitting', '$hunger', '$rash', '$insomnia', '$mens', '$pregnancies', '$births', '$birth_control', '$irreg_period', '$medicine', '$medicinetype', '$allergies', '$tobacco', '$drugs', '$alcohol')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Form recorded successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}

?>