<?php
session_start();
function add_first($login, $mdp, $mail)
{
	$first_user['login'] = $login;
	$first_user['passwd'] = $mdp;
	$first_user['mail'] = $mail;
	$users = $first_user;
	file_put_contents('./bdd/bdd_users.json', json_encode($users));
}
function verif_user($login, $mdp, $mdpv, $mail)
{
	$users = json_decode(file_get_contents('./bdd/bdd_users.json'));
	if ($users == NULL)
		$users = add_first($login, $mdp, $mail);
	foreach ($users as $user)
	{
		if ($login == $users['login'])
		{
			echo "ERROR1\n";
			return (FALSE);
		}
		if ($mail == $users['mail'])
		{
			echo "ERROR2\n";
			return (FALSE);
		}
	}
	if ($mdp != $mdpv)
	{
		echo "ERROR3\n";
		return (FALSE);
	}
}
	//if (preg_match('/*@*.*/', $mail) == 0)
	//{
	//	echo "ERROR\n";
	//	return (FALSE);
	//}
	$new_user['login'] = $login;
	$new_user['passwd'] = $mdp;
	$new_user['mail'] = $mail;
	$users[] = $new_user;
	return ($users);
	if ($_SESSION['login'] == NULL || $_SESSION['login'] == "")
	{
		if (($users = verif_user($_POST['login'], $_POST['password'], $_POST['comfirm_p'], $_POST['email'])))
		{
			file_put_contents('./bdd/bdd_users.json', json_encode($users));
			$_SESSION['login'] = $_POST['login'];
		}

	}
	else
		echo "ERROR4\n";


?>
