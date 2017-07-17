<!DOCTYPE html>
<html>
	<head>
		<title>Kontakt</title>
	</head>
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
	</body>
</html>