<?PHP
	function ft_is_sort($line)
	{	
		$tmp = $line;
		sort($line);
		return ($tmp === $line);
	}
?>
