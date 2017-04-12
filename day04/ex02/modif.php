<?PHP
	if ($_POST['submit'] === 'OK' && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
	{
		$ar['login'] = $_POST['login'];
		$ar['oldpw'] = hash('whirlpool', $_POST['oldpw']);
		$ar['newpw'] = hash('whirlpool', $_POST['newpw']);
		$str = unserialize(file_get_contents("../private/passwd"));
		foreach ($str as $key => $value)
		{
			if ($value['login'] == $ar['login'])
			{
				if ($value['passwd'] == $ar['oldpw'])
				{
					$new_k = $key;
					$bu = 1;
				}
			}
		}
		if ($bu == 1)
		{
			$str[$new_k]['passwd'] = $ar['newpw'];
			file_put_contents("../private/passwd", serialize($str));
			echo "OK\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>