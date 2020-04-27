<?php
	function auth($login, $passwd)
	{
		$passwd = hash('whirlpool', $passwd);
		$content = unserialize(file_get_contents('../private/passwd', FILE_USE_INCLUDE_PATH));
		foreach ($content as $key => $value)
		{
			if (($value['login'] == $login) && ($value['passwd'] == $passwd))
				return (TRUE);
		}
		return (FALSE);
	}
?>
