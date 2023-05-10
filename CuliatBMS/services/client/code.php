<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "barangaysystem");

if(isset($_POST['submit_request']))
{   
    $trackingno = $_POST['trackingno'];
    $nor = $_POST['no'];
    $purpose = $_POST['purpose'];
    $residentid = $_POST['residentid'];
    $purokno = $_POST['purokno'];
    $status = "Pending";
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
    // $di = date('Y-m-d',strtotime($_POST['di']));

    if($trackingno == NULL || $purpose == NULL || $status == NULL || $sname == NULL || $address == NULL || $dob == NULL || $emergency == NULL || $fname == NULL || $pob == NULL || $email == NULL || $rel == NULL || $mname == NULL || $unt == NULL || $gender == NULL || $precno == NULL || $contno == NULL || $contemer == NULL || $suf == NULL || $nation == NULL || $cs == NULL || $religion == NULL || $occu == NULL)
    {
        $_SESSION['status'] = "Please fill the required fields";
        header("Location: index.php");
    }

    $query = "INSERT INTO bmss (trackingno,residentid,purokno,no,purpose,status,sname,address,dob,tin,htwt,weight,emergency,nos,fname,pob,sssno,color,email,rel,scontno,mname,unt,gender,precno,contno,contemer,spooccu,suf,nation,cs,religion,occu,di,reason) VALUES ('$trackingno','$residentid','$purokno','$nor','$purpose','$status','$sname','$address','$dob','$tin','$htwt','$weight','$emergency','$nos','$fname','$pob','$sssno','$color','$email','$rel','$scontno','$mname','$unt','$gender','$precno','$contno','$contemer','$spooccu','$suf','$nation','$cs','$religion','$occu',NOW(),'$reason')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Submitted Succesfully";
        header("Location: ../../../Portal/home.php");
    }
    else
    {
        $_SESSION['status'] = "Something Went Wrong";
        header("Location: ../../../Portal/home.php");
    }
}


?>