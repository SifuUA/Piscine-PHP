<?PHP
	function ft_split($line)
	{
		$ar = explode(" ", $line);
		foreach ($ar as $elem)
		{
			if (!empty($elem) || $elem[0] == '0')
				$arr[] = $elem;
		}
		sort($arr);
		return ($arr);
	}
?>
