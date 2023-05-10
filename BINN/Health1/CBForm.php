<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Brgy. Culiat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
	session_start();
	include 'login/config.php'; ?>

<main>

<div class="container"  style="text-align:center;">
  <div class="row" >
    <div class="col-lg-12 d-flex flex-column justify-content-center p-3 m-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h2 class="float-right"><span class="small"><a href="../Portal/home.php" class="text-muted"> Health Services / </a></span>Vaccine and Booster</h2>
    </div>  
  </div>
</div>
<?php
error_reporting(0);
 
if(isset($_POST['submit']))
{
 
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $middlename = $_POST['middlename'];
  $suf = $_POST['suf'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $contno = $_POST['contno'];
  $category = $_POST['category'];
  $priority = $_POST['priority'];
  $allergy = $_POST['allergy'];
  $comorbidities = $_POST['comorbidities'];

   $conn = new mysqli("localhost", "root", "", "barangaysystem");
   $sql="INSERT INTO covidbooster (firstname, lastname, middlename, suffix, birthdate, gender, email, contact_num, category, priority, allergy, comorbidities) 
   VALUES('$firstname', '$lastname' ,'$middlename', '$suf', '$dob', '$gender', '$email', '$contno', '$category', '$priority', '$allergy', '$comorbidities')";
      if($conn->query($sql)){
        $_SESSION['success'] = 'Covid/Booster Form submitted successfully';
        
      }
      else{
        $_SESSION['error'] = $conn->error;
      }
    }
   
  
  ?>
  <div  class="d-flex align-items-center">
  <div class="container card p-5 mb-5 ">
    <form method="POST" action="sample.php"> 
    <?php
          if(isset($_SESSION['error'])){
            echo "
              <div class='alert alert-danger alert-dismissible'>
                
                ".$_SESSION['error']."
              </div>
            ";  
            unset($_SESSION['error']);
          }
          if(isset($_SESSION['success'])){
            echo "
              <div class='alert alert-success alert-dismissible'>
               
                ".$_SESSION['success']."
              </div>
            ";
            unset($_SESSION['success']);
          }
        ?>
    <div class="row">
    <h3><b>Covid Vaccination and Booster</b></h3>
                    <div class="col-3">
                      <label for="first" class="form-label"><h5>First Name</h5></label>
                      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" readonly required>
                    </div>
                    <div class="col-3">
                      <label for="lastname" class="form-label"><h5>Last Name</h5></label>
                      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo  $_SESSION['lastname'];?>" required>
                    </div>
                    <div class="col-3">
                      <label for="middlename" class="form-label"><h5>Middle Name</h5></label>
                      <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo  $_SESSION['middlename'];?>" >
                    </div>
                    <div class="col-3">
                      <label for="suf" class="form-label"><h5>Suffix</h5></label>
                      <input type="text" class="form-control" id="suf" name="suf" value="<?php echo  $_SESSION['suf'];?>">
                </div>
                </div>
            <div class="row">
                <div class="col-3">
                      <label for="dob" class="form-label"><h5>Birth Date</h5></label>
                      <input type="date" class="form-control" id="dob" name="dob" value="<?php echo  $_SESSION['dob'];?>" required>
                </div>
                <div class="col-3">
                  <label for="gender" class="form-label"><h5>Sex</h5></label>
                  <select class="form-control select2" name="gender" style="width: 100%;" value="<?php echo  $_SESSION['gender'];?>">
                    <option selected="selected" value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                  <div class="col-3">
                  <label for="Email" class="form-label"><h5>Email</h5></label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo  $_SESSION['email'];?>">
              </div>
                  <div class="col-3">
                  <label for="contno" class="form-label"><h5>Mobile Number</h5></label>
                <input type="text" class="form-control" id="contno" name="contno" value="<?php echo  $_SESSION['contno'];?>" required> 
              </div>
            </div>
            <hr>

            <div class="row">     
                <div class="col-6">
                  <label for="category" class="form-label"><h5>Category</h5></label>
                  <select class="form-control select3" name="category" style="width: 100%;" required>
                    <option selected="selected" value="Select">Select</option>
                    <option value="vaccine">Covid Vaccination</option>
                    <option value="booster">Booster</option>
                  </select>
                </div>

                <div class="col-6">
                  <label for="priority" class="form-label"><h5>Select Priority</h5></label>
                <select name="priority" class="form-control" id="priority" required>
                  <option value="" selected="selected">SELECT PRIORITY</option>
                  <option value="A1 Health Care Workers">A1 Health Care Workers</option>
                  <option value="A2 Senior Citizens">A2 Senior Citizens</option>
                  <option value="A3 Adult with Comorbidity">A3 Adult with Comorbidity</option>
                  <option value="A4 Frontline Personnel in Essential Sector">A4 Frontline Personnel in Essential Sector</option>
                  <option value="A5 Poor Population">A5 Poor Population</option>
                  <option value="B1 Teachers and Social Workers">B1 Teachers and Social Workers</option>
                  <option value="B2 Other Government Workers">B2 Other Government Workers</option>
                  <option value="B3 Other Essential Workers">B3 Other Essential Workers</option>
                  <option value="B4 Socio-demographic Groups">B4 Socio-demographic Groups</option>
                  <option value="B5 Overseas Filipino Workers">B5 Overseas Filipino Workers</option>
                  <option value="B6 Other Remaining Workforce">B6 Other Remaining Workforce</option>
                  <option value="C Rest of Adult Population">C Rest of Adult Population</option>
                  <option value="A3 Pediatric with co-morbidity">A3 Pediatric with co-morbidity</option>
                  <option value="C Other Pediatric">C Other Pediatric</option>
                  </select>
              </div>   
                </div>
                <div class="row">
                <div class="col-6">
                  <label for="allergy" class="form-label"><h5>Allergic to vaccines or their ingredients?</h5></label>
                  <select class="form-control select3" name="allergy" style="width: 100%;" required>
                    <option selected="selected" value="Select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="col-6">
                  <label for="comorbidities" class="form-label"><h5>Do you have comorbidities?</h5></label>
                  <select class="form-control select3" name="comorbidities" style="width: 100%;" required>
                    <option selected="selected" value="Select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                 </div>
              </div>

              <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

<button class="btn btn-primary" name="submit" type="submit">Submit</button>
</form>
</div>               
    </div>
</div>
</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy;Copyright<strong><span> All Rights Reserved</span></strong>. 
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/aos/aos.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets1/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>
        
</html>