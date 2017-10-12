<?php 
	
	
	
	function logged_in()
	{
			if(isset($_SESSION['email']) || isset($_COOKIE['email']))
			{
				return true;
			}
			else
			{
				return false;
			}
	}

?>


