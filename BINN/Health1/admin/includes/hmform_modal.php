<style>
    hr {
        position: relative;
        border: none;
        height: 2px;
        background: darkgray;
        margin-top: 30px;
    }
    .hr1 {
        position: relative;
        border: none;
        height: 2px;
        background: darkgray;
        margin-top: -10px;
    }
    .modal-header
    {
        background-color: #060647;
    }
    h3{
        color: white;
    }
    .close{
        color: white !important;
        font-size: 30px;
    }
    #save{
      background: #060647;
      font-size: 18px;
    }
    #close{
      font-size: 18px;
      color: #990000 !important;
    }
    #closea{
      color: #990000 !important;
    }
</style>
<div class="modal fade" id="view">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                            <h3 class="modal-title"><b>View Information</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="HealthView.php" enctype="multipart/form-data">
              <div class="form-group">
              <div class="col-sm-3">
                <h4><b>Health Monitoring Form</b></h4>
              </div>
              </div>
                <div class="row">
                <input type="hidden" class="residentid" name="residentid">
                    <div class="col-4">
                      <label for="residentid" class="form-label">Resident ID</label>
                      <input type="text" class="form-control" id="residentid" name="residentid" value="<?php echo  $_SESSION['residentid'];?>"readonly>
                    </div>
                    <div class="col-4">
                      <label for="fullname" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo  $_SESSION['firstname']." " . $_SESSION['lastname'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="lastname" class="form-label">Age</label>
                      <input type="text" class="form-control" id="age" name="age" value="<?php echo "". (round($_SESSION['age']))."";?>" readonly>
                  </div>
                  <div class="col-4">
                      <label for="gender" class="form-label">Gender</label>
                      <input type="text" class="form-control" id="gender" name="gender" value="<?php echo  $_SESSION['gender'];?>" readonly>
                  </div>
                  <div class="col-4">
                      <label for="contno" class="form-label">Contact Number</label>
                      <input type="text" class="form-control" id="contno" name="contno" value="<?php echo  $_SESSION['contno'];?>" readonly>
                  </div>
                  <div class="col-4">
                      <label for="perma_add" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo  $_SESSION['address'];?>" readonly>
                  </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" id="close"><i class="fa fa-close" id="close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div>

