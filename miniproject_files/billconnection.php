<?php
session_start();
$card_no="";
$errors=array();
    $con = mysqli_connect("localhost","root","","courier");
	
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	
	
    if(isset($_POST['next']))
		
	{ 
	   $card_no=mysqli_real_escape_string($con, $_POST['card_no']);
		$query="select `user_id` from `users` where `user_uid` like '".$_SESSION['user_uid']."' ";
										$result=mysqli_query($con,$query);
										
										 while($row = mysqli_fetch_assoc($result)) 
	   {
       $user_id= $row["user_id"];
       }
  
		   $insertQuery="INSERT INTO `courier` (`user_id`, `type`, `weight`, `Date`, `cost`) VALUES ('".$user_id."','".$_SESSION['type']."','".$_SESSION['weight']."','".$_SESSION['date']."','".$_SESSION['cost']."')";
		  $result= mysqli_query($con, $insertQuery);
		  

		  
		$query="SELECT `courier_id` FROM `courier` WHERE $user_id=courier.user_id ";
			$result=mysqli_query($con,$query);
										
			while($row = mysqli_fetch_assoc($result)) 
	   {
       $courier_id= $row["courier_id"];
       }
       $_SESSION['courier_id']=$courier_id;
		  
		  
		  $insertQuery="INSERT INTO `pickup`(`courier_id`, `name`, `phn`, `address1`, `city1`) VALUES ('".$courier_id."','".$_SESSION['name1']."','".$_SESSION['phn1']."','".$_SESSION['addr1']."','".$_SESSION['city1']."')";
		  $result= mysqli_query($con, $insertQuery);
		  
		   $insertQuery="INSERT INTO `drop_add`(`courier_id`, `name`, `phn`, `address2`, `city2`) VALUES ('".$courier_id."','".$_SESSION['name2']."','".$_SESSION['phn2']."','".$_SESSION['addr2']."','".$_SESSION['city2']."')";
		  $result= mysqli_query($con, $insertQuery);
		  
										
										
	   

		     $insertQuery="INSERT INTO `billing_info`( `courier_id`, `user_id`, `Cost`, `Card_no`) VALUES ('".$courier_id."','".$user_id."','".$_SESSION['cost']."','".$card_no."')";
		  $result= mysqli_query($con, $insertQuery);

			$query2="SELECT `billing_id` from `billing_info` where $user_id=billing_info.user_id ";
		  $result2=mysqli_query($con,$query2);
		  if (mysqli_num_rows($result2) > 0) 
			{
		    	while($row = mysqli_fetch_assoc($result2)) 
				{
		       		$bid= $row["billing_id"];
		    	}
		    }
		    $_SESSION['billing_id']=$bid;
			

	}
	
	
   ?>