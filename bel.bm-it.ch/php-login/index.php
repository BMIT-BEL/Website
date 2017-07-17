<?php
$verhalten = 0;
session_start();
if(!isset($_SESSION["username"]) and !isset($_GET["page"])) {
$verhalten = 0;
}
if($_GET["page"] == "log") {
$user = $_POST["user"];
$passwort = $_POST["passwort"];

if($user == "Lukas" and $passwort == "toll") {
$_SESSION["username"] = $user;
$verhalten = 1;
} else {
$verhalten = 2;
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Geschützer Bereich</title>
	<?php
	if($verhalten == 1) {
	?>
		<meta http-equiv="refresh" content="3; URL=seite2.php"
	<?php
	}
	?>
</head>
<body>
<?php 
if($verhalten == 0) {
?>
Bitte logge dich ein:<br />
<form method="post" action="index.php?page=log">
	User:<input type="text" name="user" /><br /> 
	Passwort:<input type="password" name="passwort" /><br />
	<input type="submit" value="Einloggen" />
</form>
<?php
}
if($verhalten == 1) {
?>
Du hast dich richtig eingeloggt und wirst nun weitergeleitet....
<?php
} 
if($verhalten == 2) {
?>
Du hast dich nicht richtig eingeloggt, <a href="index.php">zurück</a>.
<?php
}
?>
</body>
</html>