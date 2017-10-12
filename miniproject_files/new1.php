
<?php include 'signup.php'?>
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

	<div id="container">
		<div id="namebox">
			<h1>Online Ontime</h1>
			<p>-At your home, at your time</p>
		</div>

		<div id="sidebox">
			<h2>Where miles are just smiles...</h2>
			
		</div>
	</div>

	

	<div id="container_wrapper">
		<ul>
			<li class="active1"><a  href="new1.php">Home</a></li>
			<li><a href="new1.php#box1">About</a></li>
			<li><a href="orders.php">My orders</a></li>
			<li><a href="track.php">Track</a></li>
			<li><a href="Feedback.php">Feedback</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		
		<div id="logout">
        <?php if(isset($_SESSION['user_uid'])): ?>
			<!--p style="width:auto; position: absolute; top: 5px; left: 700px;"> Welcome </p-->		
		<p style="width:auto; position: absolute; top: 5px; left: 720px; color:#fff; font-size:20px;"> <?php echo $_SESSION['user_uid'];?></p>
		<a href="new.php?logout='1'" >Log Out</a>
		<?php endif?>
		</div>
		

		<div id="id01" class="modal">
		  
		  <form class="modal-content animate">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		    </div>

		    <div class="container1">
		      <h2>Login</h2>
		      <label><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="uname" required>

		      <label><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="psw" required>
		        
		      <button type="submit">Login</button>
		      <input type="checkbox" checked="checked"> Remember me
		    </div>

		    <div class="container1" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		      <span class="psw">Forgot <a href="#">password?</a></span>
		    </div>
		  </form>
		</div>  

		

		<div id="id02" class="modal">
		  
		  <form class="modal-content animate" method="POST" action="new1.php"   >
		  <?php include("errors.php")?>
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		    </div>

		    <div class="container1">
		      <h2>Sign Up</h2>
			  
		      <label><b>  First Name</b></label>
		      <input type="text" placeholder="Enter First Name" name="fname" value="" required>

		      <label><b>Last Nmae</b></label>
		      <input type="text" placeholder="Enter Last name" name="lname" value=""required >

		      <label><b>Email</b></label><br>
		      <input type="email" placeholder="Enter Email" name="email" required>

		      <label><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="uid" required>

		      <label><b>  Password</b></label>
		      <input type="password" placeholder="Enter Password" name="pwd" required>
		      <input type="submit"  value="Sign Up"class="btn" name="submit" ></button>
		    </div>

		    <div class="container1" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
		    </div>
			
		  </form>
		</div>

	</div>

	<div id="button1">
		<a href="schedule.php" name="schedule">Schedule a Pickup</a>
	</div>

	<div id="box1" style="padding-bottom:20px;">
			
		<div id="box2">

			<p>
				<br>Online Ontime - Domestic Couriers - embarked on its journey in the year 1987 with offices located in the most of the major cities all over India.

				<br><br>Since then, we have been growing rapidly and going places.

				<br><br>We strive to deliver a level of service that exceeds the expectations of our customers.
			</p>
			 
		</div>
		<div id="box3">
            
                <center>  <p style="color:white;">Services provided by us at:<br></p>
                  <ol style="text-align:left " >
  <li>Pune</li><br>
  <li>Mumbai</li><br>
  <li>Banglore</li><br>
  <li>Delhi</li><br>
  <li>Chennai</li></ol>

<div id="box4">
            
<ol start="6" style="text-align:left">
<li>Surat</li><br>
  <li>Jaipur</li><br>
  <li>Kolkata</li><br>
<li>Hyderabad</li><br>
<li>Indore</li>

</ol>  

       </div> 
   </div> 
    

	</div>
	<img src="4.jpg" style="position:absolute;left:100px;top:1050px;width:329px;height:400px;" -->
<img src="cityy.jpeg" style="position:absolute;right:160px;top:1520px;width:329px;height:410px;" -->
	

	</body>
</html>
