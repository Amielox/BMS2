

<?php include 'includes/asession.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/asidebar.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Manage Officials</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Officials</li>
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
        <div class="card-header">   
        <a href="#addnew" data-toggle="modal" class="btn-info btn-sm btn-flat float-left" data-id=".$_POST['submit']."><i class="fa fa-plus"></i> New</a>       
      </div>
      <br>
      <div class="row">

    <?php
        $sql = "SELECT * FROM webofficial";
        $query = $conn->query($sql);
        while($row = $query->fetch_assoc()){     
    ?> 
            <div class="col-lg-4 cardc">
                <div class="card col-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                      <div style="width: 100px; height: 150px;">
                      <img src="<?php echo (!empty($row['photo'])) ? '../images/'.$row['photo'] : 'images/profile.jpg'; ?>" style="width:200px; height:100px; margin-top:25px; border-radius:50%; border: 2px solid blue;" class="img-fluid rounded-start" alt="...">
                      </div>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><b><?php echo $row['position']; ?></b></h4><br>
                        <p class="card-text"><?php echo $row['name']; ?></p>
                    </div>
                    <hr>
                    <button class='btn-danger btn-sm delete btn-flat float-right' data-id=<?php echo $row['id']; ?> style="background-color:white; border: none; color:red; margin-bottom:10px;"><i class='fa fa-trash'></i> <b>Delete</b></button>
                    <button class='btn-success btn-sm edit btn-flat float-right' data-id=<?php echo $row['id']; ?> style="background-color:white; border: none; color:green; margin-bottom:10px;"><i class='fa fa-edit'></i> <b>Update</b></button>
                    </div>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>
      </div>
    </section>   
  </div>
</div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/officials_modal.php'; ?>
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
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'officials_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_name').val(response.name);
      $('#edit_position').val(response.position);
      $('#edit_term').val(response.term);
      $('.name').html(response.name);
    }
  });
}


</script>





</body>
</html>
