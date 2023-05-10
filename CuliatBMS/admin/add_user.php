<?php 
include('connection.php');


// $username = $_POST['username'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $city = $_POST['city'];

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
$reason = $_POST['reason'];

$sql = "INSERT INTO `bmss` (`trackingno`,`purpose`,`status`,`sname`,`address`,`dob`,`tin`,`htwt`,`weight`,`emergency`,`nos`,`fname`,`pob`,`sssno`,`color`,`email`,`rel`,`scontno`,`mname`,`unt`,`gender`,`precno`,`contno`,`contemer`,`spooccu`,`suf`,`nation`,`cs`,`religion`,`occu`,`reason`,`di`) values ('$trackingno','$purpose','$status','$sname','$address','$dob','$tin','$htwt','$weight','$emergency','$nos','$fname','$pob','$sssno','$color','$email','$rel','$scontno','$mname','$unt','$gender','$precno','$contno','$contemer','$spooccu','$suf','$nation','$cs','$religion','$occu','$reason',NOW())";
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