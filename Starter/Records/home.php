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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-muted" href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue lb">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM positions";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Total Residents</p>
            </div>
            <div class="icon">
              <i class="fa fa-tasks"></i>
            </div>
            <a href="positions.php" class="small-box-footer ">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue gy">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM candidates";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Total Household</p>
            </div>
            <div class="icon">
              <i class="fa fa-black-tie"></i>
            </div>
            <a href="candidates.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue gg">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM voters";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
             
              <p>Blotter Records</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="voters.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue gr">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM votes GROUP BY voters_id";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Census  <script>document.write(new Date().getFullYear());</script></p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="votes.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="row">
<div class='col-md-12'>
      <?php
        if(isset($_SESSION['error'])){
          echo "
          
            <div class=' alert-dismissible'>
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
      ?></div></div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
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
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

</div>
</div>
<!-- ./wrapper -->
<?php include 'includes/footer.php'; ?>
</body>
</html>
