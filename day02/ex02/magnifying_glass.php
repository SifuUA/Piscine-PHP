#!/usr/bin/php
<?PHP
	$file = file_get_contents($argv[1]);
	/*//echo "$file";
	preg_match_all('~\<a.+\/a~', $file, $res);
	print_r($res);
	$res1 = implode("\n", $res[0]);
	echo "$res1";
	preg_match_all('~\".+"~', $res1, $str);
	print_r($str[0]);
	//preg_replace('~\".+"~', strtoupper($aaa), $aaa);
	//print_r($str[0]);
	preg_match_all('~\>.+\<~', $res1, $str1);
	print_r($str1);
	/*$titre = eregi("<title>(.*)</title>",$file,$regs);
	echo $regs[1];

	$titre1 = eregi("title=\"(.*)\"",$file,$regs1);
	echo $regs1[1];*/
	
?>