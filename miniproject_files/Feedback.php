<?php include 'feedbackcon.php'?>
<?php 
$con = mysqli_connect("localhost","root","","courier");
  
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
  else
  {
  }
 $query="SELECT * FROM `pincodes`";
  $result1=mysqli_query($con,$query);

 ?>
<!DOCTYPE html>
<html><head>
<title>Feedback</title><link rel="stylesheet" href="style1.css"></head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<body>

<div id="container">
		<div id="namebox">
			<h1>Online Ontime</h1>
			<p>-At your home, at your time</p>
		</div>

		<div id="sidebox">
			<h2>Every single opinion matters....</h2><br>
                        <h2>....yes,we are listening!!</h2>

			
		</div>
	</div>

<div id="container_wrapper">
	
		
				<ul>
			<li ><a href="new1.php">Home</a></li>
			<li><a href="new1.php#box1">About</a></li>
			<li ><a href="orders.php">My Orders</a></li>
			<li><a href="track.php">Track</a></li>
			<li class="active1"><a href="feedback.php">Feedback</a></li>
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



<div id="main-wrapper">
<center>
<img src="ff.jpeg" style="width:66%" class="image"></center>
<form class="myform" action="feedback.php" method="POST">
<fieldset>
<legend><b>Location:</b></legend>

<label><span style="color:red">*</span>Our nearest courier office: </label>

<select name="city" required>
<option selected="selected" disabled="disabled" >Select Location</option>
<?php 
  while ($row1 =mysqli_fetch_array($result1)):;
?>

<option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
<?php endwhile; ?>

</select></fieldset><br>
<fieldset><legend><b>Your information:</b></legend>
<font color="red">*</font>UserName:<input name="userID" type="text" required><br>
<br>
<label style="margin-left:0.2px">Type of user</label>
<select>
<option selected="selected" required>User</option>
<option>Company</option></select><br>
<br>

</fieldset><br>

<fieldset><legend><b>Service Rating:</b></legend>
<center>
<table style="width:16%" >
  <tr >
    <th >How satisfied were you with</th>
   <th >Very Satisfied</th> 
    <th>Satisfied</th>
     <th>Neutral</th>
      <th>Dissatisfied</th>
  </tr><div>
  <tr>
    <td>Speed of the service</td>
     <td ><center ><input type="radio" value="4"name="select" checked="checked"> </center></td>
    <td ><center><input type="radio" value="3" name="select"></center> </td>
     <td><center><input type="radio" value="2"name="select"> </center></td>
     <td><center><input type="radio" value="1"name="select"></center> </td>
  </tr></div>
  <tr><div>
   <td>Accuracy of information provided</td>
   <td><center><input type="radio" value="4"name="select1" checked="checked"> </center></td>
    <td><center><input type="radio" value="3" name="select1" ></center> </td>
     <td><center><input type="radio" value="2"name="select1"> </center></td>
     <td><center><input type="radio" value="1"name="select1"></center> </td>
     
  </tr></div>
  <tr>
    <td>Overall how satisfied were you with our services</td>
       <td><center><input type="radio" value="4"name="select2" checked="checked"> </center></td>
    <td><center><input type="radio" value="3" name="select2"></center> </td>
     <td><center><input type="radio" value="2"name="select2"> </center></td>
     <td><center><input type="radio" value="1"name="select2"></center> </td>
  </tr>
  <tr>
 <td>Did the service meet your expectations</td>
   <td><center><input type="radio" value="4"name="select3" checked="checked"> </center></td>
    <td><center><input type="radio" value="3" name="select3"></center> </td>
     <td><center><input type="radio" value="2"name="select3"> </center></td>
     <td><center><input type="radio" value="1"name="select3"></center> </td>
  </tr>
</table>

<br>
<label style="text-align:left">Any Suggestions:</label>
<textarea name="suggestion" rows="4" cols="50"></textarea><br><br>

</fieldset><br>

<fieldset><legend><b>How did you hear about us?</b></legend>
<select name="sourc"><option selected="selected" >Online Ontime.com</option>
<option value="Facebook">Facebook</option>
<option value="Search Engine">Search engine</option>
<option value="Friends/Relatives">Friends/Relatives</option>
<option value="Other">Other</option></select><br>
<br>
</fieldset><br>

<center>

<button class="button" style="vertical-align:middle" name="submit"><span>Submit</span></button><br><br>
</center>
<p style="text-align:right"><span style="color:red">*</span>shows Required Fields</p>
</form>
</div>
<center>




</center></body></html>
