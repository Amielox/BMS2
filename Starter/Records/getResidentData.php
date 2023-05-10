<?php
include 'includes/conn.php'; 
//$id=$_POST['id'];
//$result = mysqli_query ($conn, "SELECT * FROM book WHERE bstatus='Available' AND bookid LIKE '$bookid1%' ");
$result = mysqli_query ($conn, "SELECT * FROM residents WHERE id= '{$_POST['id']}' ");
$row = mysqli_fetch_assoc($result);

$lastname = "";
$firstname = "";
$id = "";

if(mysqli_num_rows($result))
{
    $id = "$row[id]";
    $lastname =  "$row[lastname], $row[firstname] $row[middlename]";
}
echo json_encode(array("fullnamex" => $lastname,"residentnox" => $id));
?>