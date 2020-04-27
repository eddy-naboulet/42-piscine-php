<?php
if ($_POST['submit'] == 'OK')
{
	if ($_POST['login'] == NULL || $_POST['oldpw'] == NULL || $_POST['newpw'] == NULL)
		echo "ERROR\n";
	else
	{
		if (file_exists("../private/passwd"))
		{
			$tab = unserialize(file_get_contents("../private/passwd"));
			foreach ($tab as $k => $w)// cherche cores
			{
				if ($_POST['login'] === $w['login']) //login ok
				{
					if (hash('whirlpool', $_POST['oldpw']) == $w['passwd']) //mdp ok
					{
						$tab[$k]['passwd'] = hash('whirlpool', $_POST['newpw']); //modif
						file_put_contents("../private/passwd", serialize($tab)); // put mdp serialize
						echo "OK\n";
					}
					else
						echo "ERROR\n";
				}
				else
					echo "error\n";
			}
		}
	}
}
else
	echo "ERROR\n";
?>
