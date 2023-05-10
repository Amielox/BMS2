<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $surname = mysqli_real_escape_string($conn, $_POST['surname']);
   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
   $suffix = mysqli_real_escape_string($conn, $_POST['suffix']);
   $placebirth = mysqli_real_escape_string($conn, $_POST['placebirth']);
   $datebirth = mysqli_real_escape_string($conn, $_POST['datebirth']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $religion = mysqli_real_escape_string($conn, $_POST['religion']);
   $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
   $civilstatus = mysqli_real_escape_string($conn, $_POST['civilstatus']);
   $perma_add = mysqli_real_escape_string($conn, $_POST['perma_add']);
   $contact_num = mysqli_real_escape_string($conn, $_POST['contact_num']);
   $user_type = $_POST['user_type'];



   $select = " SELECT * FROM reg_form WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO reg_form (email, password, cpassword, surname, firstname, middlename, suffix, placebirth, datebirth, gender, religion, nationality, civilstatus, perma_add, contact_num	) VALUES('$email','$password','$cpassword','$surname','$firstname','$middlename','$suffix','$placebirth','$datebirth','$gender','$religion','$nationality','$civilstatus','$perma_add','$contact_num')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" style="width: 800px;" >
   <table style="padding-left:20px ;">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <tr>
         <td> 
            <input type="text" name="email" required placeholder="Email">
         </td>
         <td> 
            <input type="password" name="password" required placeholder="Password">
         </td>
         <td> 
            <input type="password" name="cpassword" required placeholder="Confirm Password">
         </td>      
      </tr>

      <tr>
         <td> 
            <input type="text" name="surname" required placeholder="Last Name">
         </td>
         <td> 
            <input type="text" name="firstname" required placeholder="First Name">
         </td>
         <td> 
            <input type="text" name="middlename"  placeholder="Middle Name">
         </td>      
      </tr>

      <tr>
         <td> 
            <input type="text" name="suffix" placeholder="Suffix (Jr., Sr.)">
         </td>
         <td> 
            <input type="text" name="placebirth" required placeholder="Place of Birth">
         </td>
         <td> 
            <input type="date" id="datebirth" name="datebirth" required placeholder="">
         </td>      
      </tr>

      <tr>
         <td> 
            <input type="text" name="gender" required placeholder="Gender">
         </td>
         <td> 
            <input type="text" name="religion" required placeholder="Religion">
         </td>
         <td> 
            <input type="text" name="nationality" required placeholder="Nationality">
         </td>      
      </tr>

      <tr>
         <td> 
            <input type="text" name="civilstatus" required placeholder="Civil Status">
         </td>
         <td> 
            <input type="text" name="perma_add" required placeholder="Address">
         </td>
         <td> 
            <input type="text" name="contact_num" required placeholder="Contact Number">
         </td>      
      </tr>
    
      
      </table>
      
      <input type="submit" name="submit" value="register now" class="form-btn"> 
   
      <p>Already have an account? <a href="login_form.php">Login now</a></p>

    
      
   </form>
   
</div>

</body>
</html>