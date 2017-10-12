<?php include 'info.php'?>
<? session_start();?>
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
	</style>
</head>

				  
<body background="bg.jpg">
	<div id="containersc">
		<div id="namebox">
			<h1>Online Ontime</h1>
			<p>-At your home, at your time</p>
			
			<div id="sidebox1">				
				<div id="schedule1">
					<a href="schedule.php" >Pick Up</a> <br>
				</div>
				
					<div id="schedule3">
					<div id="active">
						<a href="address.php" >Address</a> <br>
					</div>
				</div>
				<div id="schedule4" style="">
					<a href="confirm.php" >Confirm</a> <br>
				</div>
				<div id="schedule5">
					<a href="bill.php" >Payment</a> <br>
				</div>
				<div id="schedule5">
					<a href="status.php" >Status</a> <br>
				</div>
			</div>

			<div id="pickup_add">
			  <?php if(isset($_SESSION['pic'])): ?>
			 <?php echo	$_SESSION['pic'];?>
			 <?php endif?>
				<div id="title1">
				<form method="POST" action="address.php">
				 
					<b>Pickup Address</b>
				</div>
				<div class="abc">
					
					<div class="def">
						<label class="t" for="name" ><br>Name</label>
						<input type="text" name="name1" required >
					</div>
					
					<div class="def">
						<label class="t" for="phn">Phone Number</label>
						<input type="text" name="phn1" autocomplete="phn" required="">
					</div>

					<div class="def">
						<label class="t" for="pincode">Pincode</label>
						<input type="text" name="pincode1" required="">
					</div>

					<div class="efg">
						<label class="t" for="address">Address</label>
						<!--input type="text" name="address" required=""-->
						<textarea name="addr1"rows="4" cols="20">
						</textarea>
					</div>

					
				</div>
			</div>


			<div id="drop_add">
			 <?php if(isset($_SESSION['dest'])): ?>
			 <?php echo	$_SESSION['dest'];?>
			 <?php endif?>
				<div id="title1">
					<b>Drop Address</b>
				</div>
				
				<div class="abc">
					
					<div class="def">
						<label class="t" for="name"><br>Name</label>
						<input type="text" name="name2" required>
					</div>
					
					<div class="def">
						<label class="t" for="phn">Phone Number</label>
						<input type="text" name="phn2"  required>
					</div>

					<div class="def">
						<label class="t" for="pincode">Pincode</label>
						<input type="text"name="pincode2" required>
					</div>

				

					<div class="efg">
						<label class="t" for="address">Address</label>
						<!--input type="text" name="address" required=""-->
						<textarea name="addr2" rows="4" cols="20">
						</textarea>
					</div>

				</div>
			</div>
			
	<div id="cost1" style="margin-top:550px;position:absolute;left:1000px;">
		      <input type="submit" name="next"></button>		<br><br><br>
			  </div>
			</form>
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
	</div>

	

	<div style="position: absolute; top: 900px; height: 100px; width: 100%; background-color: #2B6CA3;">
	</div>

	
			

</body>

</html>