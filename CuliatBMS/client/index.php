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



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Baranggay Culiat Management System | Request Form</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body>

<!-- Add Student -->

<div class="container-fluid">
<h2 class="text-center pt-5">Baranggay Culiat Management System | Request Panel</h2>
    <p class="datatable design text-center">Residents Requests</p>
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

                <form method="POST" action="code.php">
                    
                                <input type="text" class="form-control" id="statusField1" name="status" hidden value="Pending">

                        <div class="row pb-3">
                            <div class="col">
                            <label for="trackingnoField" class="form-label">Tracking Number</label>
                            <input type="text" class="form-control" id="trackingnoField1" name="trackingno" value="<?php echo $number; ?>" readonly required>
                            </div>
                            <div class="col">
                            <label for="purposeField" class="form-label">Document to be Requested</label>
                            <select class="form-control" id="purposeField1" name="purpose" required>                                            
                                <option value = "">--Select Document Type--</option>
                                <option value = "Certificate of Indigency">Certificate of Indigency</option>
                                <option value = "Baranggay Certificate">Baranggay Certificate</option>
                                <option value = "Certificate of Residency">Certificate of Residency</option>  
                            </select>                
                            </div>
                        </div>
                        <!-- Start of 1st Section -->   
                        <div class="row pb-3">
                        <div class="col">
                        <label for="snameField" class="form-label">Surname: (Apelyido)</label>
                        <input type="text" class="form-control" id="snameField1" name="sname"   required>
                        </div>
                        <div class="col">
                        <label for="fnameField" class="form-label">First Name: (Pangalan)</label>
                        <input type="text" class="form-control" id="fnameField1" name="fname" required>
                        </div>
                        <div class="col">
                        <label for="mnameField" class="form-label">Middle Name: (Gitnang Pangalan)</label>
                        <input type="text" class="form-control" id="mnameField1" name="mname">
                        </div>
                        <div class="col">
                        <label for="sufField" class="form-label">Suffix: (Jr., Sr., II, Etc.)</label>
                        <input type="text" class="form-control" id="sufField1" name="suf">
                        </div>
                        </div>
                        <!-- End of 1st Section -->

                        <!--Start of 2nd Section -->
                        <div class="row pb-3">
                        <div class="col">
                        <label for="pobField" class="form-label">Place of Birth: (Lugar ng Kapanangakan)</label>
                        <input type="text" class="form-control" id="pobField1" name="pob" required>
                        </div>
                        <div class="col">
                        <label for="dobField" class="form-label">Date of Birth: (Araw ng kapanangakan)</label>
                        <input type="date" class="form-control" id="dobField1" name="dob" required>
                        </div>
                        <div class="col">
                        <label for="genderField" class="form-label">Gender: <br>(Kasarian)</label>
                        <!-- <input type="text" class="form-control" id="genderField1" name="gender"> -->
                        <select class="form-control" id="genderField1" name="gender" required>                                            
                            <option value = "">--Select Gender--</option>
                            <option value = "Male">Male</option>
                            <option value = "Female">Female</option>
                            <option value = "Others">Preferred not to say</option>
                        </select>
                        </div>
                        <div class="col">
                        <label for="religionField" class="form-label">Religion: <br>(Relihiyon)</label>
                        <input type="text" class="form-control" id="religionField1" name="religion" required>
                        </div>                                            
                        </div>
                        <!-- End of 2nd Section -->

                        <!-- Start of 3rd Section -->
                        <div class="row pb-3">
                        <div class="col">
                        <label for="nationField" class="form-label">Nationality: (Nasyonalidad)</label>
                        <input type="text" class="form-control" id="nationField1" name="nation" required>
                        </div>
                        <div class="col">
                        <label for="csField" class="form-label">Civil Status: (Katayuang Sibil)</label>
                        <!-- <input type="text" class="form-control" id="csField1" name="cs"> -->
                        <select class="form-control" id="csField1" name="cs" required>                                            
                            <option value = "">--Select One--</option>
                            <option value = "Single">Single/walang asawa</option>
                            <option value = "Married">Married/Kasal</option>
                            <option value = "Divorced">Divorced/Hiwalay sa asawa</option>
                            <option value = "Widowed">Widowed/Byuda/Byudo</option>
                        </select>
                        </div>                          
                        </div>
                        <!-- End of 3rd Section -->

                        <hr>
                        <h4 class="modal-title pb-2">Contact Details</h4>


                        <!-- Start of 4th Section -->            
                        <div class="row pb-3">
                        <div class="col-6">
                        <label for="addressField" class="form-label">Address: <br>(Tirahan)</label>
                        <input type="text" class="form-control" id="addressField1" name="address" required>
                        </div>
                        <div class="col">
                        <label for="untField" class="form-label">Uri ng Tirahan: <br>(Owner/Renter/Sharer)</label>
                        <!-- <input type="text" class="form-control" id="untField1" name="unt"> -->
                        <select class="form-control" id="untField1" name="unt" required>                                            
                            <option value = "">--Select One--</option>
                            <option value = "Owner">Owner</option>
                            <option value = "Renter">Renter</option>
                            <option value = "Sharer">Sharer</option>
                        </select>
                        </div>
                        <div class="col">
                        <label for="occuField" class="form-label">Occupation: <br>(Uri ng Trabaho)</label>
                        <input type="text" class="form-control" id="occuField1" name="occu" required>
                        </div>                            
                        </div>
                        <!-- End of 4th Section --> 

                        <!-- Start of 5th Section -->
                        <div class="row pb-3">
                            <div class="col">
                            <label for="emailField" class="form-label">Email Address:</label>
                            <input type="email" class="form-control" id="addemailField1" name="email" required>
                            </div>
                            <div class="col">
                            <label for="contnoField" class="form-label">Contact Number:</label>
                            <input type="text" class="form-control" id="contnoField1" name="contno" required>
                            </div>
                        </div>
                        <!-- End of 5th Section -->

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



                        </div>
                        <div class="modal-footer float-start">
                        <button type="submit" class="btn btn-primary" name = "submit_request" formtarget = "_blank" formaction="print-details.php?id='.$row['id'].'" data-id="'.$row['id'].'">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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