<?php
	if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
	{
		header('Content-Type: text/html');
		echo "<html><body>"."\n"."Bonjour Zaz<br />"."\n";
		$pth = "../img/42.png";
		$data = file_get_contents($pth);
		$data = base64_encode($data);
		echo "<img src='data:image/png;base64,$data'>";
		echo "\n"."</body></html>\n";

	}
	else
	{
		header("WWW-Authenticate: Basic realm=''Espace membres''");
		header('HTTP/1.0 401 Unauthorized');
		header('Content-Type: text/html');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}
?>
