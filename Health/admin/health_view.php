<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-muted" href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
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
                              $id = $_SESSION["residentid"];
                              $sql = "SELECT *,SYSDATE(),dob,DATEDIFF(SYSDATE(),dob)/365 AS AGE1 FROM residents WHERE residentid='$id'";
                              
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
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo  $_SESSION['gender'];?>" readonly required>
                            </div>
                            <div class="col-4">
                                <label for="perma_add" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?php echo  $_SESSION['address'];?>" readonly required>
                            </div>
                            <div class="col-4">
                                <label for="perma_add" class="form-label">Purok</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?php echo  $_SESSION['purok'];?>" readonly required>
                            </div>
                            <div class="col-4">
                                <label for="contno" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="contno" name="contno" value="<?php echo  $_SESSION['contno'];?>" readonly required>
                            </div>
                            <div class="col-4">
                                <label for="lastname" class="form-label">Age</label>
                                <input type="text" class="form-control" id="age" name="age" value="<?php echo "". (round($row['AGE1']))."";?>" readonly required>
                            </div>
                            <div class="col-4">
                                <label for="lastname" class="form-label">Height</label>
                                <input type="text" class="form-control" id="age" name="age"  >
                            </div>
                            <div class="col-4">
                                <label for="lastname" class="form-label">Weight</label>
                                <input type="text" class="form-control" id="age" name="age" >
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
            <!-- ./col -->
        </div>

      <div class="row">
<div class='col-md-12'>
      <?php
        if(isset($_SESSION['error'])){
          echo "
          
            <div class=' alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?></div></div>
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
 
 

<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>


<!-- Page specific script -->


          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
</section>
</div>
</div>
<!-- ./wrapper -->
<?php include 'includes/footer.php'; ?>
</body>
</html>
