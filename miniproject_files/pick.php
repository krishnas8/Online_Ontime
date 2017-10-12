<?php
session_start();
	unset($_SESSION['service']);
		unset($_SESSION['wt']);
$errors=array();
 $_SESSION["cost"]="";
 $cw=$_SESSION['cw'];
 $cd=$_SESSION['cd'];
 $ct=$_SESSION['ct'];
$dis=0;

    $con = mysqli_connect("localhost","root","","courier");
	
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	if(isset($_POST['cost']))
	{
			        $city1 = mysqli_real_escape_string($con, $_POST['city1']);
					$_SESSION['city1']=$city1;
					
					$query="select `Pincode` from `pincodes` where `City` like '".$city1."'";
										$result=mysqli_query($con,$query);
										
										
										if (mysqli_num_rows($result) > 0) 
										{

       while($row = mysqli_fetch_assoc($result)) 
	   {
      $_SESSION['pins']= $row["Pincode"];
       }
										}
					
					        $city2 = mysqli_real_escape_string($con, $_POST['city2']);
							$_SESSION['city2']=$city2;
								$query="select `Pincode` from `pincodes` where `City` like '".$city2."'";
										$result=mysqli_query($con,$query);
										
										
										if (mysqli_num_rows($result) > 0) 
										{

       while($row = mysqli_fetch_assoc($result)) 
	   {
      $_SESSION['pind']= $row["Pincode"];
       }
										}
							$type=mysqli_real_escape_string($con, $_POST['type']);
							if($type=="1")
							$_SESSION['type']="Normal";
						else if($type=="2")
							$_SESSION['type']="Express";
							switch($type)
							{
								case "1":
								    $t=1;
								
									break;
									case "2":
									$t=2;
									
							}
							$weight=mysqli_real_escape_string($con, $_POST['weight']);
							    if (!is_numeric($weight)) 
								{
								   		$_SESSION['wt']="Please enter a valid weight";
										array_push($errors,"bjh");
								}
							
							
                              
							  			$query="select `Distance` from `distance` where ( `PickUp city` like '$city1' and `Destination City` like '$city2') or (`PickUp city` like '$city2' and `Destination City` like '$city1')";
										$result=mysqli_query($con,$query);
										
										
										if (mysqli_num_rows($result) > 0) 
										{

       while($row = mysqli_fetch_assoc($result)) 
	   {
       $dis= $row["Distance"];
       }
										
										
								        
										$cost=$weight*$cw+$cd*$dis+$ct*$t;
										$_SESSION['weight']=$weight;
										
										$_SESSION['cost']=$cost;
										}
										else
										{

											  $_SESSION['service']="Service not avilable in this city";
											
										}
									
										$dat= mysqli_real_escape_string($con, $_POST['dat']);
                                         $_SESSION['date']=$dat;
										  //echo $dat;
										//  SELECT CONVERT($SESSION['date'], `$dat`, 101)
											
										
										
										
					
    }
	

?>
