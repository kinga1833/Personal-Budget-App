<?php
	
	session_start();
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
			<section class="mx-auto">
				<h2>Logowanie</h2>
				<div id="subtitle">Zaloguj się, aby uzyskać dostęp do swojego konta.</div>
				<div class="registerorloginwindow">
				
					<form action="login.php" method="post">
					
						<div class="input-group">
							<div class="input-group-prepend"><i class="icon-mail-alt icons px-1"></i>
							<input class="form-control userinput" type="text"" name="email" placeholder="e-mail" aria-label="e-mail"></div>
						</div>
						
						<div class="input-group">
							<div class="input-group-prepend"><i class="icon-lock icons px-1"></i>
							<input class="form-control userinput" type="password" name="password" placeholder="hasło" aria-label="hasło"></div>
						</div>
						
						<?php
							if(isset($_SESSION['fail'])) echo $_SESSION['fail']."</br>";
						?>
							
						<button class="submitlogin" type="submit">Zaloguj się</button>
					</form>
				</div>
			</section>
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