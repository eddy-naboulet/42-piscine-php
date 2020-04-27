<?php
session_start();
if ($_SESSION['login'] == 'admin' && $_SESSION['passwd'] == 'admin')
{
	?>
		<!DOCTYPE html>
		<html>
			<head>
				<meta charset="utf-8">
				<title></title>
			</head>
			<body>
				<div class="creer_article">
					<button type="button" name="button">add article</button>
				</div>
			</body>
		</html>
	<?php
}
else
{
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
?>
