<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baranggay Document</title>


</head>
<body style=" background-image: url();">


    <h1 style="text-align: center;" text-transform: uppercase;><?=$user['purpose']?></h1>

    <h2 >TO WHOM IT MAY CONCERN</h2>

    <p>This is to Certify that <b>MS./MR. <?=$user['fname']?> <?=$user['mname']?> <?=$user['sname']?></b> , <?=$user['nation']?>, of Legal Age and with postal address at <b><?=$user['address']?> </b>Whose Specimen Signature appears below is a resident of this barangay.</p>
    
    <p>This certification is issued upon the request of <b>MS./MR. <?=$user['sname']?></b> for (purpose)</p>

    <p>Issued this <b><?=$user['di']?></b> at the office of barangay Chairman Culiat District VI Quezon City</p>

    <p style="text-align: center;">BY THE AUTHORITY OF THE BARANGAY CHAIRMAN <br/> (Under Resolution No. 017, Series 1997)</p>







</body>
</html>