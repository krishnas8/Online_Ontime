
<?php include 'billconnection.php'?>

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
	<style>
	#b3 {
	position: relative;
	top: 196px;
	left: 60px;
	width: 58%;
	background-color: #fff;
	image-rendering: auto;
	opacity: 0.7;
	padding: 10px;
}
	</style>
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
					<a href="confirm.php" >Confirm</a> <br>
				</div>
				<div id="schedule2" style="">
					<a href="bill.php" >Payment</a> <br>
				</div>
				<div id="schedule5">
				<div id="active">
					<a href="status.php" >Status</a> <br>
					</div>
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

		<form id="form4" action="status.php" method="Post">
			<?php if(isset($_SESSION['service'])): ?>
				<?php echo$_SESSION['service'];?>
			<?php endif?>
			<div id="thank">
				<br><h2>Thank You For Your Order!</h2>
			</div>
			<div id="stat">
				<img src="5.jpg">
			</div>

			<div id="b3">
				<br><h3>Courier ID: <?php echo$_SESSION['courier_id']; ?> </h3>
				<br><h3>Invoice No.: <?php echo$_SESSION['billing_id']; ?></h3>
				<br><h3>Bill Amount: ₹<?php echo$_SESSION['cost']; ?></h3>
				<br><br><h4>Your booking has been confirmed. If you have any questions, please feel free to contact us. </h4><br>
			</div>
		</form>
	<div style="position: absolute; top: 900px; height: 100px; width: 100%; background-color: #2B6CA3;">
	</div>

</body>

</html>