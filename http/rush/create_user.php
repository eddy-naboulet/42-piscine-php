<?php
if ($_SESSION['login'] != NULL)
	echo "ERROR\n";
else
{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Subscribe</title>
		</head>
		<body>
			<form class="" action="add_db_user.php" method="post">
				Identifiant: <input type="text" name="login" value="" /> <br />
				Mot de passe <input type="password" name="password" value="" /> <br />
				Confirmer mot de passe: <input type="password" name="comfirm_p" value=""/> <br />
				E mail:<input type="email" name="email" value=""/>
				<input type="submit" name = "submit" value="OK" title="submit" alt="submit" />
			</form>
		</body>
	</html>
	<?php
}
?>
