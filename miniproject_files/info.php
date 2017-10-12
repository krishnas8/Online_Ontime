<?php
//$_SESSION['pic']="";
//unset($_SESSION['pic']);
//unset($_SESSION['dest']);
session_start();
$errors=array();

 $con = mysqli_connect("localhost","root","","courier");
	
    if(mysqli_connect_errno())
    {
        echo "Error occured while connecting with database ".mysqli_connect_errno();
    }
	else
	{
		unset($_SESSION['pic']);
unset($_SESSION['dest']);

	}
   

    if(isset($_POST['next']))
    {
        $name1 = mysqli_real_escape_string($con, $_POST['name1']);
         $phn1 = mysqli_real_escape_string($con, $_POST['phn1']);
        $pincode1=mysqli_real_escape_string($con, $_POST['pincode1']);
        $addr1=mysqli_real_escape_string($con, $_POST['addr1']);
		 $name2 = mysqli_real_escape_string($con, $_POST['name2']);
     $phn2 = mysqli_real_escape_string($con, $_POST['phn2']);
        $pincode2=mysqli_real_escape_string($con, $_POST['pincode2']);
        $addr2=mysqli_real_escape_string($con, $_POST['addr2']);
if (!(substr($pincode1, 0, 3) ===  substr( $_SESSION['pins'], 0, 3)) )
{
	array_push($errors,"Please enter valid pickup pin ");
	$_SESSION['pic']="Please enter valid pickup pin ";
}
 if (!(substr($pincode2, 0, 3) ===  substr( $_SESSION['pind'], 0, 3)) )
{
	array_push($errors,"Please enter valid destination pin ");
	$_SESSION['dest']="Please enter valid destination pin ";
}

	if(count($errors)==0)
{
	$_SESSION['name1']=$name1;
	$_SESSION['phn1']=$phn1;
	$_SESSION['pincode1']=$pincode1;
$_SESSION['addr1']=$addr1;
$_SESSION['name2']=$name2;
$_SESSION['phn2']=$phn2;
$_SESSION['pincode2']=$pincode2;
$_SESSION['addr2']=$addr2;
header('location: confirm.php'); 
}
	}	
	 
		
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['user_uid']);
		header('location: new.php');
	}	
	
		
?>