<?php
	
	session_start();

	require_once "connect.php";

	$connection = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM users WHERE email='$login' AND password='$password'";
		
		if ($result = @$connection->query($sql))
		{
			$users_amount=$result->num_rows;
			if($users_amount > 0)
			{
				$row =$result->fetch_assoc();
				$_SESSION['username'] =$row['username'];
				
				$result->free_result();
				
				header('Location:mainmenu.php');
			}
			else
			{
				
			}
		}
		
		$connection->close();
	}
	
	
	
	
	
?>
	