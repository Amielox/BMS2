<link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


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
            <h4 class="m-0">Manage Blotters</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blotters</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
    <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
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
        <div class="row">
          <div class="col-12">
                <!-- /.col -->
        
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#resident" data-toggle="tab" id="nav" style="background-color: #367fa9; color: white"><b>Registered</b></a></li>
                  <li class="nav-item"><a class="nav-link" href="#non-resident" data-toggle="tab" id="nav1" style="color: black"><b>Non-Registered</b></a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                <!-- /.tab-pane -->
                  <div class="active tab-pane" id="resident">
                      
                          <div class="box-header with-border">
                              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                               <table id="example1" class="table table-head-fixed table-hover bg-light  ">
                                <thead>
                                <th>Case No.</th>
                                  <th>Complainant</th>
                                  <th>Respondent</th>
                                  <th>Victim(s)</th>
                                  <th>Type</th>
                                  <th>Status</th>
                                  <th width="20%">Action</th>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql = "SELECT * FROM blotter WHERE residentstatus='Registered'";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                      echo "
                                          <tr>
                                          <td>".$row['no']."</td>
                                          <td>".$row['complainant']."</td>
                                          <td>".$row['respondent']."</td>
                                          <td>".$row['victims']."</td>
                                          <td>".$row['type']."</td>
                                          <td>".$row['status']."</td>
                                          <td>
                                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['no']."'><i class='fa fa-edit'></i> Edit</button>
                                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['no']."'><i class='fa fa-trash'></i> Delete</button>
                                          </td>
                                        </tr>
                                      ";
                                    }
                                  ?>
                                </tbody>
                              </table>
                      
                      </div>
                                    
                  </div>
                  <!-- /.tab-pane -->
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="non-resident">
                    
                          <div class="box-header with-border">
                              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                               <table id="example2" class="table table-head-fixed table-hover bg-light  ">
                                <thead>
                                <th>Case No.</th>
                                  <th>Complainant</th>
                                  <th>Respondent</th>
                                  <th>Victim(s)</th>
                                  <th>Type</th>
                                  <th>Status</th>
                                  <th width="20%">Action</th>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql = "SELECT * FROM blotter WHERE residentstatus='Non-Registered'";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                      echo "
                                          <tr>
                                          <td>".$row['no']."</td>
                                          <td>".$row['complainant']."</td>
                                          <td>".$row['respondent']."</td>
                                          <td>".$row['victims']."</td>
                                          <td>".$row['type']."</td>
                                          <td>".$row['status']."</td>
                                          <td>
                                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['no']."'><i class='fa fa-edit'></i> Edit</button>
                                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['no']."'><i class='fa fa-trash'></i> Delete</button>
                                          </td>
                                        </tr>
                                      ";
                                    }
                                  ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                     
                  </div>
                  <!-- /.tab-pane -->
                </div>
              
            </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include 'includes/footer.php'; ?>



<!-- ./wrapper -->


  <?php include 'includes/blotter_modal.php'; ?>
  <?php include 'includes/blotter_modal1.php'; ?>

<?php include 'includes/scripts.php'; ?>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

   

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
 
 
</script>


<!-- Page specific script -->
<script>
  $("#nav").click(function(){
    $("#nav").css("background-color","");
    $("#nav").css("color","white");
    $("#nav1").css("color","black");
  });

  $("#nav1").click(function(){
    $("#nav1").css("background-color","");
    $("#nav1").css("color","white");
    $("#nav").css("background-color","");
    $("#nav").css("color","black");
  });

 
</script>
</body>
</html>
