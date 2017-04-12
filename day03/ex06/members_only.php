<?PHP
	if (!$_SERVER['PHP_AUTH_USER'])
	{
		header('WWW-Authenticate: Basic realm="Member Area"');
		header("HTTP/1.0 401 Unauthorized");
		echo "<html><body>That area is accessible for members only</body></html>\n";
		header("Connection: close");
	}
	else if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "Ilovemylittleponey")
	{
		header("Content-Type: text/html");
		echo "<html><body>\nHello Zaz<br />\n";
		echo "<img src='data:image/png;base64,";
		$file = base64_encode(file_get_contents("../img/42.png"));
		echo $file;
		echo "'>\n</body></html>\n";
	}
	else
	{
		echo "<html><body>That area is accessible for members only</body></html>     \n";
		header("HTTP/1.0 401 Unauthorized");
		header("Connection: close");
	}
?>
