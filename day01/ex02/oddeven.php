#!/usr/bin/php
<?PHP
	echo "Enter a number: ";
	while (fscanf(STDIN, "%s\n", $line))
	{
		if ($line % 2 == 0 && is_numeric($line))
			echo "The number ".$line. " is even\n";
		else if ($line % 2 != 0 && is_numeric($line))
			echo "The number ".$line. " is odd\n";
		else
			echo "'". $line. "'". " is not a number\n";
		echo "Enter a number: ";
	$line = NULL;
	}
	echo "\n";
?>
