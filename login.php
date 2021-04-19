<?php
	
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['login'])))
	{
		header('Location:index.php');
		exit();
	}

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
		
		$login = htmlentities ($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities ($password, ENT_QUOTES, "UTF-8");
		
		if ($result = @$connection->query(sprintf("SELECT * FROM users WHERE email='%s' AND password='%s'", mysqli_real_escape_string($connection, $login), mysqli_real_escape_string($connection, $password))))
		{
			$users_amount=$result->num_rows;
			if($users_amount > 0)
			{
				$_SESSION['signed_in'] = true;
				$row =$result->fetch_assoc();
				$_SESSION['id']=$row['id'];
				$_SESSION['username'] =$row['username'];
				
				unset($_SESSION['fail']);
				$result->free_result();
				
				header('Location:mainmenu.php');
			}
			else
			{
				$_SESSION['fail'] = '<span style ="color:red">Nieprawidłowy login lub hasło!</span>';
				
				header('Location:loginsite.php');
			}
		}
		
		$connection->close();
	}	
	
?>
	