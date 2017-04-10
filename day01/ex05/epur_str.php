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
	if ($argc > 1)
	{	
		$arr = func($argv[1]);
		$ct = count($arr);
		for ($i = 0; $i < $ct; $i++)
		{
			if (($i + 1) < $ct)
				echo "$arr[$i]"." ";
			else
				echo "$arr[$i]"."\n";
		}
	}
?>
