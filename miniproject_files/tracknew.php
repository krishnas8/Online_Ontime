<?php include 'signup.php'?>
<?php include 'trackconn.php'?>
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

	<div id="container1">
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
			<li ><a href="new1.php">Home</a></li>
			<li><a href="#box1">About</a></li>
			<li class="active1"><a id="active" href="track.php">Track</a></li>
			<li><a href="Feedback.html">Feedback</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; position: absolute; top: 5px; left: 700px;">Login</button>

		<div id="id01" class="modal">
		  
		  <form class="modal-content animate" method="POST" action="new.php">
            <?php include("errors.php")?>		   
		   <div class="imgcontainer">
		      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		    </div>

		    <div class="container1">
		      <h2>Login</h2>
		      <label><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="uid" required>

		      <label><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="pwd" required>
		        
		      <button type="submit" name="login">Login</button>
		      <input type="checkbox" checked="checked"> Remember me
		    </div>

		    <div class="container1" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		      <span class="psw">Forgot <a href="#">password?</a></span>
		    </div>
		  </form>
		</div>  

		<button onclick="document.getElementById('id02').style.display='block'" style="width:auto; position: absolute; top: 5px; left: 800px;">Signup</button>

		<div id="id02" class="modal">
		  
		  <form class="modal-content animate" method="POST" action="new.php"   >
		  <?php include("errors.php")?>
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		    </div>

		    <div class="container1">
		      <h2>Sign Up</h2>
			  
		      <label><b>  First Name</b></label>
		      <input type="text" placeholder="Enter First Name" name="fname" value="" >

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
	
     </div>

<div id="main-wrapper1"><center>

<img src="tr1.jpeg" style="width:36%" class="image"></center><br><br>
<center>
<form action="tracknew.php" method="POST">
<label style="text-align:left"><b>Courier-Id:<b></label>
<input style="width:303px" name="id" type="text placeholder="please enter your courier-id"><br><br><br><br>
<button class="button" style="vertical-align:middle" name="number1"><span>Track</span></button><br><br></center>
</form>



</div>		


</body>
</html>
