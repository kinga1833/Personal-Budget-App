<?php
	
	session_start();
	
	if(!isset($_SESSION['signed_in']))
	{
		header('Location: index.php');
		exit();
	}
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>mojeFinanse.pl</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Zacznij panować nad swoimi finansami!"/>
	<meta name="keywords" content="finanse, pieniadze,budzet" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<header>
			<h1 class="logo">
				<div style="display:inline-block"><span style="color:#cda3bc"><i class="icon-wallet"></i>moje</span></div><div style="display:inline-block">Finanse.pl</div>
			</h1>
			<h3>Aplikacja do zarządzania budżetem osobistym</h3>
	
			<nav class="navbar navbar-expand-lg">
				
				<button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
					<span class="icon-menu-1"></span>
				</button>
					
				<div class="collapse navbar-collapse" id="mainmenu">
					 
					<ul class="navbar-nav mx-auto bg-white mt-3">
					
						<li class="col-lg-2 ml-1 nav-item">
							<a class="nav-link" href="mainmenu.php"><i class="icon-home mr-2"></i>Strona główna</a>
						</li>
							
						<li class="col-lg-2 nav-item">
							<a class="nav-link" href="addincome.php"><i class="icon-money mr-2"></i>Dodaj przychód</a>
						</li>
							
						<li class="col-lg-2 nav-item">
							<a class="nav-link" href="addexpense.php"><i class="icon-shopping-basket mr-2"></i>Dodaj wydatek</a>
						</li>
							
						<li class="col-lg-2 nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"><i class="icon-chart-pie mr-2"></i>Przeglądaj bilans</a>
							
							
							<div class="dropdown-menu m-0 p-0" aria-labelledby="submenu">
								<a class="dropdown-item " href="showbalance-currentmonth.php">bieżący miesiąc</a>
								<a class="dropdown-item " href="showbalance-lastmonth.php">poprzedni miesiąc</a>
								<a class="dropdown-item " href="showbalance-currentyear.php">bieżący rok</a>
								<a class="dropdown-item " href="showbalance-custom.php">niestandardowy</a>
							</div>
						</li>
							
						<li class="col-lg-2 nav-item">
							<a class="nav-link" href="settings.php"><i class="icon-cog mr-2"></i>Ustawienia</a>
						</li>
							
						<li class="col-lg-2 mr-1 nav-item">
							<a class="nav-link" href="logout.php"><i class="icon-logout mr-2"></i>Wyloguj się</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
			<section class="mx-auto px-2">
				<div class="row">
					<div class="addoperation text-center py-4 my-5 mx-auto bg-white col-md-10 col-lg-8">
						<h4 class="font-weight-bold mb-3">PRZEGLĄDAJ BILANS</h4>
						<p>Wybierz przedział czasowy</p>
						<div class="beginendperiod my-2 py-2">
							<form action="showbalance-customaction.php" method="post">
								Od
								<input type="date" name="startdate" class="ml-2 mr-4 my-3 col-md-3"/>
							
								Do
								<input type="date" name="enddate" class="ml-2 mr-4 my-3 col-md-3"/></br>
								<input type ="submit" value="Zatwierdź" class="btn my-4">
							</form>
						</div>
					</div>
				</div>
				<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
				<script src ="js/bootstrap.min.js"></script>
			</section>
		</div>
		
		<footer>
			<div class="footer text-center my-2">2021 © Kinga Kowal</div>
		</footer>
	
</body>
</html>