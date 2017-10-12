<?php 
	session_unset();
session_start();
	 $con = mysqli_connect("localhost","root","","courier");
	$_SESSION['deldate']="";
	$_SESSION['id']="";
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	else
	{
	}
	if(isset($_POST['number1'])){
		$id = mysqli_real_escape_string($con, $_POST['id']);
		$_SESSION['id']=$id;
		echo$_SESSION['id'];
	$query="select Date from courier where courier.courier_id='".$id."'";
						$result=mysqli_query($con,$query);
										
										 while($row = mysqli_fetch_assoc($result)) 
	   {
       $_SESSION['date5']= $row["Date"];
       }
echo $_SESSION['date5'];
	   echo "<br>";
	   echo "<br>";
	echo "Billing Date: ";
	$query="select Date from billing_info where billing_info.courier_id='".$id."'";
						$result=mysqli_query($con,$query);
										
										 while($row = mysqli_fetch_assoc($result)) 
	   {
       $_SESSION['bla']= $row["Date"];
       }
	   
	   $query="select status from admin where admin.courier_id='".$id."'";
						$result=mysqli_query($con,$query);
										
										 while($row = mysqli_fetch_assoc($result)) 
	   {
       $_SESSION['stat']= $row["status"];
       }
	   echo  $_SESSION['stat'];
if($_SESSION['stat']=="Package Delivered")
{
	$query=" select `update_date` from `admin` where `courier_id`='".$id."'  ";
						$result=mysqli_query($con,$query);
										
										 while($row = mysqli_fetch_assoc($result)) 
	   {
       $_SESSION['deldate']= $row["update_date"];
       }
}
else
{
	 $_SESSION['deldate']="Soon";
}
		 
header('location:track1.php');
}

if(isset($_GET['close'])){
	unset(  $_SESSION['deldate']); 
	unset($_SESSION['stat']);
	unset($_SESSION['bla']);
		header('location:tracknew.php');
	}

 ?>	