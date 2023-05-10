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

		<?php
		$sql = "DELETE * FROM covidbooster";
		$query = $conn->query($sql);
		?>
	}

	header('location: CBResult.php');
	
?>