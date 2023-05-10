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
<div class="modal fade" id="edit">
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
                <input type="hidden" class="id" name="id">
                    <div class="col-4">
                      <label for="residentid" class="form-label">Resident ID</label>
                      <input type="text" class="form-control" id="view_residentid" name="residentid" readonly>
                    </div>
                    <div class="col-4">
                      <label for="fullname" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="view_fullname" name="fullname" readonly>
                  </div>
                  <div class="col-4">
                      <label for="age" class="form-label">Age</label>
                      <input type="text" class="form-control" id="view_age" name="age" readonly>
                  </div>
                  <div class="col-4">
                      <label for="gender" class="form-label">Gender</label>
                      <input type="text" class="form-control" id="view_gender" name="gender" readonly>
                  </div>
                  <div class="col-4">
                      <label for="contact_num" class="form-label">Contact Number</label>
                      <input type="text" class="form-control" id="view_contact_num" name="contact_num"readonly>
                  </div>
                  <div class="col-4">
                      <label for="perma_add" class="form-label">Address</label>
                      <input type="text" class="form-control" id="view_perma_add" name="perma_add" readonly>
                  </div>
                   <div class="col-6">
                       <label for="height" class="form-label">Height</label>
                       <input type="text" class="form-control" id="view_height" name="height" readonly>
                   </div>
                   <div class="col-6">
                      <label for="weight" class="form-label">Weight</label>
                      <input type="text" class="form-control" id="view_weight" name="weight" readonly>
                   </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" id="close"><i class="fa fa-close" id="close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div>

