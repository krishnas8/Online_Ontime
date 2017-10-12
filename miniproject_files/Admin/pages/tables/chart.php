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

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Courier Statistics</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
    <style>

    .button {
    /* Green */
    border: none;
    color: white;

    padding: 9px 26px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    -webkit-transition-duration: 0.2s; /* Safari */
    transition-duration: 0.2s;
    cursor: pointer;
}
.button3 {
    background-color:rgba(12,12,111,0.4) ;
    color: black; 
    border: 0px solid #f44336;
}

.posit{
 position:absolute;
 top:100;
  background-color: #2b6ca3;
    padding-left: 50px;
      padding-top: 15px;
        padding-right: 50px;
        padding-bottom: 15px;
color :white;
}
.editing{
    position: fixed;
    top:100px;
    left:30px;  
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 10px;
        width:270px;
        height : 500px;
        background-color: #3498db;

}
.padd{
    padding-left: 30px;
}
.button3:hover {
   background-color: #3498db;;
    color: white ;
}
.as{

    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
   
    color: white;

    -webkit-transition-duration: 0.2s; /* Safari */
    transition-duration: 0.2s;
    cursor: pointer;

}
.cs{
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    background-color:rgba(12,12,111,0.7) ;
        color : rgba(225,252,212,.7);

}
.as:hover{
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    background-color:rgba(12,12,111,0.3) ;
 color : rgba(225,252,212,.7);
}
.padd{
    padding-left: 30px;
}
.kri{
    padding-top: 10px;
    padding-left: 15px;
    color : rgba(0,32,128,.7);
}
.tt{
            background-color: #3498db;

    padding-top: 10px;
}
.pie{
  padding-top:100px;
}
</style>
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
  <body class="theme-blue">
    <!-- Top Bar -->    <nav class="navbar">
            <div class="navbar-header ">

                <a href="chart.php"><div class="kri font-40">ONLINE ONTIME</div></a>
            </div>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
               
               <div class="tt">  
                             <ul class="nav nav-tabs" >
                                
                                <li role="presentation" >
                                    <a href="test_modified.php" >
                                <div class ="as font-18">    Current Status</div>
                                       </a>
                                </li>
                                <li role="presentation ">
                                    <a href="admin_filter.php">
                                      <div class ="as font-18">  Courier Details</div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="update_cost.php" >
                                      <div class ="as font-18"> Add city</div>
                                    </a>
                                </li>
                                <li role="admin_contact.php ">
                                    <a href="admin_feedback.php" >
                                    <div class ="as font-18">
                                       Customer Feedbacks
                                    </div></a>
                                </li>                     
                                <li role="presentation">
                                    <a href="admin_contact.php" >
                                         <div class ="as font-18">Contact</div>
                                    </a>
                                </li>

                                
                            </ul>
                        </div></ul>
        </nav>

    
  <div class= "pie">

    <div id="piechart" style="width: 900px; height: 500px; float: left;"></div>
    <div id="piechart1" style="width: 900px; height: 500px; position: relative; left: 650px;"></div>
   </div> 

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
  </body>
</html>