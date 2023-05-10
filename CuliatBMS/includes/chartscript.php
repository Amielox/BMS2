<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
       <script>
        // html2pdf js for printing report
          var button = document.getElementById("button1");
          var makepdf = document.getElementById("makepdf1");
          
          var opt = {
            margin:       [16,0],
            filename:     'myfile.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
            jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' },
            pagebreak: {
        mode: ['avoid-all', 'css', 'legacy']
    }
          };

          button.addEventListener("click", function () {
            html2pdf().from(makepdf).set(opt).toPdf().get('pdf').then(function (pdf) {
              var totalPages = pdf.internal.getNumberOfPages(); 
              console.log("getHeight:" + pdf.internal.pageSize.getHeight());
              console.log("getWidth:" + pdf.internal.pageSize.getWidth());
              for (var i = 1; i <= totalPages; i++) {
                pdf.setPage(i);
                pdf.setFontSize(10);
                pdf.setTextColor(150);
                pdf.text("Barangay Culiat - Resident Report", 16, 8);
                pdf.text("<?php echo "Date: " . date("Y/m/d") ;?>", pdf.internal.pageSize.getWidth()-32,8);
                pdf.addImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBkjv5SmWMbXDry4p-t7EAcC8kWKt-tHlDRiQqPn3dmA&s", "PNG", 5, 5, 5, 5);
                pdf.text('Page ' + i + ' of ' + totalPages, pdf.internal.pageSize.getWidth()/2, 
                pdf.internal.pageSize.getHeight()-4);
              } 
            }).save();
                  
          });
          // end html2pdf js for printing report
          // dropdown js
          const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
          const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))
</script>

<!-- ChartJS -->
      <script src="../plugins/chart.js/Chart.min.js"></script>
      <script>
        $(function () {
          var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

          var areaChartData = {
            labels  : [ 'Young', 'Adult', 'Senior'],
            datasets: [
              {
                data : [
                  <?php
                      $sql = "SELECT SYSDATE(),birthdate,DATEDIFF(SYSDATE(),birthdate)/365 AS AGE from residents WHERE(DATEDIFF(SYSDATE(), birthdate)/365)<18";
                      $query = $conn->query($sql);

                      echo $query->num_rows;
                    ?>, 
                <?php
                     $sql = "SELECT SYSDATE(),birthdate,DATEDIFF(SYSDATE(),birthdate)/365 AS AGE from residents WHERE(DATEDIFF(SYSDATE(), birthdate)/365)>=18 and (DATEDIFF(SYSDATE(), birthdate)/365)<=59 ";
                     $query = $conn->query($sql);

                     echo $query->num_rows;
                    ?>    , 
                <?php
                       $sql = "SELECT SYSDATE(),birthdate,DATEDIFF(SYSDATE(),birthdate)/365 AS AGE from residents WHERE(DATEDIFF(SYSDATE(), birthdate)/365)>=60";
                       $query = $conn->query($sql);
  
                       echo $query->num_rows;
                    ?>              ,  ],
                    backgroundColor : [ '#00a65a', '#f39c12','#611DD1' ]
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

           
    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData  ={
            labels  : ['Voter', 'Non-Voter'],
            datasets: [
              {
                data : [
                <?php
                      $sql = "SELECT * FROM residents where registered='no'";
                      $query = $conn->query($sql);

                      echo $query->num_rows;
                    ?>, 
                <?php
                      $sql = "SELECT * FROM residents where registered='yes'";
                      $query = $conn->query($sql);

                      echo $query->num_rows;
                    ?>    , 
                   ],
                    backgroundColor : [  '#f39c12','#3c8dbc','#2635a9' ]
              }
            ]
          }

    var lineChart = new Chart(lineChartCanvas, {
      type: 'pie',
      data: lineChartData,
      options: lineChartOptions
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
                                backgroundColor     : '#611DD1',
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

        anychart.onDocumentReady(function () {

// create a data set on our data
var dataSet = anychart.data.set(getData());

// map data for the first series,
// take x from the zero column and value from the first column
var firstSeriesData = dataSet.mapAs({ x: 0, value: 1 });

// map data for the second series,
// take x from the zero column and value from the second column
var secondSeriesData = dataSet.mapAs({ x: 0, value: 2 });

// map data for the third series,
// take x from the zero column and value from the third column 
var thirdSeriesData = dataSet.mapAs({ x: 0, value: 3 });

// map data for the fourth series,
// take x from the zero column and value from the fourth column
var fourthSeriesData = dataSet.mapAs({ x: 0, value: 4 });

// create a line chart
var chart = anychart.line();

// turn on the line chart animation
chart.animation(true);

// configure the chart title text settings


// set the y axis title
chart.yAxis().title('Revenue Rate');

// turn on the crosshair
chart.crosshair().enabled(true).yLabel(false).yStroke(null);

// create the first series with the mapped data
var firstSeries = chart.line(firstSeriesData);
firstSeries
  .name('Barangay Clearance')
  .stroke('2 #611dd1')
  .tooltip()
  .format("Age group 18-34 : P{%value}");

// create the second series with the mapped data
var secondSeries = chart.line(secondSeriesData);
secondSeries
  .name('Barangay ID')
  .stroke('1 #F39C12')
  .tooltip()
  .format("Age group 35-49 : P{%value}");

// create the third series with the mapped data
var thirdSeries = chart.line(thirdSeriesData);
thirdSeries
  .name('Barangay Certificate')
  .stroke('1 #00A65A')
  .tooltip()
  .format("Age group 50-64 : P{%value}");

// turn the legend on
chart.legend().enabled(true);

// set the container id for the line chart
chart.container('container');

// draw the line chart
chart.draw();

});

function getData() {
return [
  ['Jan',0,0,0  ],
  ['Feb',<?php
                   $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 2  and  YEAR(dateissued)= year(CURRENT_TIMESTAMP)  and  type='bc' ";
                   $result = $conn->query($sql);
                   $data =  $result->fetch_assoc();
                   echo $data['total'];
                    
                  ?>,<?php
                  $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 2 and  YEAR(dateissued)= year(CURRENT_TIMESTAMP) and  type='bid' ";
                  $result = $conn->query($sql);
                  $data =  $result->fetch_assoc();
                  echo $data['total'];
                   
                 ?>,<?php
                 $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 2 and  YEAR(dateissued)= year(CURRENT_TIMESTAMP) and  type='bce' ";
                 $result = $conn->query($sql);
                 $data =  $result->fetch_assoc();
                 echo $data['total'];
                  
  ?>],
  ['Oct',<?php
                   $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 10  and  YEAR(dateissued)= year(CURRENT_TIMESTAMP)  and  type='bc' ";
                   $result = $conn->query($sql);
                   $data =  $result->fetch_assoc();
                   echo $data['total'];
                    
                  ?>,<?php
                  $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 10 and  YEAR(dateissued)= year(CURRENT_TIMESTAMP) and  type='bid' ";
                  $result = $conn->query($sql);
                  $data =  $result->fetch_assoc();
                  echo $data['total'];
                   
                 ?>,<?php
                 $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 10 and  YEAR(dateissued)= year(CURRENT_TIMESTAMP) and  type='bce' ";
                 $result = $conn->query($sql);
                 $data =  $result->fetch_assoc();
                 echo $data['total'];
                  
  ?>],
     ['Nov',<?php
                   $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 11 and  YEAR(dateissued)= year(CURRENT_TIMESTAMP) and type='bc' ";
                   $result = $conn->query($sql);
                   $data =  $result->fetch_assoc();
                   echo $data['total'];
                    
                  ?>,<?php
                  $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 11 and  YEAR(dateissued)= year(CURRENT_TIMESTAMP) and  type='bid' ";
                  $result = $conn->query($sql);
                  $data =  $result->fetch_assoc();
                  echo $data['total'];
                   
                 ?>,<?php
                 $sql = "SELECT SUM(payment) AS total from transaction   WHERE MONTH(dateissued) = 11 and  YEAR(dateissued)= year(CURRENT_TIMESTAMP) and  type='bce' ";
                 $result = $conn->query($sql);
                 $data =  $result->fetch_assoc();
                 echo $data['total'];
                  
                ?>]
 
];
}
        </script>