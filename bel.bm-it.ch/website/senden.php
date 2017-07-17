<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kontakt</title>
	</head>
	
	<title>Kontakt</title>
<link href="css/design.css" rel="stylesheet">

	<body>
		<?php
			if($_POST['von']!="" and $_POST['mail']!="" and $_POST['betreff']!="" and $_POST['nachricht']!="") {
			$empf = "lukas.berli@espas.ch";
			$betreff = $_POST['betreff'];
			$from = "From: ";
			$from .= $_POST['von']; 
			$from .= " <"; 
			$from .= $_POST['mail'];
			$from .= ">\n";
			$from .= "Replay-To: ";
			$from .= $_POST['mail'];
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = $_POST['nachricht']; 
			
		
			mail($empf, $betreff, $text, $from);
			echo "Vielen Dank";
			} else {
			echo "Bitte alle Felder ausf&uuml;llen....";	
			
			}
			
		?>
		
		<form action="website/index.html" method="post">
		<button type="submit" >Weiter</button>
		</form>
	</body>
</html>