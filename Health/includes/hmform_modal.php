<!-- Add -->
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

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                            <h3 class="modal-title"><b>View Information</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="edit-profile.php" enctype="multipart/form-data">
              <div class="form-group">
              <div class="col-sm-3">
                <h4><b>Basic Information</b></h4>
              </div>
              </div>
                <div class="row">
                <input type="hidden" class="id" name="id">
                <div class="col-4">
                      <label for="residentid" class="form-label">Resident ID</label>
                      <input type="text" class="form-control" name="residentid" value="<?php echo  $_SESSION['residentid'];?>" readonly required>
               
                      <div class="col-4">
                      <label for="firstname" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="firstname" name="fullname" value="<?php echo  $_SESSION['firstname']." " . $_SESSION['lastname'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="gender" class="form-label">Gender</label>
                      <input type="text" class="form-control" id="gender" name="gender" value="<?php echo  $_SESSION['gender'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="perma_add" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo  $_SESSION['address'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="perma_add" class="form-label">Purok</label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo  $_SESSION['purok'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="contno" class="form-label">Contact Number</label>
                      <input type="text" class="form-control" id="contno" name="contno" value="<?php echo  $_SESSION['contno'];?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="lastname" class="form-label">Age</label>
                      <input type="text" class="form-control" id="age" name="age" value="<?php echo "". (round($row['AGE1']))."";?>" readonly required>
                  </div>
                  <div class="col-4">
                      <label for="lastname" class="form-label">Height</label>
                      <input type="text" class="form-control" id="age" name="age"  >
                  </div>
                  <div class="col-4">
                      <label for="lastname" class="form-label">Weight</label>
                      <input type="text" class="form-control" id="age" name="age" >
                  </div>   </div>
                    <div class="col-4">
                      <label for="lastname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
                    </div>
                    <div class="col-4">
                      <label for="middlename" class="form-label">Middle Name</label>
                      <input type="text" class="form-control" id="edit_middlename" name="middlename">
                </div>
                </div>
            <div class="row">
                <div class="col-3">
                      <label for="age" class="form-label">Age</label>
                      <input type="text" class="form-control" id="edit_age" name="age" required>
                    </div>
                <div class="col-3">
                      <label for="birthdate" class="form-label">Birth Date</label>
                      <input type="date" class="form-control" id="edit_birthdate" name="birthdate" required>
                </div>
                <div class="col-3">
                      <label for="birthplace" class="form-label">Birth Place</label>
                      <input type="text" class="form-control" id="edit_birthplace" name="birthplace" required>
                </div>
                <div class="col-3">
                  <label>Gender</label>
                  <select class="form-control select2" name="gender" id="edit_gender" style="width: 100%;">
                    <option selected="selected" value="Others">Others</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                      <label for="civilstatus" class="form-label">Civil Status</label>
                      <input type="text" class="form-control" id="edit_civilstatus" name="civilstatus" required>
                </div>
                <div class="col-3">
                      <label for="street" class="form-label">Street</label>
                      <input type="text" class="form-control" id="edit_street" name="street" required>
                </div>  
                <div class="col-6">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="edit_address" name="address" required>
                </div> 
            </div>
            <hr>
            <div class="row">
              <div class="col-3">
                <h4><b>Other Information</b></h4>
              </div>
              </div>
              <div class="col-12"> 
                      <label><h5>Check the conditions that apply to you or to any members of your immediate relatives:</h5></label>
                <div class="form-check">
            <input class="form-check-input" type="checkbox" value="asthma" id="edit_asthma" name="asthma">
            <label class="form-check-label" for="checkbox">Asthma </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="cancer" id="edit_cancer" name="cancer">
            <label class="form-check-label" for="checkbox">Cancer</label>
            </div>
            <div class="row">
             <div class="col-12">
            <label><h5>Are you currently taking any medications?</h5></label>
                <div class="form-check">
                <input class="form-check-input" type="radio"  value="Yes" name="edit_medicine" id="medicine">
                <label class="form-check-label" for="medicine">Yes</label>
            </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" value="No" name="edit_medicine" id="medicine">
                <label class="form-check-label" for="medicine">No</label>
            </div>
                </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" id="close"><i class="fa fa-close" id="close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="edit"  id="save"><i class="fa fa-save"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                            <h3 class="modal-title"><b>Deleting...</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="delete-profile.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE RESIDENT</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     