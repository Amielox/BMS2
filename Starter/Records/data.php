<?php
header('Content-Type: application/json');

$conn = mysqli_connect('localhost', 'root', '',"barangaysystem");

$sqlQuery = "SELECT year,population FROM census ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>