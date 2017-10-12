
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
			<div id="logout">
        <?php if(isset($_SESSION['user_uid'])): ?>
			<!--p style="width:auto; position: absolute; top: 5px; left: 700px;"> Welcome </p-->		
		<p style="width:auto; position: absolute; top: 5px; left: 720px; color:#fff; font-size:20px;"> <?php echo $_SESSION['user_uid'];?></p>
		<a href="new.php?logout='1'" >Log Out</a>
		<?php endif?>
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
