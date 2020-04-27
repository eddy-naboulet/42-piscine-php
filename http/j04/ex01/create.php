<?php
if ($_POST['login'] == "" || $_POST['passwd'] == "")
{
	echo "ERROR";
	return;
}

if (!(file_exists("../private/")))
{
	mkdir ("../private/");
}
if ($_POST['submit'] == "OK")
{
	if (file_exists("../private/passwd"))
	{
		$tab = unserialize(file_get_contents("../private/passwd"));
		$tab_n = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
		foreach ($tab as $w)
		{
			if ($tab_n['login'] === $w['login'])
			{
				echo "ERROR\n";
				return ;
			}
		}
		$tab[] = $tab_n;
		$tab = serialize($tab);
		file_put_contents("../private/passwd", $tab);
	}
	echo "OK\n";
	if (!(file_exists("../private/passwd")))
	{
		file_put_contents("../private/passwd", NULL);
		if (isset($_POST['login']) && isset($_POST['passwd']))
		{
			$tab[] = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
			$tab = serialize($tab);
			file_put_contents("../private/passwd", $tab);
		}
	}
}
?>
