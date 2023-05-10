

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
            <h1 class="m-0">Resident Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Resident Profile</li>
              
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
                    $id = $_POST['submit'];
                    $sql = "SELECT * FROM residents WHERE id='$id'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){              
              ?>
                                        
            <!-- Profile Image -->
            <div class='card card-primary card-outline'>
              <div class='card-body box-profile'>
                <div class='text-center'>
                  <img class='profile-user-img img-fluid img-circle'
                  src="<?php echo (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg'; ?>" alt='User profile picture'>
                </div>

                <h3 class="profile-username text-center"><b><?php echo $row['firstname'].' '.$row['lastname']; ?></b></h3>

                <p class="text-muted text-center"></p>
                <br>
                <h4><b>Basic Information</b></h4>
                <ul class="list-group list-group-unbordered mb-3">  
                  <li class="list-group-item">
                  <b>Age</b> <a class="float-right"><?php echo $row['age']; ?></a>  
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
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab" id="nav" style="background-color: #367fa9; color: white"><b>About</b></a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab" id="nav1" style="color: black"><b>Covid/Booster</b></a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="timeline">
                  <form class="form-horizontal">
                    <div class="form-group">
                    <div class="col-sm-3">
                      <h4><b>Other Information</b></h4>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4">
                      <label for="gender" class="form-label">Gender</label>
                      <input type="text" class="form-control" value="<?php echo $row['gender']; ?>" readonly>
                    </div>
                  <div class="col-4">
                      <label for="datebirth" class="form-label">Birth Date</label>
                      <input type="text" class="form-control" value="<?php echo $row['dob']; ?>" readonly>
                    </div> 
                    <div class="col-4">
                      <label for="pobField" class="form-label">Place of Birth</label>
                      <input type="text" class="form-control" id="pobField1" name="pob" value="<?php echo $row['pob']; ?>" readonly>
                    </div>
                    <div class="col-4">
                    <label for="csField" class="form-label">Civil Status</label>
                        <input type="text" class="form-control" id="csField1" name="cs" value="<?php echo $row['cs']; ?>" readonly>
                    </div> 
                    <div class="col-4">
                        <label for="religionField" class="form-label">Religion</label>
                        <input type="text" class="form-control" id="religionField1" name="religion" value="<?php echo $row['religion']; ?>" readonly>
                    </div> 
                    <div class="col-4">
                    <label for="nationField" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationField1" name="nation" value="<?php echo $row['nationality']; ?>" readonly>
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
        <div class="col-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-head-fixed table-hover bg-light">
                <thead>
                <th>Category</th>
                <th>Priority</th>
                <th>Allergic to vaccine</th>
                <th>Comorbidities</th> </thead>
                <tbody>
                  <?php
                    $id = $_POST['submit'];
                    $sql = "SELECT * FROM covidbooster WHERE id='$id'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                          <tr>
                          <td>".$row['category']."</td>
                          <td>".$row['priority']."</td>
                          <td>".$row['allergy']."</td>
                          <td>".$row['comorbidities']."</td>
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
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    
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
$("#nav").click(function(){
    $("#nav").css("background-color","#367fa9");
    $("#nav").css("color","white");
    $("#nav1").css("background-color","");
    $("#nav1").css("color","black");
  });

  $("#nav1").click(function(){
    $("#nav1").css("background-color","#367fa9");
    $("#nav1").css("color","white");
    $("#nav").css("background-color","");
    $("#nav").css("color","black");
  });

</script>
</body>
</html>
