<?php include 'signup.php'?>
<!DOCTYPE html>
<html>
<head>
<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<title>Online Ontime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
		  <form class="modal-content animate" method="POST" action="new.php"   >
		  <?php include("errors.php")?>
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		    </div>

		    <div class="container1">
		      <h2>Sign Up</h2>
			  
		      <label><b>  First Name</b></label>
		      <input type="text" placeholder="Enter Name" name="fname" value="<?php echo $user_first; ?>" >

		      <label><b>Last Nmae</b></label>
		      <input type="text" placeholder="Enter Username" name="lname" required >

		      <label><b>Email</b></label><br>
		      <input type="email" placeholder="Enter Email" name="email" required>

		      <label><b>Username</b></label>
		      <input type="text" placeholder="Enter Password" name="uid" required>

		      <label><b>  Password</b></label>
		      <input type="password" placeholder="Enter Password" name="pwd" required>
		      <input type="submit"  value="Sign Up"class="btn" name="submit" ></button>
		    </div>

		    <div class="container1" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
		    </div>
			<input type="RESET">
		  </form>
		  </body>
		  </html>