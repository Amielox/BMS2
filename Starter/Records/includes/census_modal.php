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
    <div class="modal-dialog modal-m">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><b>Add New Census</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
          <form class="form-horizontal" method="POST" action="admin_add.php" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-sm-6">
              </div>
              </div>
                <div class="row">
                  <div class="col-12">
                    <label for="username" class="form-label">Year</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="firstname" class="form-label">Population</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
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
    <div class="modal-dialog modal-m">
        <div class="modal-content">
            <div class="modal-header">
                            <h3 class="modal-title"><b>Update Census</b></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="admin_edit.php" enctype="multipart/form-data">
     
                <input type="hidden" class="id" name="id">
                <div class="row">
                  <div class="col-12">
                    <label for="username" class="form-label">Year</label>
                    <input type="text" class="form-control" id="edit_username" name="username" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="firstname" class="form-label">Population</label>
                    <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
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
              <form class="form-horizontal" method="POST" action="admin_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE CENSUS</p>
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