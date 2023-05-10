

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
            <h4 class="m-0">Manage Health</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Health</li>
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
                <div class="card-body">
                  <table id="example1" class="table table-head-fixed table-hover bg-light ">
                <thead>
                  <th>No.</th>
                  <th>Fullname</th>
                  <th>Gender</th>
                  <th>perma_add</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM hmf";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                          <tr>
                          <td>".$row['id']."</td>
                          <td>".$row['fullname']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['perma_add']."</td>
                          <td>
                          <button class=' btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i>View</button>
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
  <?php include 'includes/hmform_modal.php'; ?>
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
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'HMForm_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#view_residentid').val(response.residentid);
      $('#view_fullname').val(response.fullname);
      $('#view_age').val(response.age);
      $('#view_gender').val(response.gender);
      $('#view_contact_num').val(response.contact_num);
      $('#view_perma_add').val(response.perma_add);
      $('#view_heigt').val(response.height);
      $('#view_weight').val(response.weight);
      $('#view_contno').val(response.contno);
      $('#view_address').val(response.adress);
    }
  });
}


</script>



</body>
</html>
