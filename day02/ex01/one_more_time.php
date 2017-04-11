#!/usr/bin/php
<?PHP
	date_default_timezone_set("Europe/Paris");
	preg_match_all("/[a-zA-Z0-9-]{1,}/",$argv[1], $arr);
	$low = strtolower($arr[0][2]);
	if ($arr[0][4] > "23" || $arr[0][4] < "0" || $arr[0][5] > "59" || $arr[0][5] < "0" || $arr[0][6] > "59" || $arr[0][6] < "0")
	{
		echo "Wrong Format\n";
				return ;
	}
	if (count($arr[0]) != 7 || substr_count($argv[1], " ") != 4)
	{
		if (count($arr) > 1 || substr_count($argv[1], " ") != 4)
			echo "Wrong Format\n";
		else if (count($arr) == 1)
			echo "\n";
		return ;
	}
	$hash_ar = array("janvier" => 1, "fevrier" => 2, "mars" => 3, "avril" => 4, "mai" => 5, "juin" => 6,
					 "juillet" => 7, "aout" => 8, "septembre" => 9, "octobre" => 10, "novembre" => 11, "decembre" => 12);
	$all = array_keys($hash_ar);
	if (in_array($low, $all))
	{
		$time = mktime($arr[0][4], $arr[0][5], $arr[0][6], $hash_ar[$low], $arr[0][1], $arr[0][3]);
		if (!checkdate($hash_ar[$low], $arr[0][1], $arr[0][3]))
			{
				echo "Wrong Format\n";
				return ;
			}
		echo "$time\n";
	}
?>
