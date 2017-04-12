<?PHP
	session_start();
	if ($_SESSION && $_SESSION['loggued_on_user'] != NULL)
	{
		echo $_SESSION['loggued_on_user'];
		echo "\n";
	}
	else
		echo "ERROR\n";
?>