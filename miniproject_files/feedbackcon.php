<?php
session_start();
$errors=array();

 $con = mysqli_connect("localhost","root","","courier");
	
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	else
	{
	}
   
   if(isset($_POST['submit']))
	   
	   {
		   $city=mysqli_real_escape_string($con, $_POST['city']);
		   $userID=mysqli_real_escape_string($con, $_POST['userID']);
		   $sql="SELECT `user_id` FROM users WHERE user_uid like '".$userID."'";
		$result = mysqli_query($con,$sql);

		if(mysqli_num_rows($result) ==0)
		{
			array_push($errors,"Please first register");
		}
		   $query="select `user_id` from `users` where `user_uid` like '".$userID."'";
										$result=mysqli_query($con,$query);
										
										 while($row = mysqli_fetch_assoc($result)) 
	   {
       $user_id= $row["user_id"];
       }
	   	echo $user_id;
	    $select=mysqli_real_escape_string($con, $_POST['select']);
		switch($select)
							{
								case "1":
								    $select=1;
									break;
									case "2":
									$select=2;
									break;
									case "3":
								    $select=3;
									break;
									case "4":
									$select=4;
									break;		
							}
		 $select1=mysqli_real_escape_string($con, $_POST['select1']);
		 	switch($select1)
							{
								case "1":
								    $select1=1;
									break;
									case "2":
									$select1=2;
									break;
									case "3":
								    $select1=3;
									break;
									case "4":
									$select1=4;
									break;		
							}
		  $select2=mysqli_real_escape_string($con, $_POST['select2']);
		  	switch($select2)
							{
								case "1":
								    $select2=1;
									break;
									case "2":
									$select2=2;
									break;
									case "3":
								    $select2=3;
									break;
									case "4":
									$select2=4;
									break;		
							}
		   $select3=mysqli_real_escape_string($con, $_POST['select3']);
		   	switch($select3)
							{
								case "1":
								    $select3=1;
									break;
									case "2":
									$select3=2;
									break;
									case "3":
								    $select3=3;
									break;
									case "4":
									$select3=4;
									break;		
							}
		   $suggestion=mysqli_real_escape_string($con, $_POST['suggestion']);
		    $source=mysqli_real_escape_string($con, $_POST['sourc']);
			$sql="INSERT INTO `feedback`( `user_id`, `speed`, `accuracy`, `satisfaction`, `expectations`, `source`, `nearcity`, `Suggestion`) VALUES ('".$user_id."','".$select."','".$select1."','".$select2."','".$select3."','".$source."','".$city."','".$suggestion."')";
			  $result1= mysqli_query($con, $sql);
			 if(mysqli_num_rows($result1)==1)
				 echo"ksxzjkdsajx";
			 else
				 echo"nobnono";
	   }
			  ?>
	