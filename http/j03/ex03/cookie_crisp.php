<?php
$value = $_GET["value"];
$name = $_GET["name"];
$action = $_GET["action"];
if ($action != NULL && $name != NULL)
{
	if ($action == "set")
		setcookie($name, $value);
	else if ($action == "get" && isset($_COOKIE[$name]))
		echo "$_COOKIE[$name]\n";
	else if ($action == "del")
	{
		unset($_COOKIE[$name]);
		setcookie(time() - 3600);
	}
}
?>
