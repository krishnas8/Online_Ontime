<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<title>Online Ontime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
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
			<li class="active1"><a href="orders.php">My Orders</a></li>
			<li><a href="track.php">Track</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		
		
		<div id="logout">
	        <?php if(isset($_SESSION['user_uid'])): ?>
				<p style="width:auto; position: absolute; top: 5px; left: 720px; color:#fff; font-size:20px;"> <?php echo$_SESSION['user_uid'];?></p>
				<a href="new.php?logout='1'" >Log Out</a>
			<?php endif?>
		</div>
	</div>

	<form method="POST" action="cancel.php">
		<div id="courier_no">
			<br><br><h3>Enter the courier id you want to cancel:</h3>
			<input style="width:303px" name="id" type="text" placeholder="please enter courier-id"><br><br><br><br>
			 <input type="submit" id="cancel" value="Cancel" class="btn" name="cancl" ></button>
		</div>
		
	</form>

	<?php
	$con = mysqli_connect("localhost","root","","courier");
	
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	else
	{
	}
	if(isset($_POST['cancl'])){

		$id = mysqli_real_escape_string($con, $_POST['id']);
		$sql="delete from `pickup` where `courier_id`='".$id."' and (select status from `admin` where `courier_id`='".$id."') like 'Order Recieved'";
		if (mysqli_query($con, $sql)) {
		$sql1="delete from `drop_add` where `courier_id`='".$id."' and (select status from `admin` where `courier_id`='".$id."') like 'Order Recieved'";
		if (mysqli_query($con, $sql1)) {
		$sql2="delete from `billing_info` where `courier_id`='".$id."' and (select status from `admin` where `courier_id`='".$id."') like 'Order Recieved'";
		if (mysqli_query($con, $sql2)) {
		$sql3="delete from `courier` where `courier_id`='".$id."' and (select status from `admin` where `courier_id`='".$id."') like 'Order Recieved'";
		if (mysqli_query($con, $sql3)) {
		$sql4="delete from `admin` where `courier_id`='".$id."' and status like 'Order Recieved'";
		
		if (mysqli_query($con, $sql4)) {
    	echo "Order Cancelled!";
		} else {
    	echo "Error deleting record: " . mysqli_error($conn);
		}
	}}}}

	}
?>
	
	</body>
</html>
