

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
            <h4 class="m-0">Manage Archive</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Archive</li>
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
                  <table id="example1" class="table table-head-fixed table-hover bg-light ">
                <thead>
                <th>No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Suffix</th>
                <th>Birth Date</th>
                <th>Sex</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Category</th>
                <th>Priority</th>
                <th>Allergic to vaccine</th>
                <th>Comorbidities</th>
                <th>Submitted</th>
                <th width="20%">Action</th>

                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM covidbooster";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                      <tr>
                      <td>".$row['id']."</td>
                      <td>".$row['firstname']."</td>
                      <td>".$row['surname']."</td>
                      <td>".$row['middlename']."</td>
                      <td>".$row['suffix']."</td>
                      <td>".$row['datebirth']."</td>
                      <td>".$row['gender']."</td>
                      <td>".$row['email']."</td>
                      <td>".$row['contact_num']."</td>
                      <td>".$row['category']."</td>
                      <td>".$row['priority']."</td>
                      <td>".$row['allergy']."</td>
                      <td>".$row['comorbidities']."</td>
                      <td>".$row['submitted']."</td>
                      <td>
                      <form method='POST' action='profile.php'>           
                      <input type='hidden' style='display:none;'  name='submit' class='ss' id='submit' value=".$row['id'].">      
                        <button class=' btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                        <button class=' btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                        <button type='submit' class=' btn-primary btn-sm btn-flat'><i class='fa fa-eye'></i> View</a>
                        </button>
                        </form>
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
    url: 'CBForm_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_firstname').val(response.firstname);
      $('#edit_surname').val(response.surname);
      $('#edit_middlename').val(response.middlename);
      $('#edit_suffix').val(response.suffix);
      $('#edit_datebirth').val(response.datebirth);
      $('#edit_gender').val(response.gender);
      $('#edit_email').val(response.email);
      $('#edit_contact_num').val(response.contact_num);
      $('#edit_category').val(response.category);
      $('#edit_priority').val(response.priority);
      $('#edit_allergy').val(response.allergy);
      $('#edit_comorbidities').val(response.comorbidities);
      $('.fullname').html(response.firstname+' '+response.surname);
      $('.edit_firstname').val(response.firstname);
      $('.edit_surname').val(response.surname);
      $('.edit_middlename').val(response.middlename);
      $('.edit_suffix').val(response.suffix);
      $('.edit_datebirth').val(response.datebirth);
      $('.edit_gender').val(response.gender);
      $('.edit_email').val(response.email);
      $('.edit_contact_num').val(response.contact_num);
      $('.edit_category').val(response.category);
      $('.edit_priority').val(response.priority);
      $('.edit_allergy').val(response.allergy);
      $('.edit_comorbidities').val(response.comorbidities);
    }
  });
}


</script>



</body>
</html>
