<?php
	
	session_start();
	
	if(isset($_POST['registersuccesfully']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>mojeFinanse.pl</title>
	<meta name="description" content="Zacznij panować nad swoimi finansami!"/>
	<meta name="keywords" content="finanse, pieniadze, budzet" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<header>
				<h1 class="logo">
					<a href="index.php" class="logolink"><span style="color:#cda3bc"><i class="icon-wallet"></i>moje</span>Finanse.pl</a>
				</h1>
				<h3>Aplikacja do zarządzania budżetem osobistym</h3>
			</header>
				<div class="registersuccesfully mx-auto px-5 py-7 mt-5">
				Udana rejestracja!<br />
				Możesz już zalogować się stronie <b>mojeFinanse.pl<b>!
				
					<div class="login mb-2"><a href="loginsite.php" class="loginlink"><i class="icon-login"></i> Zaloguj się</a></div>
				
				</div>
		<footer class="footer text-center my-2">
			Autor strony: Kinga Kowal
		</footer>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src ="js/bootstrap.min.js"></script>
</body>
</html>