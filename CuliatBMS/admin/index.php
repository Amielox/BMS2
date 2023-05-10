<?php
session_start();
?>

<?php include('connection.php'); 
?>

<!--Auto No. generator/tracking Number-->
<?php
require_once('connection.php');
extract($_POST);

$query = "SELECT trackingno from bmss ORDER BY trackingno desc";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$lastid = isset($row['trackingno']);

if(empty($lastid)) {

  $tno = mt_rand(100000,999999);
  $number = 'TNO-' .$tno;

}
else {
  $tno = mt_rand(100000,999999);
  $number = 'TNO-' .$tno;
}
?>
<!--end of Auto No. generator/tracking Number-->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <title>Baranggay Culiat Management System | Admin panel</title>
  <style type="text/css">
    .btnAdd {
      text-align: left;
      width: 83%;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="container">
        <div class="btnAdd">
          <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">Add Request</a>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-12">
            <table id="example" class="table">
              <thead>
              <th>Tracking Number</th>
              <th>Document Type</th>
              <th>Surname</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Suffix</th>
              <th>Date Issued</th>
              <th>Status</th>
              <th>Actions</th>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>


  
  <script type="text/javascript">

// Fetch Data
    $(document).ready(function() {
      $('#example').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetch_data.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [8]
          },

        ]
      });
    });
//End of Fetch Data


// Add Request
    $(document).on('submit', '#addUser', function(e) {
      e.preventDefault();
      // var city = $('#addCityField').val();
      // var username = $('#addUserField').val();
      // var mobile = $('#addMobileField').val();
      // var email = $('#addEmailField').val();
      var trackingno = $('#trackingnoField1').val();
      var purpose = $('#purposeField1').val();
      var status = $('#statusField1').val();
      var sname = $('#snameField1').val();
      var address = $('#addressField1').val();
      var dob = $('#dobField1').val();
      var tin = $('#tinField1').val();
      var htwt = $('#htwtField1').val();
      var weight = $('#weightField1').val();
      var emergency = $('#emergencyField1').val();
      var nos = $('#nosField1').val();
      var fname = $('#fnameField1').val();
      var pob = $('#pobField1').val();
      var sssno = $('#sssnoField1').val();
      var color = $('#colorField1').val();
      var email = $('#addemailField1').val();
      var rel = $('#relField1').val();
      var scontno = $('#scontnoField1').val();
      var mname = $('#mnameField1').val();
      var unt = $('#untField1').val();
      var gender = $('#genderField1').val();
      var precno = $('#precnoField1').val();
      var contno = $('#contnoField1').val();
      var contemer = $('#contemerField1').val();
      var spooccu = $('#spooccuField1').val();
      var suf = $('#sufField1').val();
      var nation = $('#nationField1').val();
      var cs = $('#csField1').val();  
      var religion = $('#religionField1').val();
      var occu = $('#occuField1').val();
      var reason = $('#reasonField1').val();



      if (trackingno != '' && purpose != '' && status != '' && sname != '' && address != '' && dob != '' && emergency != '' && fname != '' && pob  != '' && unt != '' && gender != '' && contno != '' && contemer != '' && nation != '' && cs != '' && religion != '' && occu != '') {
        $.ajax({
          url: "add_user.php",
          type: "post",
          data: {
            // city: city,
            // username: username,
            // mobile: mobile,
            // email: email
            trackingno: trackingno,
            purpose: purpose,
            status: status,
            sname: sname,
            address: address,
            dob: dob,
            tin: tin,
            htwt: htwt,
            weight: weight,
            emergency: emergency,
            nos: nos,
            fname: fname,
            pob: pob,
            sssno:sssno,
            color: color,
            email: email,
            rel: rel,
            scontno: scontno,
            mname: mname,
            unt: unt,
            gender: gender,
            precno: precno,
            contno: contno,
            contemer: contemer,
            spooccu: spooccu,
            suf: suf, 
            nation: nation,
            cs: cs,
            religion: religion,
            occu: occu,
            reason: reason
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              mytable = $('#example').DataTable();
              mytable.draw();
              $('#addUserModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });
// End of add Request

// edit request
    $(document).on('submit', '#updateUser', function(e) {
      e.preventDefault();
      //var tr = $(this).closest('tr');
      // var city = $('#cityField').val();
      // var username = $('#nameField').val();
      // var mobile = $('#mobileField').val();
      // var email = $('#emailField').val();
      var trackingno = $('#trackingnoField').val();
      var purpose = $('#purposeField').val();
      var ssstatus = $('#statusField').val();
      var sname = $('#snameField').val();
      var address = $('#addressField').val();
      var dob = $('#dobField').val();
      var tin = $('#tinField').val();
      var htwt = $('#htwtField').val();
      var weight = $('#weightField').val();
      var emergency = $('#emergencyField').val();
      var nos = $('#nosField').val();
      var fname = $('#fnameField').val();
      var pob = $('#pobField').val();
      var sssno = $('#sssnoField').val();
      var color = $('#colorField').val();
      var email = $('#addemailField').val();
      var rel = $('#relField').val();
      var scontno = $('#scontnoField').val();
      var mname = $('#mnameField').val();
      var unt = $('#untField').val();
      var gender = $('#genderField').val();
      var precno = $('#precnoField').val();
      var contno = $('#contnoField').val();
      var contemer = $('#contemerField').val();
      var spooccu = $('#spooccuField').val();
      var suf = $('#sufField').val();
      var nation = $('#nationField').val();
      var cs = $('#csField').val();
      var religion = $('#religionField').val();
      var occu = $('#occuField').val();
      var di = $('#diField').val();
      var reason = $('#reasonField').val();
      

      var trid = $('#trid').val();
      var id = $('#id').val();
      if (trackingno != '' && purpose != '' && ssstatus != '' && sname != '' && address != '' && dob != '' && emergency != '' && fname != '' && pob  != '' && unt != '' && gender != '' && contno != '' && contemer != '' && nation != '' && cs != '' && religion != '' && occu != '') {
        $.ajax({
          url: "update_user.php",
          type: "post",
          data: {
            // city: city,
            // username: username,
            // mobile: mobile,
            // email: email,
            trackingno: trackingno,
            purpose: purpose,
            status: ssstatus,
            sname: sname,
            address: address,
            dob: dob,
            tin: tin,
            htwt: htwt,
            weight: weight,
            emergency: emergency,
            nos: nos,
            fname: fname,
            pob: pob,
            sssno:sssno,
            color: color,
            email: email,
            rel: rel,
            scontno: scontno,
            mname: mname,
            unt: unt,
            gender: gender,
            precno: precno,
            contno: contno,
            contemer: contemer,
            spooccu: spooccu,
            suf: suf,
            nation: nation,
            cs: cs,
            religion: religion,
            occu: occu,
            di: di,
            reason:reason,
            id: id
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              table = $('#example').DataTable();
              var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!"  data-id="' + id + '"  class="btn btn-danger btn-sm deleteBtn">Delete</a> </td> <a href="#!"  data-id="' + id + '"  class="btn btn-success btn-sm printBtn">Print</a> </td>';   
              var row = table.row("[id='" + trid + "']");
              // row.row("[id='" + trid + "']").data([id, username, email, mobile, city, button]);
              row.row("[id='" + trid + "']").data([trackingno, purpose, sname, fname, mname, suf, di, ssstatus, button]);
              $('#exampleModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });


    $('#example').on('click', '.editbtn ', function(event) {
      var table = $('#example').DataTable();
      var trid = $(this).closest('tr').attr('id');
      // console.log(selectedRow);
      var id = $(this).data('id');
      $('#exampleModal').modal('show');

      $.ajax({
        url: "get_single_data.php",
        data: {
          id: id
        },
        type: 'post',
        success: function(data) {
          var json = JSON.parse(data);
          // $('#nameField').val(json.username);
          // $('#emailField').val(json.email);
          // $('#mobileField').val(json.mobile);
          // $('#cityField').val(json.city);
          $('#trackingnoField').val(json.trackingno);
          $('#purposeField').val(json.purpose);
          $('#statusField').val(json.status);
          $('#snameField').val(json.sname);
          $('#addressField').val(json.address);
          $('#dobField').val(json.dob);
          $('#tinField').val(json.tin);
          $('#htwtField').val(json.htwt);
          $('#weightField').val(json.weight);
          $('#emergencyField').val(json.emergency);
          $('#nosField').val(json.nos);
          $('#fnameField').val(json.fname);
          $('#pobField').val(json.pob);
          $('#sssnoField').val(json.sssno);
          $('#colorField').val(json.color);
          $('#addemailField').val(json.email);
          $('#relField').val(json.rel);
          $('#scontnoField').val(json.scontno);
          $('#mnameField').val(json.mname);
          $('#untField').val(json.unt);
          $('#genderField').val(json.gender);
          $('#precnoField').val(json.precno);
          $('#contnoField').val(json.contno);
          $('#contemerField').val(json.contemer);
          $('#spooccuField').val(json.spooccu);
          $('#sufField').val(json.suf);
          $('#nationField').val(json.nation);
          $('#csField').val(json.cs);
          $('#religionField').val(json.religion);
          $('#occuField').val(json.occu);
          $('#diField').val(json.di);
          $('#reasonField').val(json.reason);            
          $('#id').val(id);
          $('#trid').val(trid);
        }
      })
    });
// End of edit request



// DELETE
    $(document).on('click', '.deleteBtn', function(event) {
      var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if (confirm("Are you sure to delete this Request ? ")) {
        $.ajax({
          url: "delete_user.php",
          data: {
            id: id
          },
          type: "post",
          success: function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if (status == 'success') {
              //table.fnDeleteRow( table.$('#' + id)[0] );
              //$("#example tbody").find(id).remove();
              //table.row($(this).closest("tr")) .remove();
              $("#" + id).closest('tr').remove();
            } else {
              alert('Failed');
              return;
            }
          }
        });
      } else {
        return null;
      }
    });

    // END OF DELETE

    // view photo
    
    // $(document).on('click', '.preview ', function(event) {
    //   var table = $('#example').DataTable();
    //   var trid = $(this).closest('tr').attr('id');
    //   var id = $(this).data('id');
    //   $('#previewModal').modal('show');

    //   $.ajax({
    //     url: "get_single_data.php",
    //     data: {
    //       id: id
    //     },
    //     type: 'post',
    //     success: function(data) {
    //       var json = JSON.parse(data);
       
    //       $('#id').val(id);
    //       $('#trid').val(trid);
    //     }
    //   })
    // });
// view photo


  </script>


<!-- <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="previewModalLabel">Image Preview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        </div>

      </div>
    </div>
</div> -->



  <!-- edit Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateUser" method="POST">

            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="trid" id="trid" value="">
            <input type="hidden" name="di" id="diField">



             <div class="row pb-3">
                <div class="col">
                <label for="trackingnoField" class="form-label">Tracking Number</label>
                  <input type="text" class="form-control" id="trackingnoField" name="trackingno"  readonly>
                </div>
                <div class="col">
                <label for="purposeField" class="form-label">Document to be Requested</label>
                  <input type="text" class="form-control" id="purposeField" name="purpose"  readonly>
                </div>
                <!-- <div class="col">
                <label for="purposeField" class="form-label">Document to be Requested</label>
                  <select class="form-control" id="purposeField" name="purpose" readonly>                                            
                    <option value = "">--Select Document Type--</option>
                    <option value = "Certificate of Indigency">Certificate of Indigency</option>
                    <option value = "Baranggay Certificate">Baranggay Certificate</option>
                    <option value = "Certificate of Residency">Certificate of Residency</option>  
                  </select>                
                </div> -->

                <div class="col">
                <label for="statusField" class="form-label">Status</label>
                  <select class="form-control" id="statusField" name="status" value = "Pending">                                            
                    <option value = "Pending">Pending</option>
                    <option value = "Acknowledged">Acknowledged</option>
                    <option value = "Ready for Pickup">Ready for Pickup</option>
                    <option value = "Released">Released</option>    
                  </select>                
                </div>
            </div>

            <!-- Start of 1st Section -->
            <div class="row pb-3">
              <div class="col">
              <label for="snameField" class="form-label">Surname: (Apelyido)</label>
              <input type="text" class="form-control" id="snameField" name="sname" readonly>
              </div>
              <div class="col">
              <label for="fnameField" class="form-label">First Name: (Pangalan)</label>
              <input type="text" class="form-control" id="fnameField" name="fname" readonly>
              </div>
              <div class="col">
              <label for="mnameField" class="form-label">Middle Name: (Gitnang Pangalan)</label>
              <input type="text" class="form-control" id="mnameField" name="mname" readonly>
              </div>
              <div class="col">
              <label for="sufField" class="form-label">Suffix: (Jr., Sr., II, Etc.)</label>
              <input type="text" class="form-control" id="sufField" name="suf" readonly>
              </div>
            </div>
            <!-- End of 1st Section -->
            
            <!--Start of 2nd Section -->
            <div class="row pb-3">
              <div class="col">
              <label for="pobField" class="form-label">Place of Birth: (Lugar ng Kapanangakan)</label>
              <input type="text" class="form-control" id="pobField" name="pob" readonly>
              </div>
              <div class="col">
              <label for="dobField" class="form-label">Date of Birth: (Araw ng kapanangakan)</label>
              <input type="date" class="form-control" id="dobField" name="dob" readonly>
              </div>
              <div class="col">
              <label for="genderField" class="form-label">Gender: <br>(Kasarian)</label>
              <input type="text" class="form-control" id="genderField" name="gender" readonly>
              </div>
              <div class="col">
              <label for="religionField" class="form-label">Religion: <br>(Relihiyon)</label>
              <input type="text" class="form-control" id="religionField" name="religion" readonly>
              </div>                                            
            </div>
            <!-- End of 2nd Section -->

            <!-- Start of 3rd Section -->
            <div class="row pb-3">
              <div class="col">
              <label for="nationField" class="form-label">Nationality: (Nasyonalidad)</label>
              <input type="text" class="form-control" id="nationField" name="nation" readonly>
              </div>
              <div class="col">
              <label for="csField" class="form-label">Civil Status: (Katayuang Sibil)</label>
              <input type="text" class="form-control" id="csField" name="cs" readonly>
              </div>  
            </div>                        

            <!-- End of 3rd Section -->

            <hr>
            <h4 class="modal-title pb-2">Contact Details</h4>


            <!-- Start of 4th Section -->            
            <div class="row pb-3">
              <div class="col-6">
              <label for="addressField" class="form-label">Address: <br>(Tirahan)</label>
              <input type="text" class="form-control" id="addressField" name="address" readonly>
              </div>
              <div class="col">
              <label for="untField" class="form-label">Uri ng Tirahan: <br>(Owner/Renter/Sharer)</label>
              <input type="text" class="form-control" id="untField" name="unt" readonly>
              </div>

              <div class="col">
              <label for="occuField" class="form-label">Occupation: <br>(Uri ng Trabaho)</label>
              <input type="text" class="form-control" id="occuField" name="occu" readonly>
              </div>                            
            </div>
            <!-- End of 4th Section --> 
            
            <!-- Start of 5th Section -->
              <div class="row pb-3">
                <div class="col">
                <label for="emailField" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="addemailField" name="email" readonly>
                </div>
                <div class="col">
                <label for="contnoField" class="form-label">Contact Number:</label>
                <input type="text" class="form-control" id="contnoField" name="contno" readonly>
                </div>
              </div>
            <!-- End of 5th Section -->

            <!-- Start of 6th Row -->
            <div class="row pb-3">
              <div class="col">
              <label for="tinField" class="form-label">TIN NO.</label>
              <input type="text" class="form-control" id="tinField" name="tin" readonly>
              </div>
              <div class="col">
              <label for="sssnoField" class="form-label">SSS/GSIS No.</label>
              <input type="text" class="form-control" id="sssnoField" name="sssno" readonly>
              </div>
              <div class="col">
              <label for="precnoField" class="form-label">Precint No:</label>
              <input type="text" class="form-control" id="precnoField" name="precno" readonly>
              </div>                            
            </div>
            <!-- End of 6th Row -->

            <hr>
            <h4 class="modal-title pb-2">Family Background</h4>

            <!-- Start of 7th Row -->
              <div class="row pb-3">
                <div class="col">
                <label for="nosField" class="form-label">Name of Spouse: (Pangalan ng asawa)</label>
                <input type="text" class="form-control" id="nosField" name="nos" readonly>
                </div>
                <div class="col">
                <label for="scontnoField" class="form-label">Spouse's Contact No. (Numero ng asawa)</label>
                <input type="text" class="form-control" id="scontnoField" name="scontno" readonly>
                </div>
                <div class="col">
                <label for="spooccuField" class="form-label">Spouse Occupation: (Trabaho ng Asawa)</label>
                <input type="text" class="form-control" id="spooccuField" name="spooccu" readonly>
                </div>                                           
              </div>
            <!-- End of 7th Row -->

            <hr>
            <h4 class="modal-title pb-2">Other Information</h4>
         

            <!-- Start of 8th Row -->
              <div class="row pb-3">
                <div class="col">
                <label for="emergencyField" class="form-label">Contact Person Incase of Emergency:</label>
                <input type="text" class="form-control" id="emergencyField" name="emergency" readonly>
                </div>
                <div class="col">
                <label for="relField" class="form-label">Relationship: (Kaugnayan)</label>
                <input type="text" class="form-control" id="relField" name="rel" readonly>
                </div>
                <div class="col">
                <label for="contemerField" class="form-label">Contact No. In Case of Emergency</label>
                <input type="text" class="form-control" id="contemerField" name="contemer" readonly>
                </div>                                
              </div>
            <!-- End of 8th Row -->

            <!-- Start of 9th Row -->
                <div class="row pb-3">
                  <div class="col">
                  <label for="htwtField" class="form-label">Height:(cm)</label>
                  <input type="text" class="form-control" id="htwtField" name="htwt" readonly>
                  </div>
                  <div class="col">
                  <label for="weightField" class="form-label">Weight:(kg)</label>
                  <input type="text" class="form-control" id="weightField" name="weight" readonly>
                  </div>
                  <div class="col">
                  <label for="colorField" class="form-label">Color of Hair/Eyes:</label>
                  <input type="text" class="form-control" id="colorField" name="color" readonly>
                  </div>                                    
                </div>
            <!-- End of 9th Row -->

            <!-- Start of 10th Row-->
            <div class="row pb-3">
              <div class="col">
                  <label for="reasonField" class="form-label">Purpose</label>
                  <input type="text" class="form-control" id="reasonField" name="reason" readonly>
                </div>         

              <div class="col pt-4  mt-2">

              <!-- <button type="button" class="btn btn-secondary" href="viewImage.php" name = "letter">View Uploaded Document</button> -->


<!-- view button  -->
          <!-- <?php
          $sql = "SELECT * FROM bmss where id = 1";
          $query = mysqli_query($con,$sql);
          $count_rows = mysqli_num_rows($query);
          $data = array();
          while($row = mysqli_fetch_assoc($query))
          { ?>
          

              <a href="viewImage.php?id=<?php echo $row['id']?>" data-id="<?php echo $row['id']?>" class="btn btn-info btn-md preview" name = "letter" target="_blank">View Uploaded Document</a>
          <?php } ?> -->

          <a href="viewImage.php" class="btn btn-info btn-md preview" name = "letter" target="_blank">View Uploaded Document</a>




          <!-- end of view -->

              </div>

            </div>
            <!-- End of 10th Row-->

            

        </div>
        <div class="modal-footer float-start">
  
          
          <div class="userInfo" style="display:none;"></div>

          <!-- <button type="button" class="btn btn-success">Print</button> -->
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>





          </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>
  </div>
  <!-- End of edit Modal -->




  <!-- Add request Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Applicant Info</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addUser" action="">

          <input type="text" class="form-control" id="statusField1" name="status" hidden value="Pending">


            <div class="row pb-3">
                <div class="col">
                <label for="trackingnoField" class="form-label">Tracking Number</label>
                  <input type="text" class="form-control" id="trackingnoField1" name="trackingno" value="<?php echo $number; ?>" readonly>
                </div>
                <div class="col">
                <label for="purposeField" class="form-label">Document to be Requested</label>
                  <select class="form-control" id="purposeField1" name="purpose">                                            
                    <option value = "">--Select Document Type--</option>
                    <option value = "Certificate of Indigency">Certificate of Indigency</option>
                    <option value = "Baranggay Certificate">Baranggay Certificate</option>
                    <option value = "Certificate of Residency">Certificate of Residency</option>  
                  </select>                
                </div>
            </div>

            <!-- Start of 1st Section -->
            <div class="row pb-3">
              <div class="col">
              <label for="snameField" class="form-label">Surname: (Apelyido)</label>
              <input type="text" class="form-control" id="snameField1" name="sname">
              </div>
              <div class="col">
              <label for="fnameField" class="form-label">First Name: (Pangalan)</label>
              <input type="text" class="form-control" id="fnameField1" name="fname">
              </div>
              <div class="col">
              <label for="mnameField" class="form-label">Middle Name: (Gitnang Pangalan)</label>
              <input type="text" class="form-control" id="mnameField1" name="mname">
              </div>
              <div class="col">
              <label for="sufField" class="form-label">Suffix: (Jr., Sr., II, Etc.)</label>
              <input type="text" class="form-control" id="sufField1" name="suf">
              </div>
            </div>
            <!-- End of 1st Section -->
            
            <!--Start of 2nd Section -->
            <div class="row pb-3">
              <div class="col">
              <label for="pobField" class="form-label">Place of Birth: (Lugar ng Kapanangakan)</label>
              <input type="text" class="form-control" id="pobField1" name="pob">
              </div>
              <div class="col">
              <label for="dobField" class="form-label">Date of Birth: (Araw ng kapanangakan)</label>
              <input type="date" class="form-control" id="dobField1" name="dob">
              </div>
              <div class="col">
              <label for="genderField" class="form-label">Gender: <br>(Kasarian)</label>
              <!-- <input type="text" class="form-control" id="genderField1" name="gender"> -->
              <select class="form-control" id="genderField1" name="gender">                                            
                <option value = "">--Select Gender--</option>
                <option value = "Male">Male</option>
                <option value = "Female">Female</option>
                <option value = "Others">Preferred not to say</option>
              </select>
              </div>
              <div class="col">
              <label for="religionField" class="form-label">Religion: <br>(Relihiyon)</label>
              <input type="text" class="form-control" id="religionField1" name="religion">
              </div>                                            
            </div>
            <!-- End of 2nd Section -->

            <!-- Start of 3rd Section -->
            <div class="row pb-3">
              <div class="col">
              <label for="nationField" class="form-label">Nationality: (Nasyonalidad)</label>
              <input type="text" class="form-control" id="nationField1" name="nation">
              </div>
              <div class="col">
              <label for="csField" class="form-label">Civil Status: (Katayuang Sibil)</label>
              <!-- <input type="text" class="form-control" id="csField1" name="cs"> -->
              <select class="form-control" id="csField1" name="cs">                                            
                <option value = "">--Select One--</option>
                <option value = "Single">Single/walang asawa</option>
                <option value = "Married">Married/Kasal</option>
                <option value = "Divorced">Divorced/Hiwalay sa asawa</option>
                <option value = "Widowed">Widowed/Byuda/Byudo</option>
              </select>
              </div>                          
            </div>
            <!-- End of 3rd Section -->

            <hr>
            <h4 class="modal-title pb-2">Contact Details</h4>


            <!-- Start of 4th Section -->            
            <div class="row pb-3">
              <div class="col-6">
              <label for="addressField" class="form-label">Address: <br>(Tirahan)</label>
              <input type="text" class="form-control" id="addressField1" name="address">
              </div>
              <div class="col">
              <label for="untField" class="form-label">Uri ng Tirahan: <br>(Owner/Renter/Sharer)</label>
              <!-- <input type="text" class="form-control" id="untField1" name="unt"> -->
              <select class="form-control" id="untField1" name="unt">                                            
                <option value = "">--Select One--</option>
                <option value = "Owner">Owner</option>
                <option value = "Renter">Renter</option>
                <option value = "Sharer">Sharer</option>
              </select>
              </div>
              <div class="col">
              <label for="occuField" class="form-label">Occupation: <br>(Uri ng Trabaho)</label>
              <input type="text" class="form-control" id="occuField1" name="occu">
              </div>                            
            </div>
            <!-- End of 4th Section --> 
            
            <!-- Start of 5th Section -->
              <div class="row pb-3">
                <div class="col">
                <label for="emailField" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="addemailField1" name="email">
                </div>
                <div class="col">
                <label for="contnoField" class="form-label">Contact Number:</label>
                <input type="text" class="form-control" id="contnoField1" name="contno">
                </div>
              </div>
            <!-- End of 5th Section -->

            <!-- Start of 6th Row -->
            <div class="row pb-3">
              <div class="col">
              <label for="tinField" class="form-label">TIN NO.</label>
              <input type="text" class="form-control" id="tinField1" name="tin">
              </div>
              <div class="col">
              <label for="sssnoField" class="form-label">SSS/GSIS No.</label>
              <input type="text" class="form-control" id="sssnoField1" name="sssno">
              </div>
              <div class="col">
              <label for="precnoField" class="form-label">Precint No:</label>
              <input type="text" class="form-control" id="precnoField1" name="precno">
              </div>                            
            </div>
            <!-- End of 6th Row -->

            <hr>
            <h4 class="modal-title pb-2">Other Information</h4>

            <!-- Start of 7th Row -->
            <div class="row pb-3">
                  <div class="col">
                  <label for="htwtField" class="form-label">Height:(cm)</label>
                  <input type="text" class="form-control" id="htwtField1" name="htwt">
                  </div>
                  <div class="col">
                  <label for="weightField" class="form-label">Weight:(kg)</label>
                  <input type="text" class="form-control" id="weightField1" name="weight">
                  </div>
                  <div class="col">
                  <label for="colorField" class="form-label">Color of Hair/Eyes:</label>
                  <input type="text" class="form-control" id="colorField1" name="color">
                  </div>                                    
                </div>
            <!-- End of 7th Row -->
         

            <!-- Start of 8th Row -->

              <div class="row pb-3">
                <div class="col">
                <label for="emergencyField" class="form-label">Contact Person Incase of Emergency:</label>
                <input type="text" class="form-control" id="emergencyField1" name="emergency">
                </div>
                <div class="col">
                <label for="relField" class="form-label">Relationship: (Kaugnayan)</label>
                <input type="text" class="form-control" id="relField1" name="rel">
                </div>
                <div class="col">
                <label for="contemerField" class="form-label">Contact No. In Case of Emergency</label>
                <input type="text" class="form-control" id="contemerField1" name="contemer">
                </div>                                
              </div>
              
            <!-- End of 8th Row -->

            <!-- Start of 9th Row -->
            <div class="row pb-3">
                <div class="col">
                <label for="nosField" class="form-label">Name of Spouse: (Pangalan ng asawa)</label>
                <input type="text" class="form-control" id="nosField1" name="nos">
                </div>
                <div class="col">
                <label for="scontnoField" class="form-label">Spouse's Contact No. (Numero ng asawa)</label>
                <input type="text" class="form-control" id="scontnoField1" name="scontno">
                </div>
                <div class="col">
                <label for="spooccuField" class="form-label">Spouse Occupation: (Trabaho ng Asawa)</label>
                <input type="text" class="form-control" id="spooccuField1" name="spooccu">
                </div>                                           
              </div>
            <!-- End of 9th Row -->


            <!-- Start of 10th Row-->
            <div class="row pb-3">
              <div class="col">
                  <label for="reasonField1" class="form-label">Purpose</label>
                  <input type="text" class="form-control" id="reasonField1" name="reason">
              </div>
                <!-- insert here the preview of image -->
            </div>
            <!-- End of 10th Row-->

        </div>
        <div class="modal-footer float-start">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- end of Add request Modal -->
</body>

</html>
