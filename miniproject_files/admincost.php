<?php include 'pick.php'?>
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
.button3 {
    background-color: rgba(211,11,111,0.4); 
    color: black; 
    border: 0px solid #f44336;
}

.posit{
 position:fixed;
  background-color: #2b6ca3;
    padding-left: 15px;
      padding-top: 15px;
        padding-right: 15px;
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
                <form action="admincost.php" method="POST">
                    <p>Weight factor: </p>
                    <input type="text" name="wt"><br>
                    <p>Distance factor: </p>
                    <input type="text" name="dt"><br>
                    <p>Type factor: </p>
                    <input type="text" name="tt"><br>
                    <input type="submit" id="submit" value="Submit" class="btn" name="sbmit" ></button>
                </form>
                <?php
                    session_start();
                    $errors=array();

                    $con = mysqli_connect("localhost","root","password","courier");
                        
                    if(mysqli_connect_errno())
                    {
                        echo "Error occured while connecting with database ".mysqli_connect_errno();
                    }

                    if(isset($_POST['sbmit'])){
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

            </div>                 
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>



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