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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="css/design.css" rel="stylesheet">
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

<ul class="topnav" id="myTopnav">
  <li><a href="../index.html">Startseite</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="kontakt.php">Kontakt</a></li>
  <li><a href="about.html">Über</a></li>
  <li><a href="login.php" class="active">Login</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<?php 
if($verhalten == 0) {
?>

<form method="post" action="login.php?page=log">
	
	<div id = "hoi" style ="margin-left: 50px; margin-top: 50px; ">
		<b> Bitte logge dich ein: </b> <br /><br /> 
		<label> Benutzername: </label>
		<input type="text" name="user" /><br />
		<label> Passwort: </label>
		<input type="password" name="passwort" /><br /> <br />
		<input type="submit" value="Einloggen"  />
	</div>
<br />	
	
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
Du hast dich nicht richtig eingeloggt, <a href="login.php">zurück</a>.
<?php
}
?>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>