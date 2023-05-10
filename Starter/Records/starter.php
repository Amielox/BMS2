
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
            <h4 class="m-0">Manage Reports</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
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
           <div id="customers">
          <canvas id="myChart" width="500" height="300"></canvas>
          <table id="tab_customers" class="table table-striped">
              <colgroup>
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
              </colgroup>
              <thead>
                  <tr class='warning'>
                      <th>Country</th>
                      <th>Population</th>
                      <th>Date</th>
                      <th>Age</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Chinna</td>
                      <td>1,363,480,000</td>
                      <td>March 24, 2014</td>
                      <td>19.1</td>
                  </tr>
                  <tr>
                      <td>India</td>
                      <td>1,241,900,000</td>
                      <td>March 24, 2014</td>
                      <td>17.4</td>
                  </tr>
                  <tr>
                      <td>United States</td>
                      <td>317,746,000</td>
                      <td>March 24, 2014</td>
                      <td>4.44</td>
                  </tr>
                  <tr>
                      <td>Indonesia</td>
                      <td>249,866,000</td>
                      <td>July 1, 2013</td>
                      <td>3.49</td>
                  </tr>
                  <tr>
                      <td>Brazil</td>
                      <td>201,032,714</td>
                      <td>July 1, 2013</td>
                      <td>2.81</td>
                  </tr>
              </tbody>
          </table>
      </div>
      <button onclick="demoFromHTML();">PDF</button>
      <script>
          function demoFromHTML() {
              var pdf = new jsPDF('p', 'pt', 'letter');
              // source can be HTML-formatted string, or a reference
              // to an actual DOM element from which the text will be scraped.
              source = $('#customers').html();



              // we support special element handlers. Register them with jQuery-style 
              // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
              // There is no support for any other type of selectors 
              // (class, of compound) at this time.
              specialElementHandlers = {
                  // element with id of "bypass" - jQuery style selector
                  '#bypassme': function(element, renderer) {
                      // true = "handled elsewhere, bypass text extraction"
                      return true
                  }
              };
              margins = {
                  top: 300,
                  bottom: 60,
                  left: 40,
                  width: 522
              };
              // all coords and widths are in jsPDF instance's declared units
              // 'inches' in this case

              var canvas = document.getElementById('myChart');
              var context = canvas.getContext('2d');
              var imgData = canvas.toDataURL("image/gif", 1.0);
              pdf.addImage(imgData, 'GIF', margins.left, // x coord
                  40);
              pdf.fromHTML(

                  source, // HTML string or DOM elem ref.
                  margins.left, // x coord
                  margins.top, { // y coord
                      'width': margins.width, // max width of content on PDF
                      'elementHandlers': specialElementHandlers
                  },

                  function(dispose) {


                      // dispose: object with X, Y of the last line add to the PDF 
                      //          this allow the insertion of new lines after html
                      pdf.save('Test.pdf');
                  }, margins);
          }

          var data = {
              labels: ["January", "February", "March",
                  "April", "May", "June",
                  "July", "Agost", "September",
                  "October", "November", "December"
              ],
              datasets: [{
                  fillColor: "rgba(252,233,79,0.5)",
                  strokeColor: "rgba(82,75,25,1)",
                  pointColor: "rgba(166,152,51,1)",
                  pointStrokeColor: "#fff",
                  data: [65, 68, 75,
                      81, 95, 105,
                      130, 120, 105,
                      90, 75, 70
                  ]
              }]
          }
      </script>
      <div class="row">
          <div class="col-12">
              <div class="card-header"> 
              </div>
              <div class="card-body">  
                  
                  <table id="example3" class="table table-head-fixed table-hover bg-light  ">
                <thead>
                  <th>No.</th>
                  <th>Full Name</th>
                  <th>Purok No.</th>
                  <th>Registered</th>
                  
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM residents";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                          <tr>
                          <td>".$row['id']."</td>
                          <td>".$row['lastname'] . ", " .$row['firstname']. " " .$row['middlename']. "</td>
                          <td>".$row['puroknumber']."</td>
                          <td>".$row['registered']."</td>
                         
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






</body>
</html>
