<?php 
	include 'includes/conn.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT * FROM hmf WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
       // print_r($row);

		echo json_encode($row);
	}
?>