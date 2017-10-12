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
</head>
  

<body>
	<div id="containersc">
		<div id="namebox">
			<h1>Online Ontime</h1>
			<p>-At your home, at your time</p>
			
			<div id="sidebox1">
				
				<div id="schedule1">	
					<a href="schedule.php"  >Pick Up</a> <br>
				</div>
				<div id="schedule3">
					<a href="address.php" >Address</a> <br>
				</div>
				<div id="schedule4" style="">
					<a href="confirm.php" >Confirm</a> <br>
				</div>
				<div id="schedule2" style="">
					<div id="active">
						<a href="bill.php" >Payment</a> <br>
					</div>
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

		<form id="form3" action="status.php" method="Post">
		<div id="bill" style="padding-bottom:50px;">
			<h2>Payment Information</h2>
			<h3>Card Number</h3>
			<textarea name="card_no" rows="1" style="width: 80%; font-size: 15px;" placeholder="1234 1234 1234 1234"></textarea>
			<h3>Name of card holder</h3>
			<textarea name="card_name" rows="1" style="width: 80%; font-size: 15px;" placeholder="Enter your name"></textarea>
			<pre id="t2">Expiry date                      CVV</pre>
			<div class="inline-div">
				<textarea class="inline-txt" cols="5" rows="1" style="width: 200px; font-size: 15px;" placeholder="01/2025"></textarea>
				<textarea class="inline-txt" cols="5" rows="1" style="position: relative; left: 130px; width: 140px; font-size: 15px;" placeholder="123"></textarea>
			</div><br>
			  <input type="submit"  value="Next"class="btn" name="next" style="width:auto; position:relative; top: auto; left:550px;"></button>
		</div>
		
		
         		    
		 
		</form>
	

</body>

</html>