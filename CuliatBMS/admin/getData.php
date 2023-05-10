<?php
$userData = array();

if(!empty($_GET['id']))
{
    require_once 'connection.php';

    $userID = $_GET['id'];

    $query = $con->query("SELECT * FROM bmss WHERE id = ".$userID);
    
    if ($query->num_rows > 0) {
            $userdata = $query->fetch_assoc();
    }
}
?>

<div class="container">
    <h2>Requested Document</h2>
    <?php if (!empty($userData)){ ?>
        <p><b>Tracking Number:</b><?php echo $userData['trackingno']; ?></p>
    <?php }
    else { ?>
    <p>User Not Found...</p>
    <?php }
    ?>
</div>