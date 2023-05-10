<?php
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample upload</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <?php if (isset($_GET['error'])):?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
    <form action="samplecode1.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" id="name"  required> <br>
        <input type="file" name="image" accept = ".jpg, .jpeg, .png">
        <input type="submit" name="submit" value="Upload" id="">
    </form>
</body>
</html>