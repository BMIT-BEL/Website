<?php
session_start();
session_destroy();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="css/design.css" rel="stylesheet">
</head>
<body>
<ul class="topnav" id="myTopnav">
  <li><a href="index.html">Startseite</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="kontakt.php">Kontakt</a></li>
  <li><a href="#about">Über</a></li>
  <li><a href="login.php" class="active">Login</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">?</a>
  </li>
</ul>
<h3>Du bist nun erfolgreich ausgeloggt.</h3>
</body>
</html>