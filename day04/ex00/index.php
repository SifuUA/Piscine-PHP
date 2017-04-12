<?PHP
		session_start();
	if ($_GET['submit'] == 'OK')
	{
		$_SESSION['passwd'] = $_GET['passwd'];
		$_SESSION['login'] = $_GET['login'];
	}
?>
<html><body>
<form align="center">
	Username: <input name="login" placeholder="Input login" value="<?PHP echo $_SESSION['login']?>"/>
	<br />
	Password: <input name="passwd" placeholder="Input password" value="<?PHP echo $_SESSION['passwd']?>"/>
	<br />
	<input type="submit" name="submit"  value="OK">
</form>
</body></html>
