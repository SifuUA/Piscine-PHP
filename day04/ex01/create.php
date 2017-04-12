<?PHP
	if ($_POST['submit'] === 'OK' && $_POST['login'] && $_POST['passwd'])
	{
		$ar['login'] = $_POST['login'];
		$ar['passwd'] = hash('whirlpool', $_POST['passwd']);
		if (!file_exists("../private"))
			mkdir("../private");
		if (!file_exists("../private/passwd"))
		{
			$tmp = array();
			$tmp[] = $ar;
			file_put_contents("../private/passwd", serialize($tmp));
			echo "OK\n";
		}
		else
		{
			$str = unserialize(file_get_contents("../private/passwd"));
			foreach ($str as $key => $value)
			{
				if ($value['login'] === $_POST['login'])
				{
					echo "ERROR\n";
					return;
				}
			}
			$str[] = $ar;
			file_put_contents("../private/passwd", serialize($str));
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>