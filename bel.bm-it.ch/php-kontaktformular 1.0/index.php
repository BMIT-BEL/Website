<!DOCTYPE html>
<html>
	<head>
		<title>Kontakt</title 
	</head>
	<body>
		<form method="post"	action="senden.php">
			Name: <input type="text" name="von" /><br />
			E-Mail Adresse: <input type="text" name="mail" /><br />
			Betreff: <input type="text" name="betreff" /><br />
			<br />
			Nachricht:<br />
			<textarea style="width:500px;height:400px;" name="nachricht"></textarea>
			<br />
			<input type="submit" value="Senden" /> 
		</form>
	</body>
</html>