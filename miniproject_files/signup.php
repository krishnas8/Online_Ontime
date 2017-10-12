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
        $user_first = mysqli_real_escape_string($con, $_POST['fname']);
        $user_last = mysqli_real_escape_string($con, $_POST['lname']);
        $user_email=mysqli_real_escape_string($con, $_POST['email']);
        $user_uid=mysqli_real_escape_string($con, $_POST['uid']);
        $user_pwd=mysqli_real_escape_string($con, $_POST['pwd']);
		if (!preg_match("/^[a-zA-Z ]*$/",$user_first))
		{
			array_push($errors,"Enter a valid name");
		}
		
		else if(strlen($user_first) < 3)
		{
		array_push($errors,"First name is too short");
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$user_last))
		{
			array_push($errors,"Enter a valid Surname");
		}
				$sql="SELECT user_id FROM users WHERE user_email like '".$user_email."'";
		$result = mysqli_query($con,$sql);
	
		if(mysqli_num_rows($result) ==1)
		{
			
			array_push($errors,"Someone is already registered with this email");
		}
		
		$sql="SELECT user_id FROM users WHERE user_uid like '".$user_uid."'";
		$result = mysqli_query($con,$sql);
	
		if(mysqli_num_rows($result) ==1)
		{
			$error = "Please choose another username";
		}
		$password=md5($user_pwd);
		if(count($errors)==0)
		{
        $insertQuery = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$user_first','$user_last','$user_email','$user_uid','$password')";
                    mysqli_query($con, $insertQuery);
                    
                      
                    
					$_SESSION['user_uid']=$user_uid;
					
					header('location: new1.php'); 
		}
        
    }
	if(isset($_POST['login']))
	{
		$user_uid=mysqli_real_escape_string($con, $_POST['uid']);
        $user_pwd=mysqli_real_escape_string($con, $_POST['pwd']);
		
		if(count($errors)==0){
			if($user_uid=="admin" && $user_pwd=="admin"){
				header('location:/miniproject/admin/pages/tables/chart.php'); 
			}
				
			$password=md5($user_pwd);
			$query="select * from users where user_uid like '$user_uid' AND user_pwd='$password'";
			$result=mysqli_query($con,$query);
			if(mysqli_num_rows($result)==1){
			     $_SESSION['user_uid']=$user_uid;
					
					header('location: new1.php'); 
					echo"user";
			}
			else
			{
				
				//echo"Wrong username/password combination";
				array_push($errors,"Wrong username/password combination");
				
			}
			
		}
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['user_uid']);
		header('location: new.php');
	}
	
	

?>
