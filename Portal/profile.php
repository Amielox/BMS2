<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Profile</li>
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
          <div class="col-md-3">
            <!-- Profile Image -->
            <?php
                    $id = $_SESSION['residentid'];
                    $sql = "SELECT *,SYSDATE(),dob,DATEDIFF(SYSDATE(),dob)/365 AS AGE1 FROM residents WHERE residentid='$id'";
                    
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){              
              ?>
                                        
            <!-- Profile Image -->
            <div class='card card-primary card-outline'>
              <div class='card-body box-profile'>
                <div class='text-center'>
                  <img class='profile-user-img img-fluid img-circle'
                  src="<?php echo (!empty($row['photo'])) ? '../images/'.$row['photo'] : 'images/profile.jpg'; ?>"
                       alt='User profile picture'>
                </div>

                <h3 class="profile-username text-center"><b><?php echo $row['firstname'].' '.$row['lastname']; ?></b></h3>

                <p class="text-muted text-center"></p>
                <br>
                <h4><b>Basic Information</b></h4>
                <ul class="list-group list-group-unbordered mb-3">  
                  <li class="list-group-item">  
                  <b>Age</b> <a class="float-right"><?php echo (round($row['AGE1'])); ?></a>  
                  </li>
                <ul class="list-group list-group-unbordered mb-3">  
                  <li class="list-group-item">
                  <b>Email</b> <a class="float-right"><?php echo $row['email']; ?></a>  
                  </li>
                  <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <b>Phone Number</b> <a class="float-right"><?php echo $row['contno']; ?></a>
                  </li>
                  <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <b>Purok No.</b> <a class="float-right"><?php echo $row['puroknumber']; ?></a>
                  </li>
                  <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <b>Address</b> <a class="float-right"><?php echo $row['address']; ?></a>
                  </li>   
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills" id="nav">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab" id="nav" style="background-color:#060834 ; color:#D7D7D7;"><b>About</b></a></li>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form class="form-horizontal">
                    <div class="form-group">
                    <div class="col-sm-3">
                      <h4><b>Other Information</b></h4>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-3">
                      <label for="religion" class="form-label">Gender</label>
                      <input type="text" class="form-control" value="<?php echo $row['gender']; ?>" readonly>
                    </div>
                    <div class="col-3">
                      <label for="religion" class="form-label">Civil Status</label>
                      <input type="text" class="form-control" value="<?php echo $row['cs']; ?>" readonly>
                    </div>
                  <div class="col-3">
                      <label for="totalhousehold" class="form-label">Birth Date</label>
                      <input type="text" class="form-control" value="<?php echo $row['dob']; ?>" readonly>
                    </div>   
                    <div class="col-3">
                      <label for="phonenumber" class="form-label">Birth Place</label>
                      <input type="text" class="form-control" value="<?php echo $row['pob']; ?>" readonly>
                    </div>
                </div>    
                    <div class="row">
                    <div class="col-3">
                      <label for="religion" class="form-label">Resident Id</label>
                      <input type="text" class="form-control" value="<?php echo $row['residentid']; ?>" readonly>
                    </div>
                    <div class="col-3">
                      <label for="religion" class="form-label">Occupation</label>
                      <input type="text" class="form-control" value="<?php echo $row['occupation']; ?>" readonly>
                    </div>
                  <div class="col-3">
                      <label for="totalhousehold" class="form-label">Nationality</label>
                      <input type="text" class="form-control" value="<?php echo $row['nationality']; ?>" readonly>
                    </div>   
                    <div class="col-3">
                      <label for="phonenumber" class="form-label">Religion</label>
                      <input type="text" class="form-control" value="<?php echo $row['religion']; ?>" readonly>
                    </div>
                </div>  
                <div class="row">
                  <div class="col-4">
                      <label for="religion" class="form-label">Religion</label>
                      <input type="text" class="form-control" value="<?php echo $row['religion']; ?>" readonly>
                    </div>
                    <div class="col-4">
                      <label for="phonenumber" class="form-label">Land Ownership Status</label>
                      <input type="text" class="form-control" value="<?php echo $row['unt']; ?>" readonly>
                    </div>
                    <div class="col-4">
                      <label for="email" class="form-label">Home Ownership Status</label>
                      <input type="email" class="form-control" value="<?php echo $row['unt']; ?>" readonly>
                    </div>
                    </div>
                    <div class="row">
                <div class="col-sm-12">
                    </div>
                    </div>
                    </form>
                  </div>
                  <?php     
              }
            ?>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                  
                      <!-- timeline time label -->
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-head-fixed table-hover bg-light">
                <thead>
                <th>Tracking Number</th>
                <th>Document Type</th>
                <th>Fullname</th>
                <th>Date Issued</th>
                <th>Status</th>
                </thead>
                <tbody>
                  <?php
                    $id = $_POST['submit'];
                    $sql = "SELECT * FROM bmss WHERE id='$id'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/profile.jpg';
                      echo "
                          <tr>
                          <td>".$row['trackingno']."</td>
                          <td>".$row['purpose']."</td>
                          <td>".$row['sname'].", " .$row['fname']." ".$row['mname']."</td>
                          <td>".$row['di']."</td>
                          <td>".$row['status']."</td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
       
      </div>
  </div>
</div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>

    </div>
  </div>
    
<?php include 'includes/footer.php'; ?>
</div>
<!-- <?php include 'includes/scripts.php'; ?> -->
<script>
  $("a").click(function(){
    $("a").css("background-color","")
    $(this).css("background-color","#060834")
    $(this).css("color","#D7D7D7")
  });

  $("nav").click(function(){
    $("nav1").css("color","#060834")
  });

  $("nav1").click(function(){
    $("nav").css("color","#060834")
  });


  $(document).ready( function () {
    $('#example1').DataTable();
} );

</script>
</body>
</html>
