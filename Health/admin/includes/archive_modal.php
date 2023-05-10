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

<!-- Restore -->
<div class="modal fade" id="restore">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                            <h3 class="modal-title"><b>Restoring...</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="CBForm_restore.php">
                <input type="hidden" class="id" name="id">
                <input type="hidden" class="edit_firstname" name="firstname">
                <input type="hidden" class="edit_surname" name="surname">
                <input type="hidden" class="edit_middlename" name="middlename">
                <input type="hidden" class="edit_suffix" name="suffix">
                <input type="hidden" class="edit_datebirth" name="datebirth">
                <input type="hidden" class="edit_gender" name="gender">
                <input type="hidden" class="edit_email" name="email">  
                <input type="hidden" class="edit_contact_num" name="contact_num">
                <input type="hidden" class="edit_category" name="category">
                <input type="hidden" class="edit_priority" name="priority">
                <input type="hidden" class="edit_allergy" name="allergy">
                <input type="hidden" class="edit_comorbidities" name="comorbidities">
                <div class="text-center">
                    <p>RESTORE RESIDENT</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="restore"><i class="fa fa-plus"></i> Restore</button>
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
                <input type="hidden" class="edit_surname" name="surname">
                <input type="hidden" class="edit_middlename" name="middlename">
                <input type="hidden" class="edit_suffix" name="suffix">
                <input type="hidden" class="edit_datebirth" name="datebirth">
                <input type="hidden" class="edit_gender" name="gender">
                <input type="hidden" class="edit_email" name="email">  
                <input type="hidden" class="edit_contact_num" name="contact_num">
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


     