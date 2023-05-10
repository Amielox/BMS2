

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
            <h4 class="m-0">Health</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
              <div class="card-body">
              <form class="form-horizontal" method="POST" action="admin_add.php" enctype="multipart/form-data">
            <div class="form-group">
              </div>
                <div class="row">
                  <div class="col-6">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="col-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label>Category</label>
                      <select class="form-control select2" name="category" style="width: 100%;">
                        <option selected="selected" value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                     <label for="photo" class="form-label">Photo</label>
                     <input class="form-control form-control-sm" id="photo" name="photo" type="file">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" id="close"><i class="fa fa-close" id="closea"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"  id="save"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
</div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/admin_modal.php'; ?>
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
    url: 'admin_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_username').val(response.username);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_password').val(response.password);
      $('#edit_category').val(response.category);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}


</script>





</body>
</html>
