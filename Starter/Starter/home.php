<?php include 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/slugify.php'; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Manage Reports |
            <?php 
                    if(isset ($_POST['resident'])){ $title='Residents';} 
                    elseif (isset ($_POST['transaction'])){ $title='Transactions'; }
                    else{$title='Residents';}
                    echo $title; 
             ?> 
            </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="dropdown mb-4">
          <a href="javascript:demoFromHTML()" class="btn-success btn-sm btn-flat float-left button mx-2">Print</a> 
          <button class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $title; ?>
          </button>
          <ul class="dropdown-menu">
            <li><a  href="#"><input type="submit" class="dropdown-item" name="resident" value="Resident"></a></li>
            <li><a  href="#"><input type="submit" class="dropdown-item" name="transaction" value="Transactions"></a></li>
          </ul>
        </div>
        <div class="row" >
          <div class="col-md-4">
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
          <div class="col-md-4">
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
              </div>
              <!-- /.card-body -->
            </div>  
          </div>
          <div class="col-md-4" >
           <!-- PIE CHART -->
            <div class="chart">     
              <div class="card card-outline">
                <div class="card-header">
                  <h3 class="card-title">Registered Vs Non-Registered</h3>
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
        </div>
        <div class="row">
          <div class="col-md-7 ">
            <div class="card-body">  
              <table id="example3" class="table table-head-fixed table-hover table-border bg-white table-striped-columns   ">
                <thead>            
                  <th width="40%">Barangay Culiat - Resident Report</th>
                  <th colspan="2" class="text-right"><?php echo "Date: " . date("Y/m/d") ;?></th>
                </thead>
                <tbody>
                  <?php
                             $sql = "SELECT * FROM votes";
                             $query = $conn->query($sql);
                  ?>
                  <tr class="text-muted">
                    <td ></td>
                    <td> Category</td>
                    <td> Total</td>
                  </tr>
                  <tr>
                    <td class="text-bold" rowspan="2"> Voter Status</td>
                    <td> Voter or Registered</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>
                  <tr>
                    <td> Non-Voter</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>
                  <tr>
                    <td class="text-bold" rowspan="3"> Age Demography</td>
                    <td> Youth</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>
                  <tr>
                    <td> Adult</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>
                  <tr>
                    <td> Senior Citizens</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>

                  <tr>
                    <td class="text-bold" rowspan="3"> Employment Status</td>
                    <td>Unemployed</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>
                  <tr>
                    <td> Employed</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>
                  <tr>
                    <td> Self-employed</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>                        
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card-body">   
              <table id="example3" class="table table-head-fixed table-hover bg-white table-striped ">
                <thead class="bg-light">            
                  <th >Household Summary</th>
                  <th  class="text-right"><?php echo "Date: " . date("Y/m/d") ;?></th>
                </thead>
                <tbody class="table-group-divider">
                  <?php
                             $sql = "SELECT * FROM votes";
                             $query = $conn->query($sql);
                  ?>
                  <tr class="text-muted">
                    <td >Location</td>
                    <td> Total</td>
                  </tr>
                  <tr>   
                    <td> Voter or Registered</td>
                    <td> <?php echo $query->num_rows; ?></td>
                  </tr>                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
 
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<?php include 'includes/footer.php'; ?>
</div>
 


<?php include 'includes/scripts.php'; ?>


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


<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<script>
      const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))
    </script>
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
</body>

</html>