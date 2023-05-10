<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 <?php session_start(); ?>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
    .container img {
      height: 40px;
      width: 40px;
    }
    .container span{
      margin-right: 10px;
    }
  </style>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <img class="logo" src="assets/img/logo.png"><span></span>
      <h1 class="logo me-auto"><a href="index.html">Brgy. Culiat</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
			<li class="dropdown"><a href="#"><span>Reports</span></a>
                <ul>
                  <li><a href="records/report.php">Resident Report</a></li>
                  <li><a href="records/transreport.php">Transaction Report</a></li>
                  <li><a href="records/line.php">Health Report</a></li>
                </ul>
			</li>
			<li class="dropdown"><a href="#"><span>Information</span></a>
                <ul>
                  <li><a href="records/residents.php">Resident Information</a></li>
                  <li><a href="portal/ahome.php">Content Information</a></li>
                  <li><a href="records/staff.php">Staff Information</a></li>
                </ul>
			</li>
			<li class="dropdown"><a href="#"><span>Logs</span></a>
                <ul>
                  <li><a href="health/monitor.php">HM Log</a></li>
                  <li><a href="records/payment.php">Transaction Log</a></li>
                  <li><a href="#">Login Log</a></li>
                </ul>
			</li>   
      <?php 
          if ($_SESSION['category']== 'Super Admin')
           {    
             ?>
              <li><a class="getstarted dropdown" style="border-color:white;" href="records/admin.php">New Admin</a></li>
              <?php      
           }
          ?> 
               <li><a class="getstarted dropdown" onclick="return confirm('Are you sure to logout?');"  href="logout.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="admin" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Admin Panel</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="height: 385px;">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4><a href="Portal/aindex.php" target="_blank">Barangay Portal</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200" style="height: 385px;">
            <div class="icon-box"></br>
              <div class="icon"><i class="bx bx-file"></i></div>
              </br><h4><a href="CuliatBMS/index.php" target="_blank">Document Request</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300" style="height: 385px;">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-activity"></i></div>
              <h4><a href="Health/admin/index.php" target="_blank">Health I.S.</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400 style="height: 385px;">

            <div class="icon-box">
              <div class="icon"><i class="bi bi-archive"></i></div>
              <h4><a href="Records/home.php" target="_blank">Record M.S.</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Brgy. Culiat</h3>
            <p>
              Tandang Sora Avenue, <br>
              Quezon City, Metro Manila,<br>
              Philippines <br><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Records/home.php">Dashboard</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="CuliatBMS/services">Requests</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Portal/portal.php">Portal</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Services Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Health/cbform.php">Vaccination</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="CuliatBMS/services">E-Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Health/base.php">Health</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Social Networks</h4>
            <p>"The best way to find yourself is to lose yourself in the service of others."</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Brgy. Culiat</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>