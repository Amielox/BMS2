<?php
session_start();
?>

<!--Auto No. generator/tracking Number-->
<?php
require_once('dbcon.php');
extract($_POST);

$query = "SELECT id from bmss ORDER BY id desc";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$lastid = isset($row['id']);

if(empty($lastid)) {

  $tno = mt_rand(100000,999999);
  $number = 'TNO-' .$tno;

}
else {
  $tno = mt_rand(100000,999999);
  $number = 'TNO-' .$tno;
}
?>
<!--end of Auto No. generator/tracking Number-->


<!-- Start of img upload -->


<!-- End of img upload -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Barangay Culiat Management System | Barangay IDRequest Form</title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body>

<!-- Add Student -->

<div class="container-fluid">
<h2 class="text-center pt-5">Barangay Culiat Management System | Request Panel</h2>
    <p class="datatable design text-center">Request of Barangay ID </p>
    <div class="row justify-content-center">
        <div class="col-md-7 pb-5">

            <?php
            if (isset($_SESSION['status'])) {
                echo "<h4>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
            ?>

            <div class="card mt-5">

                <div class="card-header">
                    <h4>Applicant Information</h4>
                </div>
                <div class="card-body">

                <form method="POST" action="code.php" enctype="multipart/form-data">
                    
                <?php
                    $id = $_SESSION["email"];
                    $sql = "SELECT *,SYSDATE(),dob,DATEDIFF(SYSDATE(),dob)/365 AS AGE1 FROM bmss WHERE id='$id'";
                    
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){              
              ?>
                       
                <form method="POST" action="code.php">
                    
                        <div class="row pb-3">
                        <div class="col">
                        <label for="trackingnoField" class="form-label">Tracking Number</label>
                        <input type="text" class="form-control" id="trackingnoField1" name="trackingno" value="<?php echo $number; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="residentidField" class="form-label">Resident ID:</label>
                        <input type="text" class="form-control" id="residentidField1" name="residentid" value="<?php echo $row['residentid']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="purposeField" class="form-label">Purpose:</label>
                        <input type="text" class="form-control" id="purposeField1" name="purpose" value="Barangay ID" readonly required>
                        </div>
                        </div>

                        <div class="row pb-3">
                        <div class="col">
                        <label for="emailField" class="form-label">Email Address:</label>
                        <input type="email" class="form-control" id="addemailField1" name="email" value="<?php echo $row['email']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="contnoField" class="form-label">Contact Number:</label>
                       <input type="text" class="form-control" id="contnoField1" name="contno" value="<?php echo $row['contno']; ?>" readonly required>
                        </div>
                        </div>

                        <!-- Start of 1st Section -->
                        <div class="row pb-3">
                        <div class="col">
                        <label for="snameField" class="form-label">Surname: (Apelyido)</label>
                        <input type="text" class="form-control" id="snameField1" name="lastname" value="<?php echo $row['lastname']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="fnameField" class="form-label">First Name: (Pangalan)</label>
                        <input type="text" class="form-control" id="fnameField1" name="firstname" value="<?php echo $row['firstname']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="mnameField" class="form-label">Middle Name: (Gitnang Pangalan)</label>
                        <input type="text" class="form-control" id="mnameField1" name="middlename" value="<?php echo $row['middlename']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="sufField" class="form-label">Suffix: (Jr., Sr., II, Etc.)</label>
                        <input type="text" class="form-control" id="sufField1" name="suf" value="<?php echo $row['suf']; ?>" readonly required>
                        </div>
                        </div>
                        <!-- End of 1st Section -->

                        <!--Start of 2nd Section -->
                        <div class="row pb-3">
                        <div class="col">
                        <label for="pobField" class="form-label">Place of Birth: (Lugar ng Kapanangakan)</label>
                        <input type="text" class="form-control" id="pobField1" name="pob" value="<?php echo $row['pob']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="dobField" class="form-label">Date of Birth: (Araw ng kapanangakan)</label>
                        <input type="date" class="form-control" id="dobField1" name="dob" value="<?php echo $row['dob']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="genderField" class="form-label">Gender: <br>(Kasarian)</label>
                        <!-- <input type="text" class="form-control" id="genderField1" name="gender"> -->
                        <input type="text" class="form-control" id="genderField1" name="gender" value="<?php echo $row['gender']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="religionField" class="form-label">Religion: <br>(Relihiyon)</label>
                        <input type="text" class="form-control" id="religionField1" name="religion" value="<?php echo $row['religion']; ?>" readonly required>
                        </div>                                            
                        </div>
                        <!-- End of 2nd Section -->

                        <!-- Start of 3rd Section -->
                        <div class="row pb-3">
                        <div class="col">
                        <label for="nationField" class="form-label">Nationality: (Nasyonalidad)</label>
                        <input type="text" class="form-control" id="nationField1" name="nationality" value="<?php echo $row['nationality']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="csField" class="form-label">Civil Status: (Katayuang Sibil)</label>
                        <!-- <input type="text" class="form-control" id="csField1" name="cs"> -->
                        <input type="text" class="form-control" id="csField1" name="cs" value="<?php echo $row['cs']; ?>" readonly required>
                        </div>                          
                        </div>
                        <!-- End of 3rd Section -->

                        <hr>
                        <h4 class="modal-title pb-2">Contact Details</h4>


                        <!-- Start of 4th Section -->            
                        <div class="row pb-3">
                        <div class="col-6">
                        <label for="addressField" class="form-label">Address: <br>(Tirahan)</label>
                        <input type="text" class="form-control" id="addressField1" name="address" value="<?php echo $row['address']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="untField" class="form-label">Uri ng Tirahan: <br>(Owner/Renter/Sharer)</label>
                        <!-- <input type="text" class="form-control" id="untField1" name="unt"> -->
                        <input type="text" class="form-control" id="untField1" name="unt" value="<?php echo $row['unt']; ?>" readonly required>
                        </div>
                        <div class="col">
                        <label for="occuField" class="form-label">Occupation: <br>(Uri ng Trabaho)</label>
                        <input type="text" class="form-control" id="occuField1" name="occupation" value="<?php echo $row['occupation']; ?>" readonly required>
                        </div>                            
                        </div>
                        <!-- End of 4th Section --> 
                        <?php     
              }
            ?>

                        <!-- Start of 6th Row -->
                        <div class="row pb-3">
                        <div class="col">
                        <label for="tinField" class="form-label">TIN NO.</label>
                        <input type="text" class="form-control" id="tinField1" name="tin">
                        </div>
                        <div class="col">
                        <label for="sssnoField" class="form-label">SSS/GSIS No.</label>
                        <input type="text" class="form-control" id="sssnoField1" name="sssno">
                        </div>
                        <div class="col">
                        <label for="precnoField" class="form-label">Precint No:</label>
                        <input type="text" class="form-control" id="precnoField1" name="precno">
                        </div>                            
                        </div>
                        <!-- End of 6th Row -->


                        <hr>
                        <h4 class="modal-title pb-2">Other Information</h4>

                        <!-- Start of 7th Row -->
                        <div class="row pb-3">
                            <div class="col">
                            <label for="htwtField" class="form-label">Height:(cm)</label>
                            <input type="text" class="form-control" id="htwtField1" name="htwt">
                            </div>
                            <div class="col">
                            <label for="weightField" class="form-label">Weight:(kg)</label>
                            <input type="text" class="form-control" id="weightField1" name="weight">
                            </div>
                            <div class="col">
                            <label for="colorField" class="form-label">Color of Hair/Eyes:</label>
                            <input type="text" class="form-control" id="colorField1" name="color">
                            </div>                                    
                            </div>
                        <!-- End of 7th Row -->
                    

                        <!-- Start of 8th Row -->

                        <div class="row pb-3">
                            <div class="col">
                            <label for="emergencyField" class="form-label">Contact Person Incase of Emergency:</label>
                            <input type="text" class="form-control" id="emergencyField1" name="emergency">
                            </div>
                            <div class="col">
                            <label for="relField" class="form-label">Relationship: (Kaugnayan)</label>
                            <input type="text" class="form-control" id="relField1" name="rel">
                            </div>
                            <div class="col">
                            <label for="contemerField" class="form-label">Contact No. In Case of Emergency</label>
                            <input type="text" class="form-control" id="contemerField1" name="contemer">
                            </div>                                
                        </div>
                        
                        <!-- End of 8th Row -->

                        <!-- Start of 9th Row -->
                        <div class="row pb-3">
                            <div class="col">
                            <label for="nosField" class="form-label">Name of Spouse: (Pangalan ng asawa)</label>
                            <input type="text" class="form-control" id="nosField1" name="nos">
                            </div>
                            <div class="col">
                            <label for="scontnoField" class="form-label">Spouse's Contact No. (Numero ng asawa)</label>
                            <input type="text" class="form-control" id="scontnoField1" name="scontno">
                            </div>
                            <div class="col">
                            <label for="spooccuField" class="form-label">Spouse Occupation: (Trabaho ng Asawa)</label>
                            <input type="text" class="form-control" id="spooccuField1" name="spooccu">
                            </div>                                           
                        </div>
                        <!-- End of 9th Row -->

                        <!-- Start of 10th Row-->
                        <div class="row pb-3">
                            <div class="col">
                                <label for="reasonField1" class="form-label">Purpose</label>
                                <input type="text" class="form-control" id="reasonField1" name="reason">
                            </div>
                            <div class="col">
                                <label for="letter1" class="form-label">Attach Letter</label>
                                <input type="file" class="form-control" id="letterField1" name="letter" accept = ".jpg, .jpeg, .png" value="">
                            </div>
                            
                        </div>
                        <!-- End of 10th Row-->


                        </div>
                        <div class="modal-footer float-start">
                        <button type="submit" class="btn btn-primary" name = "submit_request" >Submit</button>
                        <button type="button" class="btn btn-secondary" href = "../services/index.php">Return</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Add Student -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- <script>
        $(document).on('submit', '#submitRequest', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit_request", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#studentAddModal').modal('hide');
                        $('#submitRequest')[0].reset();
                        

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);


                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

    </script> -->

</body>
</html>