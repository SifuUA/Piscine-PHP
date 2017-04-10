#!/usr/bin/php
<?PHP
	function ft_split($line)
	{
		$ar = explode(" ", $line);
		foreach ($ar as $elem)
		{
			if (!empty($elem) || $elem[0] == '0')
				$arr[] = $elem;
		}
		return ($arr);
	}
	if ($argc > 1)
	{
		for ($i = 1; $i < $argc; $i++)
		{
			$tmp = ft_split($argv[$i]);
			foreach ($tmp as $elem)
			{
				if (is_numeric($elem))
					$num[] = $elem;
				else if (ctype_alnum($elem))
					$str[] = $elem;
				else
					$symb[] = $elem;
			}
		}
		if (count ($str))
		{
			sort ($str, SORT_NATURAL | SORT_FLAG_CASE);
			foreach ($str as $elem)
				echo "$elem\n";
		}
		if (count ($num))
		{
			sort ($num, SORT_STRING);
			foreach ($num as $elem)
				echo "$elem\n";
		}
		if (count ($symb))
		{
			sort ($symb);
			foreach ($symb as $elem)
				echo "$elem\n";
		}
	}
?>
