<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "barangaysystem");

if(isset($_POST['submit']))
{   

    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $dob = date('Y-m-d',strtotime($_POST['dob']));
    $firstname = $_POST['firstname'];
    $pob = $_POST['pob'];
    $suf = $_POST['suf'];
    $email = $_POST['email'];
    $middlename = $_POST['middlename'];
    $gender = $_POST['gender'];
    $contno = $_POST['contno'];
    $nationality = $_POST['nationality'];
    $cs = $_POST['cs'];
    $religion = $_POST['religion'];
    $occupation = $_POST['occupation'];
    $user_type ="user";
    $filename = $_FILES['photo']['name'];
    if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
              
    $set = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $residentid = substr(str_shuffle($set), 0, 6);
    
    // $di = date('Y-m-d',strtotime($_POST['di']));
    if($religion == NULL || $email == NULL)
    {
        $_SESSION['status'] = "Please fill the required fields";
        header("Location: registration_form.php");
    }

    $query = "INSERT INTO residents (residentid,lastname,address,dob,firstname,pob,email,password,middlename,gender,contno,suf,nationality,cs,religion,occupation,user_type,photo) VALUES ('$residentid','$lastname','$address','$dob','$firstname','$pob','$email','$password','$middlename','$gender','$contno','$suf','$nationality','$cs','$religion','$occupation','$user_type','$filename')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Submitted Succesfully";
        header("Location: registration_form.php");
    }
    else
    {
        $_SESSION['status'] = "Something Went Wrong";
        header("Location: registration_form.php");
    }
}


?>