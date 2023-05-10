

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
            <h4 class="m-0">Certificate of Indigency</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certificate of Indigency</li>
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
          <div class="col-12 ">
              <div class="card-header">   
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-head-fixed table-hover bg-light  ">
                <thead>
                  <th>Tracking NO</th>
                  <th>Certificate</th>
                  <th>Resident ID</th>
                  <th>Full Name</th>
                  <th>Status</th>
                  <th width="20%">Action</th>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM bmss WHERE status='Pending' AND purpose='Certificate of Indigency'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/profile.jpg';
                      echo "
                          <tr>
                          <td>".$row['trackingno']."</td>
                          <td>".$row['purpose']."</td>
                          <td>".$row['residentid']."</td>
                          <td>".$row['sname']." " .$row['fname'].", ".$row['mname']."</td>
                          <td>".$row['status']."</td>
                          <td>
                            <button class='btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> View</button>
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
      </div>
    </section>   
  </div>
</div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/resident_modal.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</div>


<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'residents_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_middlename').val(response.middlename);
      $('#edit_age').val(response.age);
      $('#edit_birthdate').val(response.birthdate);
      $('#edit_birthplace').val(response.birthplace);
      $('#edit_gender').val(response.gender);
      $('#edit_civilstatus').val(response.civilstatus);
      $('#edit_street').val(response.street);
      $('#edit_address').val(response.address);
      $('#edit_landownership').val(response.landownership);
      $('#edit_puroknumber').val(response.puroknumber);
      $('#edit_lengthstay').val(response.lengthstay);
      $('#edit_houseownership').val(response.houseownership);
      $('#edit_totalhousehold').val(response.totalhousehold);
      $('#edit_religion').val(response.religion);
      $('#edit_phonenumber').val(response.phonenumber);
      $('#edit_email').val(response.email);
      $('#edit_nationality').val(response.nationality);
      $('#edit_formeraddress').val(response.formeraddress);
      $('#edit_disableperson').val(response.disableperson);
      $('#edit_registered').val(response.registered);
      $('#edit_barangayidno').val(response.barangayidno);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}


</script>



</body>
</html>
