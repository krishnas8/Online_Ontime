	<?php
	$name="";
	$email="";
	$contact="";
	$query="";
	
	session_start();
	//$_SESSION['msg']="";
$errors=array();

  $con = mysqli_connect("localhost","root","","courier");
	
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	if(isset($_POST['submit']))
	{
		 $name = mysqli_real_escape_string($con, $_POST['fname']);
        $email=mysqli_real_escape_string($con, $_POST['email']);
        $contact=mysqli_real_escape_string($con, $_POST['contact']);
		$query=mysqli_real_escape_string($con, $_POST['query']);
		
			if (!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			array_push($errors,"Enter a valid name");
		}
		  if(!preg_match('/^\d{10}$/',$contact)) // phone number is valid
    {
           array_push($errors,"Enter a valid contact no");
    }
			if(count($errors)==0){
				echo"dsnfjkck";
	    $insertQuery = "INSERT INTO `contact`( `Name`, `email`, `Contact`, `query`) VALUES ('$name','$email','$contact','$query')";
		 
                   $result= mysqli_query($con, $insertQuery);
				   if(mysqli_num_rows($result)==1){
					   
					   $_SESSION['msg']="We will soon get to you";
					   echo$_SESSION['msg'];
					  
				   }
			}
		
	}
	?>
	
	<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<title>Online Ontime</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

		<div id="namebox">
			<h1>Online Ontime</h1>
			<p>-At your home, at your time</p>
		</div>

		<div id="container_wrapper">
		<ul>
			<li><a href="new1.php">Home</a></li>
			<li><a href="new1.php#box1">About</a></li>
			<li><a href="orders.php">My Orders</a></li>
			<li><a href="track.php">Track</a></li>
			<li><a href="Feedback.php">Feedback</a></li>
			<li class="active"><a href="contact.php">Contact</a></li>
		</ul>
		<div id="logout">
        <?php if(isset($_SESSION['user_uid'])): ?>
				<!--p style="width:auto; position: absolute; top: 5px; left: 700px;"> Welcome </p-->		
			<p style="width:auto; position: absolute; top: 5px; left: 720px; color:#fff; font-size:20px;"> <?php echo$_SESSION['user_uid'];?></p>
			<a href="new.php?logout='1'" >Log Out</a>
		<?php endif?>
		</div>
	</div>
	<img src="8.png" style="position:absolute;top:230px;height:370px;width:1300px;">
	<div id="form"style="left:50px" >
	<form  action="contact.php" method="POST">
	  <?php include("errors.php")?>
	  <label><b>   Name</b></label>
		      <input type="text" placeholder="Enter First Name" name="fname" value="" required>

  <label><b>Email-Id</b></label><br>
		      <input type="email" placeholder="Enter Email" name="email" required>

     <label><b>Contact no</b></label>
		      <input type="text" placeholder="Enter contact no" name="contact" required>
	  <label for>Query</label><br>
     <textarea rows="10" cols="20" name="query" required>
	 </textarea>
  <input type="submit"  value="Sign Up"class="btn" name="submit" ></button>
  
        <?php if(isset($_SESSION['msg'])): ?>
  <?php  echo$_SESSION['msg'];echo"hsjdkhi"; ?>
  	<?php endif?>
	
  </form>
	</div>
	<div id="addr">
	<h1 style="font-size:25px"class="glyphicon glyphicon-map-marker">&nbsp;Online Ontime</h1>
	<p style="font-size:15px"><b>&nbsp;Pune Institute Of Computer Technology,<br> 
	&nbsp;Dhankawadi,<br>
	&nbsp;Pune-411043<b><br></p>
	<h2 style="font-size:25px" class="glyphicon glyphicon-phone-alt"><b>&nbsp;Contact:<b></h2>
        <p style="font-size:15px">020-24351987<br>9922115525</p>
	<h2 style="font-size:25px" class="glyphicon glyphicon-envelope"><b>&nbsp;Email:<b></h2>
        <p style="font-size:15px">online-ontime@gmail.com</p>
	</div>
	
</body>
</html>
