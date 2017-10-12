<?php
session_start();
$errors=array();
echo"kjsk";
 $con = mysqli_connect("localhost","root","","courier");
	
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }?>
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
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    -webkit-transition-duration: 0.2s; /* Safari */
    transition-duration: 0.2s;
    cursor: pointer;
}
.button3 {
    background-color: rgba(211,11,111,0.4); 
    color: black; 
    border: 0px solid #f44336;
}

.button3:hover {
    background-color:rgba(12,12,111,0.4) ;
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
}</style>
</head>

<body class="theme-blue">
    <!-- Overlay For Sidebars -->    <nav class="navbar">
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

    <section>
  <?php
$sql = "select * from contact";

$result = $con->query($sql);
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
                                        <th>Name</th>
										<th>Email</th>
                                        <th>Contact</th>
                                        <th>Query</th>
            
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php
$i=1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
?>                                  
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <td><?php echo $row["Name"]?></td>
										                                        
                                        <td><?php echo $row["email"]?></td>
                                        <td><?php echo $row["Contact"]?></td>
										 <td><?php echo $row["query"]?></td>
                                        <td>
        
                                    </tr>
                                    <?php
                                            }
                                        }
                                         else {
                                            echo "0 results";
                                        }
                                        $con->close();

                                        ?>

                                 
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