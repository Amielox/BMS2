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
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue lb">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM residents";
                $query = $conn->query($sql);
                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="profile.php" class="small-box-footer ">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue gg">
            <div class="inner"> 
               <?php
                       $sql = "SELECT SYSDATE(),dob,DATEDIFF(SYSDATE(),dob)/365 AS AGE from residents WHERE(DATEDIFF(SYSDATE(), dob)/365)>=60";
                       $query = $conn->query($sql);
  
                       echo "<h3>".$query->num_rows."</h3>";
                    ?>    
             
              <p>Senior Citizen</p>
            </div>
            <div class="icon">
              <i class="fa fa-tasks"></i>
            </div>
            <a href="Senior.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue gr">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM hmf WHERE PWD='yes'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>PWD</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="pwd.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
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
