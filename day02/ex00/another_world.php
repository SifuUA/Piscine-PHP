#!/usr/bin/php
<?PHP
	if ($argc > 1)
	{
		preg_match_all("/[!-~]{1,}/",$argv[1], $str);
		$fin = implode(" ", $str[0]);
		echo "$fin\n";
	}
?>
