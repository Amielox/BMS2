<?php 
include('connection.php');
// $username = $_POST['username'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $city = $_POST['city'];
// $id = $_POST['id'];

$trackingno = $_POST['trackingno'];
$purpose = $_POST['purpose'];
$status = $_POST['status'];
$sname = $_POST['sname'];
$address = $_POST['address'];
$dob = date('Y-m-d',strtotime($_POST['dob']));
$tin = $_POST['tin'];
$htwt = $_POST['htwt'];
$weight = $_POST['weight'];
$emergency = $_POST['emergency'];
$nos = $_POST['nos'];
$fname = $_POST['fname'];
$pob = $_POST['pob'];
$sssno = $_POST['sssno'];
$color = $_POST['color'];
$email = $_POST['email'];
$rel = $_POST['rel'];
$scontno = $_POST['scontno'];
$mname = $_POST['mname'];
$unt = $_POST['unt'];
$gender = $_POST['gender'];
$precno = $_POST['precno'];
$contno = $_POST['contno'];
$contemer = $_POST['contemer'];
$spooccu = $_POST['spooccu'];
$suf = $_POST['suf'];
$nation = $_POST['nation'];
$cs = $_POST['cs'];
$religion = $_POST['religion'];
$occu = $_POST['occu'];
$id = $_POST['id'];


$sql = "UPDATE `bmss` SET  `trackingno`='$trackingno' , `purpose`= '$purpose', `status`='$status',  `sname`='$sname',  `address`='$address' ,  `dob`='$dob' ,  `tin`='$tin' ,  `htwt`='$htwt' ,  `weight`='$weight' ,  `emergency`='$emergency' ,  `nos`='$nos' ,  `fname`='$fname' ,  `pob`='$pob' ,  `sssno`='$sssno' ,  `color`='$color' ,  `email`='$email' ,  `rel`='$rel' ,  `scontno`='$scontno' ,  `mname`='$mname' ,  `unt`='$unt' ,  `gender`='$gender' ,  `precno`='$precno' ,  `contno`='$contno' ,  `contemer`='$contemer' ,  `spooccu`='$spooccu' ,  `suf`='$suf' ,  `nation`='$nation' ,  `cs`='$cs' ,  `religion`='$religion' ,  `occu`='$occu' WHERE id='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>