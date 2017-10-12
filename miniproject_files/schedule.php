
<?php include 'pick.php'?>

<!DOCTYPE html>
<!DOCTYPE html>
 <script src="js/jquery.js"></script> 
<script src="js/moment.min.js"></script> 
<script src="js/combodate.js"></script> 
<script
  src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
  <style>
		pre {
			font-size: 20px;
			position: absolute;
			left: 300px;
			top: 775px;
			color:#fff;
		}
	</style>

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
					<div id="active">
						<a href="schedule.php" >Pick Up</a> <br>
					</div>
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

		<form id="form2" action="schedule.php" method="Post" style="color:#fff;">
		 <?php if(isset($_SESSION['service'])): ?>
		<?php echo$_SESSION['service'];?>
		<?php endif?>
		<?php if(isset($_SESSION['wt'])): ?>
		<?php echo$_SESSION['wt'];?>
		<?php endif?>
		
			<div id="pickpin" style=" position:absolute;top:300px;left:100px;">
		  		Pick-up City     <br>
		  		<input type="text"  name="city1" placeholder="City(CamelCase)" value="<?php if (isset($_SESSION['city1'])) echo $_SESSION['city1'] ?>" style="width:400px;" required>
		  	</div>
		  	<div id="deliverypin" style="position:absolute;top:400px;left:100px;">
		  		Destination City<br>
		  		<input type="text" name="city2" placeholder="City(CamelCase)" value="<?php if (isset($_SESSION['city2'])) echo $_SESSION['city2'] ?>" style="width:400px;" required>
		  	</div>
			<div id="type" style="margin-top:450px;position:absolute;left:100px;">
		  		Courier Type<br>
		 		<select name="type" style="width:400px;height:40px;">
		 			<option  selected ="selected" disabled="disabled">Select type of courier</option>
		  			<option value="1" <?php if((isset($_SESSION['type'])) && $_SESSION['type']=='Normal') echo 'selected'; ?> >Normal</option>
		  			<option value="2"<?php if((isset($_SESSION['type'])) && $_SESSION['type']=='Express') echo 'selected'; ?>>Express</option>
				</select>
			</div>
			<div id="type" style="margin-top:550px;position:absolute;left:100px;">
		  		Courier Weight<br>
				<input type="text" name="weight" placeholder="Weight in kg" value="<?php if (isset($_SESSION['weight'])) echo $_SESSION['weight'] ?>" style="width:400px;" required>
		 		

			</div>
			<?php
			$today=date('Y-m-d');
			$d=strtotime('+7 Days');
			$dat=date('Y-m-d',$d);
			?>
			<div id="date" style="margin-top:640px;position:absolute;left:100px;">
		  		Pick-up Date<br>
		    	<input  type="date" name="dat" id="pick" style="margin-top:20px;" min=<?php echo $today;?> max=<?php echo $dat;?> value="<?php if (isset($_SESSION['date'])) echo $_SESSION['date'] ?>">
		    </div>
		    <div id="cost1" style="margin-top:720px;position:absolute;left:100px;">
		      <button type="submit" name="cost">Total Cost</button>		<br><br><br>
			   <p>* Mis-declaration of Weight and Size will lead to seizure of Package & Penalty of Rs.500/-</p>
			  </div>
            
		    
		</form>
	</div>
	<div style="position: absolute; top: 300px; left: 900px;">
		<img src="12.png" height="350" width="350">
	</div>
	<div id="next">
		<ul>
			<a href="address.php">Next</a>
		</ul>
	</div>
	<div style="width: 50px;height: 30px;">
	<pre id="pre1">
			   <b>₹<?php echo$_SESSION['cost'];?></b>	</pre>
	<div style="position: absolute; top: 900px; height: 100px; width: 100%; background-color: #2B6CA3;">
	</div>
	</div>


</body>

</html>