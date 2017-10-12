<!DOCTYPE html>
<?php
session_start();
$errors=array();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "courier";
        // Create connection
        $con = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>

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
    left:20px;
    padding-left: 40px;
}

.padd1{
    background-color:rgba(255,255,255,0.6) ;
    padding-top: 10px;
    padding-left: 20px;
    padding-bottom: 10px;
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
                                      <div class ="as font-18">  Courier Details</div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="update_cost.php" >
                                      <div class ="cs font-18"> Add city</div>
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
<div class = "font-24 align-center" > Updates : </div>
  <li class="dropdown"> 
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <div class="padd1"> <b>Add City</b> 
                        </div>
                                </a>
                       

 <ul class="dropdown-menu">
                            <li class="header"><b>Add City</b></li>
                            <li class="body">
                            
<div class="padd">
<br>
<label><b></div>
Update city :<b></label>
<br>
<div class="padd">
        <input type="text" name="city"  required>
</div>
<br>

<label class="t" for="pincode">Pincode</label>
  <div class="padd">
         <input type="text" name="pincode" required>
   </div>
<br>
        <button class="button button3 " name="submit">Find</button>
        <br>
    </li></ul>
</form>
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <div class="padd1"> Change Cost factor
                        </div>
                                </a>
                       

 <ul class="dropdown-menu">
                            <li class="header">Change Cost factor</li>
                            <li class="body">
                                <form action="update_cost.php" method="POST">
                    <p>Weight factor: </p>
                    <input type="text" name="wt"><br>
                    <p>Distance factor: </p>
                    <input type="text" name="dt"><br>
                    <p>Type factor: </p>
                    <input type="text" name="tt"><br>
                    <input type="submit" id="submit" value="Submit" class="btn" name="sbmit" ></button>
                </form>
 </li></ul></li>
</div>

                <?php
                      	
                    if(isset($_POST['sbmit'])){
						unset( $_SESSION['cw']);
						unset($_SESSION['cd']);
						unset( $_SESSION['ct']);
                        $cw = mysqli_real_escape_string($con, $_POST['wt']);
                        $_SESSION['cw']=$cw;
                        $cd = mysqli_real_escape_string($con, $_POST['dt']);
                        $_SESSION['cd']=$cd;
                        $ct = mysqli_real_escape_string($con, $_POST['tt']);
                        $_SESSION['ct']=$ct;


                        echo$_SESSION['cw'];
                        echo$_SESSION['cd'];
                        echo$_SESSION['ct'];
                    }
                ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <h2>Insert Details</h2>
            </div>
            <div class="row clearfix">
                    <div class="card">

                        <div class="header">
                            
                        <div class="body table-responsive">
                            <table class="table">
   <?php

     if(isset($_POST['submit'])|isset($_POST['submit1'])){

     if(isset($_POST['submit1']))
     {
            $sql="select City from pincodes where 1";

         $city1=mysqli_real_escape_string($con, $_POST["form_city"]);

         $pincode=mysqli_real_escape_string($con, $_POST["form_pincode"]);
         $j=1;
        
     $result = $con->query($sql);
    
             if ($result->num_rows > 0) 
            {
            while($row = $result->fetch_assoc())
            {
                     $di = mysqli_real_escape_string($con, $_POST["Status$j"]);
                    $ci = mysqli_real_escape_string($con, $_POST["cit$j"]);                     
                    //echo $di;
                    echo $ci;
                    $city2=$row['City'];
                    $sql="INSERT INTO `distance`(`pickup_city`, `drop_city`, `distance`,`inter_city1` ) VALUES ('".$city1."','".$city2."','".$di."','".$ci."')";
                  
                    if($con->query($sql) >0 ){
                        echo "inserted";
                    }else{
                        echo "not inserted";
                    }
                    $j++;
            }
     }

     }
     else if(isset($_POST['submit'] )){
         $city1=mysqli_real_escape_string($con, $_POST["city"]);

         $pincode=mysqli_real_escape_string($con, $_POST["pincode"]);
         

                    $sql1="INSERT INTO pincodes (`City`, `Pincode` ) VALUES ('".$city1."','".$pincode."')";
                  
                    $con->query($sql1);
                       
     
     $sql="select City from pincodes where City not like '$city1'";
     $result = $con->query($sql);
     $Status=array();
?>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Present Offices </th>
                                        <th>Inter Offices Distance</th>
                                        <th>Intermediate stations</th>                                        
                                     </tr>
                                </thead>
                                <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php     
     $i=1;
     if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
                          <tbody>
        
                   <th scope="row"> <?php echo $i ?> </th>
                  <td><?php echo $row['City'];?></td>
               <td> <input type="text"  <?php $id="Status".$i; echo $id;?> name="<?php echo $id;?>" ></td>
               <td>        <input type="text" name="<?php echo "cit".$i ?>"  > </td> 
                           </tbody>
<?php
    $i++;
    }?>
<tr> <td></td>
    <td></td>
    <td></td><td>
    <input type="hidden" name="form_city" value=" <?php echo $city1; ?> "/>
     <input type="hidden" name="form_pincode" value="<?php echo  $pincode; ?>">
     <button class="button button3" name="submit1">Submit</button>
</td></tr>
    </form>
    <?php
     }
     else
         echo "0 results";
 }
}
     ?>

                            </table>
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