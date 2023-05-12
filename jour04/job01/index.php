<!DOCTYPE html>
<html>
<head>
	<title>Formulaire GET</title>
</head>
<body>
	<form method="get">
	   <label for="nom">Nom:</label>
	   <input type="text" name="nom"><br><br>
	   <label for="prenom">Prénom:</label>
	   <input type="text" name="prenom"><br><br>
       <label for="email">Email:</label>
       <input type="text" name="email">
	   <input type="submit" value="Envoyer">
	</form>

	<?php
	$count = count($_GET);

	echo "Le nombre d'arguments GET envoyé est : " . $count;
	?>
</body>
</html>
