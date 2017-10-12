<!DOCTYPE html>
  <?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "courier";
    $flag1 = 0;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<script src="js/combodate.js"></script> 
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Filter</title>
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

</style>
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
    <!-- Top Bar -->    <nav class="navbar">
            <div class="navbar-header ">

                <a href="chart.php"><div class="kri font-32">ONLINE ONTIME</div></a>
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
                                      <div class ="cs font-18">  Courier Details</div>
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
                                <li role="presentation">
                                    <a href="/miniproject/new.php" >
                                         <div class ="as font-15">Sign Out</div>
                                    </a>
                                </li>

                                
                            </ul>
                        </div></ul>
        </nav>

    <!-- #Top Bar -->
    <section>

 <div class ="editing">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class = "font-24" "align-center" >Filter</div>
<div class="padd"><br><label><b>Courier id : <b></label><br>

<?php
    $sql_select = "select * from pincodes where 1";

    $result_select = $conn->query($sql_select);

if ( $result_select->num_rows > 0) 
{

?>

<input name="courier_id" type="text"><br>
<label><b></div>
City :<b></label>
<br>
<div class="padd">
<select  name="selecta" >
<option selected="selected">Select Location</option>
<?php
    while($row = $result_select->fetch_assoc()) 
   {

?>
<option value="<?php echo $row["City"]?>"><?php echo $row["City"]?></option>
<?php
}
}
?>
</select><br><br>
<label><b>Type of couriers<b></label><br>

 <div class="demo-checkbox">
        <input type="checkbox" name="check1" id="md_checkbox_23" class="filled-in chk-col-purple"/>
                                <label for="md_checkbox_23">Received Couriers</label>
                                <input type="checkbox" name="check2" id="md_checkbox_24" class="filled-in chk-col-deep-purple"/>
                                <label for="md_checkbox_24">Delivered Couriers</label>
                                                                </div>    

</div>
          <div id="date" style="margin-top:640px;position:absolute;left:100px;">
                Pick-up Date and time<br>
                <input  type="datetime-local" name="dat" style="margin-top:20px;">
            </div>
<div class="padd">
  <label><b>From:<b></label><br>    
<br></div>
        <button class="button button3" name="submit">Find</button>
        <br>
</form>
</div>
       

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
                            </p>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>weight</th>
                                        <th>Courier type</th>
                                        <th>Pick Up Date</th>
                                        <th>Pick Up Adress</th>
                                        <th>Drop Address</th>
                                        <th>Drop Date</th>
                                        <th>Status</th>
                                        <th>Cost</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php

       $flag=0;
                                   $i=1;
                             if(isset($_POST['submit'])) {
$flag1=1;
                                    $sta = mysqli_real_escape_string($conn, $_POST["courier_id"]);
                                    $city_filter = mysqli_real_escape_string($conn, $_POST["selecta"]);
                                       
                                    echo "<div class='font-24'>".$city_filter."</div>";
                                    if($sta !== "" && $city_filter === "Select Location")
                                    {
                                        $flag=1;
                                
/*
  $sql = "select * from users,courier,admin,pickup,drop_add,billing_info where pickup.courier_id=courier.courier_id and drop_add.courier_id=courier.courier_id admin.courier_id=courier.courier_id and courier.user_id = users.user_id and courier.courier_id='$sta'";*/
  $sql="select * from users,admin,courier,drop_add,pickup where admin.courier_id=courier.courier_id and  drop_add.courier_id=courier.courier_id and users.user_id=courier.user_id and drop_add.courier_id=pickup.courier_id and courier.courier_id='".$sta."'";
    $result = $conn->query($sql);
}
                                    if($sta ==="" && $city_filter !== "Select Location")
                                    {
                                     
                                    
                                        $flag=1;
/*  $sql = "select * from users, courier, admin, pickup, drop_add, billing_info where admin.courier_id=courier.courier_id and pickup.courier_id=courier.courier_id and drop_add.courier_id=courier.courier_id and courier.user_id = users.user_id and billing_info.courier_id=courier.courier_id and pickup.city='$city_filter'";*/
if( isset($_POST['check1'])){

   $sql ="select * from courier,pickup,users,admin,drop_add where users.user_id=courier.user_id and courier.courier_id=pickup.courier_id and admin.courier_id=courier.courier_id and pickup.city1 ='$city_filter' and drop_add.courier_id=courier.courier_id";
}
else if( isset($_POST['check2'])){

   $sql ="select * from courier,pickup,users,admin,drop_add where users.user_id=courier.user_id and courier.courier_id=pickup.courier_id and admin.courier_id=courier.courier_id and drop_add.city2 ='$city_filter' and drop_add.courier_id=courier.courier_id";   
    }
else{

   $sql ="select * from courier,pickup,users,admin,drop_add where users.user_id=courier.user_id and courier.courier_id=pickup.courier_id and admin.courier_id=courier.courier_id and pickup.city1 ='$city_filter' and drop_add.courier_id=courier.courier_id";
}
    $result = $conn->query($sql);
}


}   


if($flag1==0){
$sql ="select * from courier,pickup,users,admin,drop_add where users.user_id=courier.user_id and courier.courier_id=pickup.courier_id and admin.courier_id=courier.courier_id and drop_add.courier_id=courier.courier_id";
    $result = $conn->query($sql);

}

if($flag==1 || $flag1==0){
if ( $result->num_rows > 0) {

     $total_cost=0;
    while($row = $result->fetch_assoc()) 
    { 
?>                                  
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $row["user_first"]."  ".$row["user_last"]."(".$row["courier_id"].")"?></td>
                                        <td><?php echo $row["weight"]?></td>
                                        <td><?php echo $row["type"]?></td>
                                        <td><?php echo $row["Date"]?></td>
                                        <td><?php echo $row["address1"]."".$row["city1"]?></td>
                                  <!--      <td><?php //echo $row["billing_info.Date"]?></td>-->
                                        <td><?php echo $row["address2"]."".$row["city2"]?></td>
                                        <td><?php echo $row["update_date"]?></td>
                                        <td><?php echo $row["status"]?></td>
                                        <td> <?php echo $row["cost"]?> </td>

                                        <?php 
  $i++;
                                            $total_cost=$total_cost + $row["cost"];
                                        }
                                        echo "<tr>";
                                        //echo "<div class = 'posit'>";
                                        echo "<h2>Total Earning : $".$total_cost."</h2>";
                                        //echo "</div>";
                                        echo "</tr>";
                                        }
                                         else {
                                              echo "0 results";
                                             } 
                                        $conn->close();
                                     } 
                                   
                                   ?>                                        
                                     
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