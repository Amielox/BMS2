<?php include 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/slugify.php'; ?>
<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-base.min.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Baranggay Culiat Management System | Admin Panel</h1>
          </div><!-- /.col -->
          <!--<div class="col-sm-2">
            <a  class="btn-success btn-sm btn-flat float-right button mx-2" href="report.php" >View Report</a>
          </div>-->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        

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
          ?>
        </div>
      </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 col-xs-12">
            <!-- small box -->
            <iframe src="admin/index.php" style="width: 100%; height: 2000px; border: none; margin" title="W3Schools Free Online Web Tutorials">
            </iframe>
          </div>
          <!-- ./col -->
          

        </div>
        <!-- /.row -->
 
 

<?php include 'includes/chartscript.php'; ?>
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

</div>
</div>
<!-- ./wrapper -->

<?php include 'includes/footer.php'; ?>
</body>
</html>
