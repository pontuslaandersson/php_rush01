<?PHP
session_start();

if ($_POST['login1'] && $_POST['login2'] && $_POST['login3'] && $_POST['login4'])
{
	$_SESSION["logged_in_user"]["key1"] = $_POST["login1"];
	$_SESSION["logged_in_user"]["key2"] = $_POST["login2"];
	$_SESSION["logged_in_user"]["key3"] = $_POST["login3"];
	$_SESSION["logged_in_user"]["key4"] = $_POST["login4"];
	if ($_POST['submit'] === 'CONNECT')
		header("Location: D08/play.html");
		?>
	<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta charset="utf-8">
<TITLE>Your Fleets Have Gathered</title>
<LINK href="index.css" rel="stylesheet">
</HEAD>
<BODY>
	<p><a><H1>Welcome <?php echo $_SESSION['logged_in_user']['key1']?></H1><p</a>
	<p><a><H1>Welcome <?php echo $_SESSION['logged_in_user']['key2']?></H1><p</a>
	<p><a><H1>Welcome <?php echo $_SESSION['logged_in_user']['key3']?></H1><p</a>
	<p><a><H1>Welcome <?php echo $_SESSION['logged_in_user']['key4']?></H1><p</a>
	<br />
	<H1>FIGHT!</H1>
	<DIV id="picture" ><IMG
	SRC="https://cdn.dribbble.com/users/375867/screenshots/4053894/2.png"
	ALT="SHIP!" TITLE="SHIP!"></DIV>
</BODY>
</HTML>
	<?PHP
}
else
	exit ("ERROR: Enter names for both players!");
?>
