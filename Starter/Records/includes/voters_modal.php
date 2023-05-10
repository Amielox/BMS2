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
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title"><b>Add New Resident</b></h3>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
              <div class="form-group">
              <div class="col-sm-3">
                <h4><b>Basic Information</b></h4>
              </div>
              </div>
                <div class="form-group">
                    <div class="col-sm-4">
                      <label for="firstname" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="col-sm-4">
                      <label for="lastname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                    <div class="col-sm-4">
                      <label for="middlename" class="form-label">Middle Name</label>
                      <input type="text" class="form-control" id="middlename" name="middlename">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-3">
                      <label for="age" class="form-label">Age</label>
                      <input type="text" class="form-control" id="age" name="age" required>
                    </div>
                <div class="col-sm-3">
                      <label for="birthdate" class="form-label">Birth Date</label>
                      <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>
                <div class="col-sm-3">
                      <label for="birthplace" class="form-label">Birth Place</label>
                      <input type="text" class="form-control" id="birthplace" name="birthplace" required>
                </div>
                <div class="col-sm-3">
                  <label>Gender</label>
                  <select class="form-control select2" name="gender" style="width: 100%;">
                    <option selected="selected" value="Others">Others</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                      <label for="civilstatus" class="form-label">Civil Status</label>
                      <input type="text" class="form-control" id="civilstatus" name="civilstatus" required>
                </div>
                <div class="col-sm-3">
                      <label for="street" class="form-label">Street</label>
                      <input type="text" class="form-control" id="street" name="street" required>
                </div>  
                <div class="col-sm-6">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" name="address" required>
                </div> 
            </div>
            <hr>
            <div class="form-group">
              <div class="col-sm-3">
                <h4><b>Other Information</b></h4>
              </div>
              </div>
            <div class="form-group">
                    <div class="col-sm-3">
                      <label>Land Ownership Status</label>
                      <select class="form-control select2" name="landownership" style="width: 100%;">
                        <option selected="selected" value="Owned">Owned</option>
                        <option value="Rent">Rent</option>
                        <option value="Others">Others</option> 
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label for="puroknumber" class="form-label">Purok Area No.</label>
                      <input type="text" class="form-control" id="puroknumber" name="puroknumber" required>
                    </div>    
                    <div class="col-sm-3">
                      <label for="lengthstay" class="form-label">Length of Stay(In Months)</label>
                      <input type="text" class="form-control" id="lengthstay" name="lengthstay" required>
                    </div>
                    <div class="col-sm-3">
                      <label>Home Ownership Status</label>
                      <select class="form-control select2" name="houseownership" style="width: 100%;">
                      <option selected="selected" value="Owned">Owned</option>
                      <option value="Rent">Rent</option>
                      <option value="Live with Parents/Relatives">Live with Parents/Relatives</option> 
                      </select>
                    </div>    
                </div>
                <div class="form-group">
                  <div class="col-sm-3">
                      <label for="totalhousehold" class="form-label">Total Household No.</label>
                      <input type="text" class="form-control" id="totalhousehold" name="totalhousehold" required>
                    </div>   
                    <div class="col-sm-3">
                      <label for="religion" class="form-label">Religion</label>
                      <input type="text" class="form-control" id="religion" name="religion" >
                    </div>
                    <div class="col-sm-3">
                      <label for="phonenumber" class="form-label">Phone/Telephone Number</label>
                      <input type="text" class="form-control" id="phonenumber" name="phonenumber">
                    </div>
                    <div class="col-sm-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-3">
                      <label for="nationality" class="form-label">Nationality</label>
                      <input type="text" class="form-control" id="nationality" name="nationality" >
                    </div>
                    <div class="col-sm-6">
                      <label for="formeraddress" class="form-label">Former Address</label>
                      <input type="text" class="form-control" id="formeraddress" name="formeraddress">
                    </div>
                    <div class="col-sm-3">
                      <label>Disable Person</label>
                      <select class="form-control select2" name="disableperson" style="width: 100%;">
                      <option selected="selected" value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                 <div class="col-sm-3">
                      <label>Registered</label>
                      <select class="form-control select2"  name="registered" style="width: 100%;">
                      <option selected="selected" value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label for="barangayidno" class="form-label">Barangay ID No. (If have)</label>
                      <input type="text" class="form-control" id="barangayidno" name="barangayidno">
                    </div>
                    <div class="col-sm-6">
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

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title"><b>Update Resident Information</b></h3>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php" enctype="multipart/form-data">
              <div class="form-group">
              <div class="col-sm-3">
                <h4><b>Basic Information</b></h4>
              </div>
              </div>
                <div class="row">
                    <div class="col-4">
                      <label for="firstname" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
                    </div>
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
            <div class="form-group">
              <div class="col-sm-3">
                <h4><b>Other Information</b></h4>
              </div>
              </div>
            <div class="form-group">
                    <div class="col-sm-3">
                      <label>Land Ownership Status</label>
                      <select class="form-control select2" name="landownership" id="edit_landownership" style="width: 100%;">
                        <option selected="selected" value="Owned">Owned</option>
                        <option value="Rent">Rent</option>
                        <option value="Others">Others</option> 
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label for="puroknumber" class="form-label">Purok Area No.</label>
                      <input type="text" class="form-control" id="edit_puroknumber" name="puroknumber" required>
                    </div>    
                    <div class="col-sm-3">
                      <label for="lengthstay" class="form-label">Length of Stay(In Months)</label>
                      <input type="text" class="form-control" id="edit_lengthstay" name="lengthstay" required>
                    </div>
                    <div class="col-sm-3">
                      <label>Home Ownership Status</label>
                      <select class="form-control select2" name="houseownership" id="edit_houseownership" style="width: 100%;">
                      <option selected="selected" value="Owned">Owned</option>
                      <option value="Rent">Rent</option>
                      <option value="Live with Parents/Relatives">Live with Parents/Relatives</option> 
                      </select>
                    </div>    
                </div>
                <div class="form-group">
                  <div class="col-sm-3">
                      <label for="totalhousehold" class="form-label">Total Household No.</label>
                      <input type="text" class="form-control" id="edit_totalhousehold" name="totalhousehold" required>
                    </div>   
                    <div class="col-sm-3">
                      <label for="religion" class="form-label">Religion</label>
                      <input type="text" class="form-control" id="edit_religion" name="religion" >
                    </div>
                    <div class="col-sm-3">
                      <label for="phonenumber" class="form-label">Phone/Telephone Number</label>
                      <input type="text" class="form-control" id="edit_phonenumber" name="phonenumber">
                    </div>
                    <div class="col-sm-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="edit_email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-3">
                      <label for="nationality" class="form-label">Nationality</label>
                      <input type="text" class="form-control" id="edit_nationality" name="nationality" >
                    </div>
                    <div class="col-sm-6">
                      <label for="formeraddress" class="form-label">Former Address</label>
                      <input type="text" class="form-control" id="edit_formeraddress" name="formeraddress">
                    </div>
                    <div class="col-sm-3">
                      <label>Disable Person</label>
                      <select class="form-control select2" name="disableperson" name="edit_disableperson" style="width: 100%;">
                      <option selected="selected" value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                 <div class="col-sm-3">
                      <label>Registered</label>
                      <select class="form-control select2"  name="registered" id="edit_registered" style="width: 100%;">
                      <option selected="selected" value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label for="barangayidno" class="form-label">Barangay ID No. (If have)</label>
                      <input type="text" class="form-control" id="edit_barangayidno" name="barangayidno">
                    </div>
                    <div class="col-sm-6">
                     <label for="photo" class="form-label">Photo</label>
                     <input class="form-control form-control-sm" id="photo" name="photo" type="file">
                     </div>
                </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" id="close"><i class="fa fa-close" id="closea"></i> Close</button>
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE VOTER</p>
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


     