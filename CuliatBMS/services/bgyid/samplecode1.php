<?php
require 'dbcon.php';
if (isset($_POST['submit'])){
    
    $name = $_POST["name"];

    if ($_FILES["image"]["error"] === 4) {

        echo "<script> alert('Image Does not exist'); </script>";

    }
    else {

        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $tmpName = $_FILES['image']['tmp_name'];
    
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.',$fileName);
        $imageExtension = strtolower(end($imageExtension));
    
        if (!in_array($imageExtension, $validImageExtension)) {
            
            echo "<script> alert('Invalid Image Extension');</script>";
            
        }
        else if($fileSize > 80000000){

            echo "<script> alert('Image SIze is too large'); </script>";

        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'uploadedLetters/' .  $newImageName);
            $query = "INSERT INTO bmss(fname, letter) VALUES('$name', '$newImageName')";
            mysqli_query($con, $query);
            echo "<script> alert('Registered Succesfully!');</script>";
            
        }

    }




    // if ($error === 0) {
    //     if ($img_size > 80000000) {
    //         $em = "Sorry, your file is too large.";
    //         header("Location: sample.php?error=$em") ;
    //     }
    //     else {
    //         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    //         $img_ex_lc = strtolower($img_ex);
    //         $allowed_exs = array("jpg", "jpeg", "png");

    //         if (in_array($img_ex_lc, $allowed_exs)) {
    //             $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
    //             $img_upload_path = 'uploadedLetters/'.$new_img_name;
    //             move_uploaded_file($tmp_name,$img_upload_path);

    //             $sql = "INSERT INTO bmss(letter) VALUES('$new_img_name')";
    //             mysqli_query($con, $sql);
    //             header("Location: view.php");

    //         }
    //         else {
    //             $em = "You cant upload files of this type!!";
    //             header("Location: sample.php?error=$em");
    //         }

    //     }
        
    // }
    // else {
    //     $em = "unknown error occured!";
    //     header("Location: sample.php?error=$em");
    // }

}


?>