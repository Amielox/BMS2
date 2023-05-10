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
                            <h3 class="modal-title"><b>Update Information</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="CBForm_edit.php" enctype="multipart/form-data">
              <div class="form-group">
              <div class="col-sm-3">
                <h4><b>Covid Vaxx and Booster</b></h4>
              </div>
              </div>
                <div class="row">
                <input type="hidden" class="id" name="id">
                    <div class="col-3">
                      <label for="firstname" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
                    </div>
                    <div class="col-3">
                      <label for="lastname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
                    </div>
                    <div class="col-3">
                      <label for="middlename" class="form-label">Middle Name</label>
                      <input type="text" class="form-control" id="edit_middlename" name="middlename">
                </div>
                    <div class="col-3">
                      <label for="suf" class="form-label">Suffix</label>
                      <input type="text" class="form-control" id="edit_suf" name="suf">
                    </div>
                </div>
            <div class="row">
                <div class="col-3">
                      <label for="dob" class="form-label">Birth Date</label>
                      <input type="date" class="form-control" id="edit_dob" name="dob" required>
                </div>                
                <div class="col-3">
                  <label>Sex</label>
                  <select class="form-control select2" name="gender" id="edit_gender" style="width: 100%;">
                    <option selected="selected" value="Others">Others</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                </div>
                <div class="col-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="edit_email" name="email" required>
                </div>
                    <div class="col-3">
                      <label for="contno" class="form-label">Mobile</label>
                      <input type="text" class="form-control" id="edit_contno" name="contno">
                  </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-3">
                <h4><b>Other Information</b></h4>
              </div>
              </div>
            <div class="row">     
                <div class="col-6">
                  <label for="category" class="form-label"><h5>Category</h5></label>
                  <select class="form-control select3" name="category" style="width: 100%;" required>
                    <option selected="selected" value="Select">Select</option>
                    <option value="vaccine">Covid Vaccination</option>
                    <option value="booster">Booster</option>
                  </select>
                </div>

                <div class="col-6">
                  <label for="priority" class="form-label"><h5>Select Priority</h5></label>
                <select name="priority" class="form-control" id="priority" required>
                  <option value="" selected="selected">SELECT PRIORITY</option>
                  <option value="A1 Health Care Workers">A1 Health Care Workers</option>
                  <option value="A2 Senior Citizens">A2 Senior Citizens</option>
                  <option value="A3 Adult with Comorbidity">A3 Adult with Comorbidity</option>
                  <option value="A4 Frontline Personnel in Essential Sector">A4 Frontline Personnel in Essential Sector</option>
                  <option value="A5 Poor Population">A5 Poor Population</option>
                  <option value="B1 Teachers and Social Workers">B1 Teachers and Social Workers</option>
                  <option value="B2 Other Government Workers">B2 Other Government Workers</option>
                  <option value="B3 Other Essential Workers">B3 Other Essential Workers</option>
                  <option value="B4 Socio-demographic Groups">B4 Socio-demographic Groups</option>
                  <option value="B5 Overseas Filipino Workers">B5 Overseas Filipino Workers</option>
                  <option value="B6 Other Remaining Workforce">B6 Other Remaining Workforce</option>
                  <option value="C Rest of Adult Population">C Rest of Adult Population</option>
                  <option value="A3 Pediatric with co-morbidity">A3 Pediatric with co-morbidity</option>
                  <option value="C Other Pediatric">C Other Pediatric</option>
                  </select>
              </div>   
                </div>
                <div class="row">
                <div class="col-6">
                  <label for="allergy" class="form-label"><h5>Allergic to vaccines or their ingredients?</h5></label>
                  <select class="form-control select3" name="allergy" style="width: 100%;" required>
                    <option selected="selected" value="Select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="col-6">
                  <label for="comorbidities" class="form-label"><h5>Do you have comorbidities?</h5></label>
                  <select class="form-control select3" name="comorbidities" style="width: 100%;" required>
                    <option selected="selected" value="Select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                 </div>
              </div>
              <div class="row">
              <div class="col-6">
                      <label for="sched" class="form-label">Schedule</label>
                      <input type="date" class="form-control" id="sched" name="sched" required>
                  </div>
                    <div class="col-6">
                      <label for="site" class="form-label">Vaxx/Booster Site</label>
                      <input type="text" class="form-control" id="site" name="site">
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
                            <h3 class="modal-title"><b>Deleting...</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="CBForm_delete.php">
                <input type="hidden" class="id" name="id">
                <input type="hidden" class="edit_firstname" name="firstname">
                <input type="hidden" class="edit_lastname" name="lastname">
                <input type="hidden" class="edit_middlename" name="middlename">
                <input type="hidden" class="edit_age" name="suffix">
                <input type="hidden" class="edit_birthdate" name="birthdate">
                <input type="hidden" class="edit_gender" name="gender">
                <input type="hidden" class="edit_email" name="email">
                <input type="hidden" class="edit_phonenumber" name="contact_num">
                <input type="hidden" class="edit_category" name="category">
                <input type="hidden" class="edit_priority" name="priority">
                <input type="hidden" class="edit_allergy" name="allergy">
                <input type="hidden" class="edit_comorbidities" name="comorbidities">
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
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     