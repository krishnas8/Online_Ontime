
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<title>Online Ontime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	<body>

		<div id="namebox">
			<h1>Online Ontime</h1>
			<p>-At your home, at your time</p>
	</div>

	

	<div id="container_wrapper">
		<ul>
			<li ><a href="new1.php">Home</a></li>
			<li><a href="new1.php#box1">About</a></li>
			<li class="active1"><a href="orders.php">My Orders</a></li>
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
		<div>
			<?php
				echo "<br><br><h2 style='padding:30px; color:#fff;'>Your Orders:</h2><br>";
				echo "<table style='border: solid 1px black; position: absolute; top:60px; left:50px;'>";
		 		echo "<tr><th>Id</th><th>Type</th><th><pre style='font-size:18px;'>Weight  </pre></th><th><pre style='font-size:18px;'>Pick up city</pre></th><th><pre style='font-size:18px;'>Pick up address</pre></th><th><pre style='font-size:18px;'>Destination city</pre></th><th><pre style='font-size:18px;'>Destination address</pre></th><th><pre style='font-size:18px;'>Date     </pre></th><th>Cost</th><th>Status</th></tr>";


				$errors=array();
		    	$con = mysqli_connect("localhost","root","","courier");
			
				$query="select `user_id` from `users` where `user_uid` like '".$_SESSION['user_uid']."' ";
				$result=mysqli_query($con,$query);
												
				while($row = mysqli_fetch_assoc($result)) 
			    {
		       		$user_id= $row["user_id"];
		        }
			 	$sql ="SELECT courier.courier_id, `type`, `weight`, `Date`, `cost`,pickup.city1,drop_add.city2,address1,address2,`status` FROM `courier`,`pickup`,`drop_add`,`admin` WHERE courier.courier_id=pickup.courier_id and courier.courier_id=drop_add.courier_id and $user_id=courier.user_id and admin.courier_id=pickup.courier_id"; 
			  	$result = mysqli_query($con, $sql);
			  	if (mysqli_num_rows($result) > 0) {
		    	// output data of each row
		    	while($row = mysqli_fetch_assoc($result)) {
		        	echo "<tr><th> " . $row["courier_id"]. "</th><th> ". $row["type"]. "</th><th> " . $row["weight"]."</th><th> "   . $row["city1"]. " </th><th>" . $row["address1"]. " </th><th>" . $row["city2"]. " </th><th>" . $row["address2"]. " </th><th>". $row["Date"]. " </th><th>". $row["cost"]. "</th> <th>" . $row["status"]. " </th></tr>";
		    	}
			}
			echo "</table>";
			echo "<br>";
			echo "<br>";
		?>
	
	</div>

	<form method="POST" action="cancel.php">
		<div id="cancel1" style=" position:relative; top:100px; left:100px;">
			<button id="cancel">Cancel Order</button>
		</div>
	</form>  
	
	</body>
</html>
