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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="base.php">Barangay Culiat</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



    </div>
  </header><!-- End Header -->
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

<div class="container">
  <form method="POST">
  <div class="row">
    <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h1>Barangay Culiat Health Services</h1>
      
    </div>
    
  </div>
</div>

</section><!-- End Hero -->

  
<section  class="d-flex align-items-center">
<div class="container">
    <div class="row">
    <h3><b>Contact Tracing</b></h3>
                    <div class="col-3">
                      <label for="first" class="form-label"><h5>First Name</h5></label>
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="col-3">
                      <label for="middlename" class="form-label"><h5>Middle Name</h5></label>
                      <input type="text" class="form-control" id="middlename" name="middlename" required>
                    </div>
                    <div class="col-3">
                      <label for="lastname" class="form-label"><h5>Last Name</h5></label>
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                    <div class="col-3">
                      <label for="suffix" class="form-label"><h5>Suffix</h5></label>
                      <input type="text" class="form-control" id="suffix" name="suffix">
                </div>
                </div>
            <div class="row">
                <div class="col-3">
                      <label for="birthdate" class="form-label"><h5>Birth Date</h5></label>
                      <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>
                <div class="col-3">
                  <label for="gender" class="form-label"><h5>Sex</h5></label>
                  <select class="form-control select2" name="gender" style="width: 100%;">
                    <option selected="selected" value="Select">Select</option>
                    <option value="Female">Male</option>
                    <option value="Male">Female</option>
                  </select>
                </div>
                  <div class="col-3">
                  <label for="Email" class="form-label"><h5>Email</h5></label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
                  <div class="col-3">
                  <label for="number" class="form-label"><h5>Mobile Number</h5></label>
                <input type="text" class="form-control" id="number" name="number" pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required> 
              </div>
            </div>
            <hr>

            <div class="col-4">
                  <label for="vaxx" class="form-label"><h5>Vaccination</h5></label>
                  <select class="form-control select3" name="vaxx" style="width: 100%;" required>
                    <option selected="selected" value="Select">Select</option>
                    <option value="Female">Covid Vaccination</option>
                    <option value="Male">Booster</option>
                  </select>
                </div>

                <div class="col-4">
                  <label for="vaxx" class="form-label"><h5>Select Priority</h5></label>
                <select name="int_priority_grp" class="form-control" required="" id="int_priority_grp">
                  <option value="" selected="selected">SELECT PRIORITY</option>
                  <option value="1">A1 Health Care Workers</option>
                  <option value="2">A2 Senior Citizens</option>
                  <option value="3">A3 Adult with Comorbidity</option>
                  <option value="4">A4 Frontline Personnel in Essential Sector</option>
                  <option value="5">A5 Poor Population</option>
                  <option value="6">B1 Teachers and Social Workers</option>
                  <option value="7">B2 Other Government Workers</option>
                  <option value="8">B3 Other Essential Workers</option>
                  <option value="9">B4 Socio-demographic Groups</option>
                  <option value="10">B5 Overseas Filipino Workers</option>
                  <option value="11">B6 Other Remaining Workforce</option>
                  <option value="12">C Rest of Adult Population</option>
                  <option value="13">A3 Pediatric with co-morbidity</option>
                  <option value="14">C Other Pediatric</option>
                  </select>
              </div>

              <div class="col-12">
            <label><h5>Allergic to vaccines or their ingredients?</h5></label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="allergy" id="allergy">
                <label class="form-check-label" for="allergy">Yes</label>
            </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="allergy" id="allergy">
                <label class="form-check-label" for="allergy">No</label>
            </div>

            <div class="col-12">
            <label><h5>Do you have comorbidities?</h5></label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="comorbidities" id="comorbidities">
                <label class="form-check-label" for="comorbidities">Yes</label>
            </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="comorbidities" id="comorbidities">
                <label class="form-check-label" for="comorbidities">No</label>
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