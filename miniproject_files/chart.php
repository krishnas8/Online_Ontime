<?php
$con = mysqli_connect("localhost","root","","courier");
  
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
    else
    {
    }
    $query="SELECT city1,count(city1) FROM `pickup` GROUP BY `city1`";
    $result1=mysqli_query($con,$query);
    $query2="SELECT city2,count(city2) FROM `drop_add` GROUP BY `city2`";
    $result2=mysqli_query($con,$query2);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
          ['City', 'Couriers'],
          <?php
            while($row = mysqli_fetch_assoc($result1))  {
              echo "['".$row['city1']."',".$row['count(city1)']."],";
            }
          ?>
        ]);

        var options = {
          title: 'City-wise pickup analysis',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['City', 'Couriers'],
          <?php
            while($row = mysqli_fetch_assoc($result2))  {
              echo "['".$row['city2']."',".$row['count(city2)']."],";
            }
          ?>
        ]);

        var options = {
          title: 'City-wise drop analysis',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div>
    <div id="piechart" style="width: 900px; height: 500px; float: left;"></div>
    <div id="piechart1" style="width: 900px; height: 500px; position: relative; left: 650px;"></div>
   </div> 
  </body>
</html>