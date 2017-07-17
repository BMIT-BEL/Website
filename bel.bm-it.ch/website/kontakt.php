<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>Kontakt</title>
<link href="css/design.css" rel="stylesheet">
</head>
<body>

<ul class="topnav" id="myTopnav">
  <li><a href="../index.html">Startseite</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="kontakt.php" class="active" >Kontakt</a></li>
  <li><a href="about.html">Über</a></li>
  <li><a href="login.php">Login</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<div style="padding-left:50px">
  <h2>Kontaktanfrage</h2>
  <p>Für Fragen hier melden</p>
  <form method="post"	action="senden.php">
			<label> Name: </label> 
			<input type="text" name="von" required /><br />
			<label> E-Mail Adresse:</label>
			<input type="email" name="mail" /><br />
			<label> Betreff: </label>
			<input type="text" name="betreff" required /><br />
			<br />
			Nachricht:<br />
			<textarea style="width:500px;height:400px;" name="nachricht"></textarea>
			<br /> <br />
			<input type="submit" value="Senden" /> 
		</form>
</div>

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






