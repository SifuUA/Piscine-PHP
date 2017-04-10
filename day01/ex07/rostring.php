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
	if ($argc == 1)
		return (0);
	$i = 0;
	$ar = ft_split($argv[1]);
	foreach ($ar as $elem)
	{
		if ($i == 0)
			$res = $elem;
		$i++;
	}
	if ($i == 1)
		echo "$res"."\n";
	else if ($i > 1)
	{
		$i = 0;
		foreach ($ar as $elem)
		{
			if ($i == 0)
				$tmp = $elem;
			else
				echo "$elem". " ";
			$i++;
		}
		echo "$res"."\n";
	}
?>
