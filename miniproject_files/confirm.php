<?php session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>

 <script src="js/jquery.js"></script> 
<script src="js/moment.min.js"></script> 
<script src="js/combodate.js"></script> 
<html>
<head>
	<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<title>Online Ontime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
  

<body>
	<div id="containersc">
		<div id="namebox">
			<h1>Online Ontime</h1>
			<p>-At your home, at your time</p>
			
			<div id="sidebox1">
				
				<div id="schedule1">
					<a href="schedule.php" >Pick Up</a> <br>
				</div>
				<div id="schedule3">
					<a href="address.php" >Address</a> <br>
				</div>
				<div id="schedule4" style="">
					<div id="active">
						<a href="confirm.php" >Confirm</a> <br>
					</div>
				</div>
				<div id="schedule5">
					<a href="bill.php" >Payment</a> <br>
				</div>
				<div id="schedule5">
					<a href="status.php" >Status</a> <br>
				</div>
			</div>
		</div>
	</div>
	
	<div id="container_wrapper">
	<ul>
			<li><a href="new1.php">Home</a></li>
			<li><a href="new1.php#box1">About</a></li>
			<li><a href="orders.php">My Orders</a></li>
			<li><a href="track.php">Track</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<div id="logout">
	    <?php if(isset($_SESSION['user_uid'])): ?>
				<!--p style="width:auto; position: absolute; top: 5px; left: 700px;"> Welcome </p-->		
			<p style="width:auto; position: absolute; top: 5px; left: 720px; color:#fff; font-size:20px;"> <?php echo$_SESSION['user_uid'];?></p>
			<a href="new.php?logout='1'" >Log Out</a>
		<?php endif?>
	</div>
	<div id="confirm">
		<h3>Order Summary</h3>
		Pickup address:<br>
		<textarea disabled rows="4" cols="50"><?php echo$_SESSION['addr1']; ?></textarea>
		Delivery address:<br>
		<textarea disabled rows="4" cols="50"><?php echo$_SESSION['addr2'];?></textarea>
		Type of delivery:<br>
		<textarea disabled rows="1" cols="50"><?php echo$_SESSION['type'];?></textarea>
		Weight:<br>
		<textarea disabled rows="1" cols="50"><?php echo$_SESSION['weight'];?></textarea>
		Total cost:<br>
		<textarea disabled rows="1" cols="50"><?php echo$_SESSION['cost'];?></textarea>
	</div>
	</div>
	<div style="position: absolute; top: 900px; height: 100px; width: 100%; background-color: #2B6CA3;">
	</div>
	<div id="next" style="position:absolute;top:400px;left:100px;">
		<ul>
			<a href="bill.php">Next</a>
		</ul>
	</div>
	

</body>

</html>