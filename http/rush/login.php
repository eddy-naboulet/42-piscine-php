<?php
session_start();
if ($_SESSION['login'] !== '' && $_SESSION['login'] != NULL)
{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Login</title>
		</head>
		<body>
			<p>Vous êtes deja connecté</p>
		</body>
	</html>
	<?php
}
else {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Login</title>
		</head>
		<body>
			<form method="POST" action="verif_login.php">
				Identifiant: <input type="text" name="login" value="" /> <br />
				Mot de passe: <input type="password" name="password" value=""/>
				<input type="submit" name = "submit" value="OK" title="submit" alt="submit" />
			</form>
		</body>
	</html>
	<?php
}
?>
