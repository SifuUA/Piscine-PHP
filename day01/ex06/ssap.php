#!/usr/bin/php
<?PHP
	function func($line)
	{
		$ar = explode(" ", $line);
		foreach ($ar as $elem)
		{
			if (!empty($elem) || $elem[0] == '0')
				$arr[] = $elem;
		}
		return ($arr);
	}
	if ($argc == 1)
		return (0);
	for ($i = 1; $i < $argc; $i++)
	{
		$ar = func($argv[$i]);
		foreach ($ar as $elem)
		{
			$fin[] = $elem;
		}
	}
	sort($fin);
	foreach ($fin as $elem)
	{
		echo "$elem"."\n";
	}
?>
