
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
	include 'includes/conn.php'; ?>

<main>

<div class="container"  style="text-align:center;">
  <div class="row" >
    <div class="col-lg-12 d-flex flex-column justify-content-center p-3 m-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h2 class="float-right"><span class="small"><a href="../Portal/home.php" class="text-muted"> Health Services / </a></span>Health Monitoring Form </h2>
    </div>  
  </div>
</div>
<?php
error_reporting(0);

if(isset($_POST['submit'])){
  $residentid = $_POST['residentid'];
  $fullname = $_POST['fullname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $contno = $_POST['contno'];
  $address = $_POST['address'];
  $asthma = $_POST['asthma'];
  $cancer = $_POST['cancer'];
  $diabetes = $_POST['diabetes'];
  $hypertension = $_POST['hypertension']; 
  $epilepsy = $_POST['epilepsy'];
  $dizziness = $_POST['dizziness'];
  $snoring = $_POST['snoring'];
  $chestpain = $_POST['chestpain'];
  $abdominalpain = $_POST['abdominalpain'];
  $heartburn = $_POST['heartburn'];
  $fever = $_POST['fever'];
  $headache = $_POST['headache'];
  $vomitting = $_POST['vomitting'];
  $hunger = $_POST['hunger'];
  $rash = $_POST['rash'];
  $insomnia = $_POST['insomnia'];
  $travel = $_POST['travel'];
  $travel_place = $_POST['travel_place'];       
  $PWD = $_POST['PWD'];
  $disease = $_POST['disease'];
  $cdisease = $_POST['cdisease'];
  $mens = $_POST['mens'];
  $pregnancies = $_POST['pregnancies'];
  $births = $_POST['births'];
  $birth_control = $_POST['birth_control'];
  $irreg_period = $_POST['irreg_period'];
  $medicine = $_POST['medicine'];
  $medicinetype = $_POST['medicinetype'];
  $allergies = $_POST['allergies'];
  $tobacco = $_POST['tobacco'];
  $drugs = $_POST['drugs'];
  $alcohol = $_POST['alcohol'];

  
   $conn = new mysqli("localhost", "root", "", "barangaysystem");
   $sql="INSERT into hmf (residentid,fullname,age,gender,contno,perma_add, asthma, cancer, diabetes, hypertension, epilepsy,dizziness,snoring,chestpain,abdominalpain,heartburn,fever,headache,vomitting,hunger, rash, insomnia,travel,travel_place,PWD,disability_type,disability_cause,mens,pregnancies,births,birth_control,irreg_period,medicine,medicinetype,allergies,tobacco,drugs,alcohol) VALUES ('$residentid','$fullname', '$age' ,'$gender','$contno','$address', '$asthma', '$cancer','$diabetes','$hypertension', '$epilepsy','$dizziness','$snoring', '$chestpain' ,'$abdominalpain','$heartburn','$fever', '$headache' ,'$vomitting',  '$hunger', '$rash', '$insomnia', '$travel', '$travel_place',  '$PWD','$disease','$cdisease','$mens','$pregnancies','$births','$birth_control','$irreg_period','$medicine','$medicinetype','$allergies','$tobacco','$drugs','$alcohol')";
    if($conn->query($sql)){
			$_SESSION['success'] = 'Health monitoring form submitted successfully';
      
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
    <h3><b>Personal Information</b></h3>
    <?php
                    $id = $_SESSION["admin"];
                    $sql = "SELECT *,SYSDATE(),dob,DATEDIFF(SYSDATE(),dob)/365 AS AGE1 FROM residents WHERE id='$id'";
                    
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){              
              ?>
                  <div class="col-4">
                      <label for="residentid" class="form-label">Resident ID</label>
                      <input type="text" class="form-control" name="residentid" value="<?php echo  $_SESSION['residentid'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="firstname" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="firstname" name="fullname" value="<?php echo  $_SESSION['firstname']." " . $_SESSION['lastname'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="lastname" class="form-label">Age</label>
                      <input type="text" class="form-control" id="age" name="age" value="<?php echo "". (round($_SESSION['age']))."";?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="gender" class="form-label">Gender</label>
                      <input type="text" class="form-control" id="gender" name="gender" value="<?php echo  $_SESSION['gender'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="contno" class="form-label">Contact Number</label>
                      <input type="text" class="form-control" id="contno" name="contno" value="<?php echo  $_SESSION['contno'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="perma_add" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo  $_SESSION['address'];?>" readonly required>
                  </div>
     </div>
     <?php     
              }
            ?>

            <hr>

            <div class="row">
              <div class="col-6">
                <h3><b>Illnesses/Diseases</b></h3>
              </div>
              </div>
              
          <div class="col-12"> 
            <label><h5>Conditions that apply to you or to any members of your immediate relatives:</h5></label>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="asthma" name="asthma">
            <label class="form-check-label" for="checkbox">Asthma </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="cancer" name="cancer">
            <label class="form-check-label" for="checkbox">Cancer</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="diabetes" name="diabetes">
            <label class="form-check-label" for="checkbox">Diabetes</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="hypertension" name="hypertension">
            <label class="form-check-label" for="checkbox">Hypertension</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="epilepsy" name="epilepsy">
            <label class="form-check-label" for="checkbox">Epilepsy</label>
          </div>

          <div class="col-12"> 
            <label><h5>Symptoms that you have experienced in the past 6 weeks: </h5></label>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="dizziness" name="dizziness">
            <label class="form-check-label" for="checkbox">Dizziness </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="snoring" name="snoring">
            <label class="form-check-label" for="checkbox">Snoring</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="chestpain" name="chestpain">
            <label class="form-check-label" for="checkbox">Chest Pain</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="abdominalpain" name="abdominalpain">
            <label class="form-check-label" for="checkbox">Abdominal Pain</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="heartburn" name="heartburn">
            <label class="form-check-label" for="checkbox">Heartburn</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="fever" name="fever">
            <label class="form-check-label" for="checkbox">Fever </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="headache" name="headache">
            <label class="form-check-label" for="checkbox">Headache</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="vomitting" name="vomitting">
            <label class="form-check-label" for="checkbox">Vomitting</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="hunger" name="hunger">
            <label class="form-check-label" for="checkbox">Hunger</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="rash" name="rash">
            <label class="form-check-label" for="checkbox">Rash</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="insomnia" name="insomnia">
            <label class="form-check-label" for="checkbox">Insomnia</label>
            </div>
            
<div class="row">
        
        <script>
        $(document).ready(function () {
            $(".label").hide();
            $("#r1").click(function () {
                $(".label").show();
            });
            $("#r2").click(function () {
                $(".label").hide();
            });
        });
        </script>
<div class="col-12">
    <label><h5>Have you traveled outside the country anytime from December 2019 til now?</h5></label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="travel" id="r1" value="yes" onClick="getResults()">
        <label class="form-check-label" for="travel">Yes</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="travel" id="r2" value="no">
        <label class="form-check-label" for="travel">No</label>
    </div>
</div>
    <div class="label">
<div class="col-3">
        <label for="travel_place" class="form-label"><h6>Indicate Country</h6></label>
        <input type="text" class="form-control" id="travel_place" name="travel_place">
      </div>
</div> 
</div>

    <div class="row">
            <script src="http://code.jquery.com/jquery-latest.js"></script>
                <script>
                $(document).ready(function () {
                    $(".text").hide();
                    $("#r3").click(function () {

                        $(".text").show();
                    });
                    $("#r4").click(function () {
                        $(".text").hide();
                    });
                });
                
                </script>
        <div class="col-6">
                  <label><h5>PWD</h5></label>
            <div class="form-check">
                      <input class="form-check-input" type="radio" name="PWD" id="r3" value="yes" >
                      <label class="form-check-label" for="PWD">Yes</label>
            </div>
          <div class="form-check">
                <input class="form-check-input" type="radio" name="PWD" id="r4" value="no">
                <label class="form-check-label" for="PWD">No</label>
          </div>
        </div>
              </div>
                <div class="text">
                <div class="col-3">
                <label><h5>Type of Disability</h5></label>
                  <select class="form-control select2" name="disease" style="width: 100%;">
                    <option selected="selected" value="">Please Select</option>
                    <option value="Mental/Intellectual">Mental/Intellectual</option>
                    <option value="Hearing Disability">Hearing Disability</option>
                    <option value="Psychological Disability">Psychological Disability</option>
                    <option value="Visual Disability">Visual Disability</option>
                    <option value="Speech Impairment">Speech Impairment</option>
                    <option value="Disability Due to Chnonic Disease">Disability Due to Chnonic Disease</option>
                    <option value="Orthopedtic Disability">Orthopedtic Disability</option>
                    <option value="Learning Disability">Learning Disability</option>
                  </select>
                </div>
                <div class="col-3">
                <label><h5>Cause of Disability</h5></label>
                  <select class="form-control select2" name="cdisease" style="width: 100%;">
                    <option selected="selected" value="">Please Select</option>
                    <option value="Congenital">Congenital</option>
                    <option value="Illness">Illness</option>
                    <option value="Injury">Injury</option>
                  </select>
                </div>
              </div>

 <div class="row">
        <?php 
          if ($_SESSION['gender']=="Female"){ ?>
            <div class="col-4">
              <label for="mens" class="form-label"><h5>Date of last menstrual period</h5></label>
              <input type="date" class="form-control" id="mens" name="mens">
            </div>
            <div class="col-4">
              <label for="pregnancies" class="form-label"><h5>Number of pregnancies</h5></label>
              <input type="text" class="form-control" id="pregnancies" name="pregnancies">
            </div>                  
            <div class="col-4">
              <label for="births" class="form-label"><h5>Number of live births</h5></label>
              <input type="text" class="form-control" id="births" name="births">
            </div>
         <div class="col-12">
            <label><h5>Are you taking any hormones or birth control?</h5></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="birth_control" id="birth_control" value="yes">
                <label class="form-check-label" for="birth_control">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="birth-control" id="birth-control" value="no">
                <label class="form-check-label" for="birth-control">No</label>
            </div>
        </div>
        <div class="col-12">
            <label><h5>Do you have irregular or painful periods?</h5></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="irreg_period" id="irreg_period" value="yes">
                <label class="form-check-label" for="irreg_period">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="irreg_period" id="irreg_period" value="no">
                <label class="form-check-label" for="irreg_period">No</label>
            </div>
        </div>
 </div>
           <?php } ?>
  <div class="row">
        
                <script>
                $(document).ready(function () {
                    $(".label").hide();
                    $("#r5").click(function () {
                        $(".label").show();
                    });
                    $("#r6").click(function () {
                        $(".label").hide();
                    });
                });
                </script>
      <div class="col-12">
            <label><h5>Are you currently taking any medications?</h5></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="medicine" id="r5" value="yes" onClick="getResults()">
                <label class="form-check-label" for="medicine">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="medicine" id="r6" value="no">
                <label class="form-check-label" for="medicine">No</label>
            </div>
      </div>
            <div class="label">
      <div class="col-3">
                <label for="medicinetype" class="form-label"><h6>Please indicate</h6></label>
                <input type="text" class="form-control" id="medicinetype" name="medicinetype">
              </div>
      </div> 
  </div>
  <div class="row">
      <div class="col-12">
            <label><h5>Do you have any medication allergies?</h5></label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="allergies" id="allergies" value="yes">
                <label class="form-check-label" for="allergies">Yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="allergies" id="allergies" value="no">
                <label class="form-check-label" for="allergies">No</label>
              </div>
        </div>
  </div>
  <div class="row">
        <div class="col-12">
            <label><h5>Have a history of using tobacco?</h5></label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tobacco" id="tobacco" value="yes">
                <label class="form-check-label" for="tobacco">Yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tobacco" id="tobacco" value="no">
                <label class="form-check-label" for="tobacco">No</label>
              </div>
        </div>
  </div>
  <div class="row">
        <div class="col-12">
            <label><h5>Have any history of using illegal drugs?</h5></label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="drugs" id="drugs" value="yes">
                <label class="form-check-label" for="drugs">Yes</label>
              </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="drugs" id="drugs" value="no">
                <label class="form-check-label" for="drugs">No</label>
              </div>
        </div>
  </div>
  <div class="row">
        <div class="col-4">
                <label><h5>How often do you consume alcohol?</h5></label>
                  <select class="form-control select" name="alcohol" style="width: 100%;">
                    <option selected="selected" value="">Please Select</option>
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Occasionally">Occasionally</option>
                    <option value="Never">Never</option>
                  </select>
        </div>
  </div>

        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

<button class="btn btn-primary" name="submit" type="submit">Submit</button>
</form>
</div>              

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