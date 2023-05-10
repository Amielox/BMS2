<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <a href="sample.php">&#8592;</a>
        <?php
        
            $sql = "SELECT * FROM bmss ORDER BY id DESC";
            $res = mysqli_query($con, $sql);
            
            if (mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)){ ?>

                <div class = "alb">
                    <img src="../services/bgyid/uploadedLetters/<?=$images['letter']?>" alt="">
                </div>

            <?php }
            }?>
    
</body>
</html>