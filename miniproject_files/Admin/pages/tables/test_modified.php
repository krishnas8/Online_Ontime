<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Current Courier details</title>
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
.button3 {
    background-color:rgba(12,12,111,0.7) ;
    color: black; 
    border: 0px solid #f44336;
}  
.hel{
    background-color: yellow;
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

.button3:hover {
   background-color:rgba(12,12,111,0.3) ;
    color: white ;
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
}</style>
</head>

<body class="theme-blue">
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
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
                                <div class ="cs font-18">    Current Status</div>
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
<div class="padd">
<br><br>
<label><b></div>
City :<b></label>
<br><br>
<div class="padd">
<select  name="selecta" >
<option selected="selected">Select Location</option>
<option value="Delhi">Delhi</option>
<option value="Pune">Pune</option>
<option value="Mumbai">Mumbai</option>
<option value="Banglore">Banglore</option>
</select><br><br>

      <br>
</div>
        <button class="button button3" name="submit1">Find</button>
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
                                        <th>Drop Adress</th>                                           <th>Last Update</th>
                                        <th>Status</th>
                                        <th>Cost</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

  <?php

                             if(isset($_POST['submit1']) | isset($_POST['submit2'])) {

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
                                   $i=1;
                                   if(isset($_POST['submit1'])){

                                   $city_filter = mysqli_real_escape_string($conn, $_POST["selecta"]);
                                   
                                   }
                                   else{
                                   $city_filter = $_POST["form_city"]; 
                                   }

                                       $flag=0;
if( isset($_POST['submit2']) ){
                     $pd = mysqli_real_escape_string($conn,"Package Delivered");  

 $sql1 ="select * from courier,pickup,users,admin where users.user_id=courier.user_id and courier.courier_id=pickup.courier_id and admin.courier_id=courier.courier_id and pickup.city1='$city_filter' and not admin.status like '$pd'"  ;
       $j=1;
    $result = $conn->query($sql1);
    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc())
            {
                 $sta = mysqli_real_escape_string($conn, $_POST["Status$j"]);  
                $courier =  $row["courier_id"];
              
              if($sta === "To be received"){} 
                else if($sta === $row["status"]){}
                else{
                   $sql2 = " UPDATE `admin` SET `status`='$sta' WHERE 
                    `courier_id`=$courier";
                        if ($conn->query($sql2) === TRUE) {
                    } else {
                        echo "Error updating record: " . $conn->error;
                        }

                }
                $j++;
            }    

        }
 
} 
                                    
                                    if( $city_filter === " Select Location ")
                                    {
                                        echo "<b> Enter City Name for Current Status of Couriers <b>";
                                    }

                                    if($city_filter !== "Select Location")
                                    {
                                        $flag=1;

                 $pd = mysqli_real_escape_string($conn,"Package Delivered");  
                                     
/*  $sql = "select * from users, courier, admin, pickup, drop_add, billing_info where admin.courier_id=courier.courier_id and pickup.courier_id=courier.courier_id and drop_add.courier_id=courier.courier_id and courier.user_id = users.user_id and billing_info.courier_id=courier.courier_id and pickup.city='$city_filter'";*/
   $sql ="select * from courier,pickup,users,admin,drop_add where users.user_id=courier.user_id and courier.courier_id=pickup.courier_id and admin.courier_id=courier.courier_id and drop_add.courier_id=courier.courier_id and pickup.city1='$city_filter' and not admin.status like '$pd'";


    $result = $conn->query($sql);
}
              
if($flag==1){
if ( $result->num_rows > 0) {
              
     $total_cost=0;
    while($row = $result->fetch_assoc()) 
    { 
         $cit1 = mysqli_real_escape_string($conn, $row["city1"]);
          $cit2 = mysqli_real_escape_string($conn, $row["city2"]);

       $sql3 = "select Station from `Distance` where `PickUp city`= '$cit1' and `Destination City`='$cit2'";    
         $result3 = $conn->query($sql3);
           if($result3->num_rows > 0){
        }
            else {
       $sql2 = "select Station from `Distance` where `PickUp city`= '$cit2' and `Destination City`='$cit1'";           $result3 = $conn->query($sql3);
            }
      if($row3 = $result3->fetch_assoc()){
 

?>                                  

                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $row["user_first"]."  ".$row["user_last"]."(".$row["courier_id"].")"?></td>
                                        <td><?php echo $row["weight"]?></td>
                                        <td><?php echo $row["type"]?></td>
                                        <td><?php echo $row["Date"]?></td>
                                        <td><?php echo $row["address1"]." ".$row["city1"]?></td>
                                     <!-- <td><?php //echo $row["billing_info.Date"]?></td>-->
                                       <td><?php echo $row["address2"]." ".$row["city2"]?></td>
                                        <td><?php echo $row["update_date"]?></td>
                                        
                                        <td><?php echo $row["status"]?></td>
                                        
                                        <td> <?php echo $row["cost"]?> </td>
                                        <td>  
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<select name="<?php echo "Status".$i;?>">
    <option value="To be received">Change Status</option>

  <option value="Package received">Package received</option>

    <option value="reached to <?php echo $row3["Station"]?>">reached to <?php echo $row3["Station"]?></option>
        <option value="Package Delivered">Package Delivered</option>
  </select></td>

                                        <?php 
                                                $i++;
                                                $total_cost=$total_cost + $row["cost"];
                                        }
                                    }
                                        ?></tr>
                                        <tr>
                                         <th></th>
                                         <th></th>
                                         <th></th>
                                         <th></th>
                                         <th></th>
                                         <th></th>
                                        <td>
                                      <!--<div class="post">-->
                                      <input type="hidden" name="form_city" value="<?php echo $city_filter ?>"/>
                                        <button class="button button3" name="submit2">Submit</button>
                                        <!--</div>-->
                                        </form>
</td></tr>
<?php
                                        
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
                                 }  
                                   ?>                                     </tr>
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