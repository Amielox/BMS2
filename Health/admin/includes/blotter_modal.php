<!-- Select2 -->
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
    #footer{
      padding: -100px;
    }
</style>
<!-- Add -->
<!------ Include the above in your HEAD tag ---------->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><b>Add New Records</b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="blotter_add.php">
              <div class="row">
                <div class="col-6">
                  <label>Complainant (Resident No. - Lastname, Firstname, Middlename)</label>
                    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"  name="id" id="id" onChange="getResidentData(this.value)" style="width: 100%;">
                      <option disabled selected>--- Select Complainant ---</option>
                        <?php
                          $sql = "SELECT * FROM residents";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                              {
                                echo "<option value='". $row['id'] ."'>" .$row['id'] ." - " .$row['lastname'] .", " .$row['firstname'] ." , " .$row['middlename'] ."</option>";
                              }
                            };
                         ?>  
                      </select>
                  </div>
                  <div class="col-6">
                  <label>Status</label>
                      <select class="form-control" id="residentstatusxx" name="residentstatusxx" style="width: 100%;">
                      <option selected="selected" value="Non-Registered">Non-Registered</option>
                      <option value="Registered">Registered</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    <label for="residentno" class="form-label">Resident No.</label>
                    <input type="text" class="form-control" id="residentno" name="residentno" >
                  </div>
                  <div class="col-4">
                    <label for="fullnamexx" class="form-label">Complainant Name</label>
                    <input type="text" class="form-control" id="fullnamexx" name="fullnamexx" >
                  </div>
                  <div class="col-6">
                    <label for="respondent" class="form-label">Respondent</label>
                    <input type="text" class="form-control" id="respondent" name="respondent" >
                  </div>
                </div>

                <div class="row">
                <div class="col-6">
                    <label for="victims" class="form-label">Victim(s)</label>
                    <input type="text" class="form-control" id="victims" name="victims" >
                  </div>
                  <div class="col-6">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" >
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" >
                  </div>
                  <div class="col-6">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" >
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="time" class="form-label">Time</label>
                    <input type="time" class="form-control" id="time" name="time" >
                  </div>
                  <div class="col-6">
                      <label>Status</label>
                      <select class="form-control" id="status" name="status" style="width: 100%;">
                      <option selected="selected" value="Active">Active</option>
                      <option value="Settled">Settled</option>
                      </select>
                    </div>    
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="details" class="form-label">Details</label>
                    <textarea class="form-control" id="details" name="details" rows="3"></textarea>
                  </div>
                </div>
                            
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" id="close"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="add" id="add"><i class="fa fa-check-square-o"></i> Save</button>
            </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit -->
<div class="modal fade" id="config">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Position</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="positions_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_description" name="description">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_max_vote" class="col-sm-3 control-label">Maximum Vote</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_max_vote" name="max_vote">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
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
              <form class="form-horizontal" method="POST" action="positions_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE POSITION</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer" id="footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min1.js"></script>
<script src="../plugins/jquery/jquery.min1.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>

  <script>
  function getResidentData(id){
    $.ajax({
      url:"getResidentData.php",
      method : "POST",
      type : JSON,
      data : {id},
      success : function(cntent){
        var gg = JSON.parse(cntent);
        console.log(gg.fullnamex);
        $("#fullnamexx").val(gg.fullnamex);
        $("#residentno").val(gg.residentnox);
        $("#residentstatusxx").val(gg.residentstatusx);
        }
      })
    }

  $(function () {
   $('.select2').select2()

  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  });
</script>