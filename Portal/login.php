<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM residents WHERE email = '$email'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the User ID';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
			//	$_SESSION['admin'] = $row['id'];
       
		$_SESSION['residentid'] = $row['residentid'];
				$_SESSION['lastname'] = $row['lastname'];
				$_SESSION['firstname'] = $row['firstname'];   
				$_SESSION['gender'] = $row['gender'];
				$_SESSION['dob'] = $row['dob'];
				$_SESSION['contno'] = $row['contno'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['purok'] = $row['puroknumber'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: portal.php');

?>