<?PHP
	function auth($login, $passwd)
	{
		$file = unserialize(file_get_contents("../private/passwd"));
		$pasword = hash('whirlpool', $passwd);
		foreach ($file as $key => $value)
		{
			if ($value['passwd'] == $pasword)
			{
				if ($value['login'] == $login)
					return TRUE;
			}
		}
		return FALSE;
	}
?>