<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Normal Tables | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

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
.post{

    position: absolute;
    top:350px;
    left:800px;  
}
.button3 {
    background-color: rgba(211,11,111,0.4); 
    color: black; 
    border: 0px solid #f44336;
}

.button3:hover {
    background-color:rgba(12,12,111,0.4) ;
    color: white ;
}</style>
</head>

<body class="theme-blue">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">ONLINE ONTIME</a>
            </div>                 </div>
    </nav>
    <!-- #Top Bar -->
    <section>
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from users,courier,admin where courier.courier_id=admin.courier_id and courier.user_id=users.user_id";

$result = $conn->query($sql);
?>       

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <h2>Courier Details</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>weight</th>
                                        <th>Courier type</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Cost</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php
  $i=1;
  $sql = "select * from users,courier,admin where courier.courier_id=admin.courier_id and courier.user_id=users.user_id";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
?>                                  
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $row["user_first"]."  ".$row["user_last"]."(".$row["courier_id"].")"?></td>
                                        <td><?php echo $row["weight"]?></td>
                                        <td><?php echo $row["type"]?></td>
                                        <td><?php echo $row["Date"]?></td>
                                        <td><?php echo $row["status"]?></td>
                                        
                                        <td> <?php echo $row["cost"]?> </td>

                                        <td>  
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<select name="<?php echo "Status".$i;?>">
    <option value="To be received">Change Status</option>
    <option value="In Process">In Process</option>
    <option value="Package Delivered">Package Delivered</option>
  <option value="Package received">Package received</option>
  </select></td><?php 
  $i++;
                                            }
                                        }
                                         else {
                                            echo "0 results";
                                        }
                                   ?>                                        
                                     <tr> 
                                      <div class="post"><input type="hidden" name="id" value="1" />
                                        <button class="button button3" name="submit">Submit</button></div>
                                        </form>
</tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Basic Table -->
            </div>
    </section>
    <?php
 if(isset($_POST['submit'])) {
       $j=1;
    $result = $conn->query($sql);
    echo " ";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc())
            {

                $sta = mysqli_real_escape_string($conn, $_POST["Status$j"]);
                echo $sta;
                echo $row["courier_id"];
                $courier =  $row["courier_id"];
              
              if($sta === "To be received"){} 
                else if($sta === $row["status"]){}
                else{
                   $sql1 = " UPDATE `admin` SET `status`='$sta' WHERE 
                    `courier_id`=$courier";
                        if ($conn->query($sql1) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                        }

                }
                $j++;
        
            }    

        }
    $conn->close();
}
    ?> 

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