#!/usr/bin/php
<?PHP
	$j = 0;
	if ($argc == 4)
	{
		for ($i = 1; $i < $argc; $i++ )
			$arr[] = trim($argv[$i]);
			if (!is_numeric($arr[0]) || !is_numeric($arr[2]))
				{
					echo"Incorrect Parameters\n";
					return ;
				}
			if ($arr[1] == "+")
				$res = $arr[0] + $arr[2];
			else if ($arr[1] == "-")
				$res = $arr[0] - $arr[2];
			else if ($arr[1] == "*")
				$res = $arr[0] * $arr[2];
			else if ($arr[1] == "/")
			{
				if ($arr[2] == "0")
				{
					echo"Incorrect Parameters\n";
					return ;
				}
				$res = $arr[0] / $arr[2];
			}
			else if ($arr[1] == "%")
				$res = $arr[0] % $arr[2];
			else
			{
				echo"Incorrect Parameters\n";
				return ;
			}
		echo "$res\n";
	}
	else
	{
		echo"Incorrect Parameters\n";
			return ;
	}
?>
