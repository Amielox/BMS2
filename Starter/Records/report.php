<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

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
      ?><a href="javascript:demoFromHTML()" class="button">Run Code</a>
<div id="content">
    <h1>  
        We support special element handlers. Register them with jQuery-style.
    </h1>

<script>
    function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#content')[0];

        // we support special element handlers. Register them with jQuery-style 
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors 
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Test.pdf');
            }, margins
        );
    }
</script>
      <div class="row">
       
             <div class="col-md-6">
           <!-- BAR CHART -->
            <div class="chart">     
              <div class="card card-outline">
                <div class="card-header">
                  <h3 class="card-title">Census Graph</h3>
                </div>
                  <div class="card-body">
                    <div id="chart">
                        <canvas id="graphCanvas" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>  

           
         
          </div>
          <!-- /.col (LEFT) -->
                    <div class="col-md-6">
           <!-- PIE CHART -->
            <div class="chart">     
              <div class="card card-outline">
                <div class="card-header">
                  <h3 class="card-title">Population By Age</h3>
                </div>
                  <div class="card-body">

                    <div id="chart">
                        <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>  

           
          </div>
        </div>
        <!-- /.row -->
 
 </div>

<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>


<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Infant', 'Children', 'Young Adult', 'Adult', 'Senior'],
      datasets: [
        {
          data : [
          <?php
                $sql = "SELECT * FROM residents where age>=0 and age<=2";
                $query = $conn->query($sql);

                echo $query->num_rows;
              ?>, 
          <?php
                $sql = "SELECT * FROM residents where age>=3 and age<=16";
                $query = $conn->query($sql);

                echo $query->num_rows;
              ?>    , 
          <?php
                $sql = "SELECT * FROM residents where age>=17 and age<=30";
                $query = $conn->query($sql);

                echo $query->num_rows;
              ?>              , 
          <?php
                $sql = "SELECT * FROM residents where age>=31 and age<=59";
                $query = $conn->query($sql);

                echo $query->num_rows;
              ?>              , 
          <?php
                $sql = "SELECT * FROM residents where age>=60";
                $query = $conn->query($sql);

                echo $query->num_rows;
              ?>              ],
              backgroundColor : ['#f56954', '#00a65a', '#f39c12','#3c8dbc','#2635a9' ]
        }
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
    
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'pie',
      data: areaChartData,
      options: areaChartOptions
    })

  })

</script>
 <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].year);
                        marks.push(data[i].population);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Residents',
                                backgroundColor     : '#2635a9',
                                borderColor         : 'rgba(60,141,188,0.8)',
                                pointRadius          : false,
                                pointColor          : '#3b8bba',
                                pointStrokeColor    : 'rgba(60,141,188,1)',
                                pointHighlightFill  : '#fff',
                                pointHighlightStroke: 'rgba(60,141,188,1)',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
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

</div>






</body>
</html>
