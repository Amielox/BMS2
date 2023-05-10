

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
          <div class="col-md-12">
            <!-- Profile Image -->
            <div class="box-body">
              <table id="example1" class="table table-head-fixed table-hover bg-light">
                <thead>
                <th>Category</th>
                <th>Priority</th>
                <th>Allergic to vaccine</th>
                <th>Comorbidities</th> 
                <th>Schedule</th>
                <th>Site</th> 
              </thead>
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
                          <td>".$row['sched']."</td>
                          <td>".$row['site']."</td>
                        </tr>
                      ";
                  }
                  ;
                  ?>
                </tbody>
              </table>
            </div>
          </div> 
      </div>
  </div>
                    
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
