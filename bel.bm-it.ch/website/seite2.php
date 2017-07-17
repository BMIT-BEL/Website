<?php
session_start();
if(isset($_SESSION["username"])) {
?>
<html>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="css/design.css" rel="stylesheet">

	<title>Mein Bereich</title>
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

<h1>Hallo <?php echo $_SESSION["username"]; ?></h1>
<a href="logout.php">Ausloggen</a>
</body>
</html>
<?php
} else {
?>
Bitte erst einloggen, <a href="index.php">hier</a>.
<?php
}
?>