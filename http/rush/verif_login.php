<?php
$login = json_decode(file_get_contents("../bdd/bdd_users.json"));
if ($_POST['login'] == NULL || $_POST['login'] == "")
	echo "ERROR\n";
if ($_POST['passwd'] == NULL || $_POST['passwd'] == "")
	echo "ERROR\n";
foreach ($login as $user)
{
	if ($user['login'] == $_POST['login'])
		if ($user['passwd'] == hash('whirlpool', $_POST['passwd']))
		{
			$_SESSION['login'] = $user['login'];
			return ;
		}
}
?>
