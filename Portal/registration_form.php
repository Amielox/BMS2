<?php
session_start();
?>

<!--Auto No. generator/tracking Number-->
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
<h2 class="text-center pt-5">Barangay Culiat Management System</h2>
    <p class="datatable design text-center">Residents Registration</p>
    <div class="row justify-content-center">
        <div class="col-md-7 pb-5">


            <div class="card mt-5">

                <div class="card-header">
                    <h4>Personal Information</h4>
                </div>
                <div class="card-body">

                <form method="POST" action="registration.php" enctype="multipart/form-data">

                        <div class="row pb-3">
                        <div class="col">
                        <label for="emailField" class="form-label">Email Address:</label>
                        <input type="email" class="form-control" id="addemailField1" name="email" required>
                        </div>
                        <div class="col">
                        <label for="passwordField" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="passField1" name="password" required>
                        </div>
                        <div class="col">
                        <label for="contnoField" class="form-label">Contact Number:</label>
                       <input type="text" class="form-control" id="contnoField1" name="contno" required>
                        </div>
                        </div>

                        <!-- Start of 1st Section -->
                        <div class="row pb-3">
                        <div class="col">
                        <label for="snameField" class="form-label">Surname: (Apelyido)</label>
                        <input type="text" class="form-control" id="snameField1" name="lastname" required>
                        </div>
                        <div class="col">
                        <label for="fnameField" class="form-label">First Name: (Pangalan)</label>
                        <input type="text" class="form-control" id="fnameField1" name="firstname" required>
                        </div>
                        <div class="col">
                        <label for="mnameField" class="form-label">Middle Name: (Gitnang Pangalan)</label>
                        <input type="text" class="form-control" id="mnameField1" name="middlename">
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
                        <input type="text" class="form-control" id="nationField1" name="nationality" required>
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
                        <div class="col">
                        <label for="photoField" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="photoField1" name="photo" required>
                        </div>                          
                        </div>
                        <!-- End of 3rd Section -->

                        <hr>
                        <h4 class="modal-title pb-2">Contact Details</h4>
                        <hr style="margin-top: -1px;">


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
                        <input type="text" class="form-control" id="occuField1" name="occupation" required>
                        </div>                            
                        </div>
                        <!-- End of 4th Section --> 


                        </div>
                        <div class="modal-footer float-start">
                        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                        <a href="../Portal/index.php"><button  type="button" class="btn btn-secondary">Return</button></a>
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