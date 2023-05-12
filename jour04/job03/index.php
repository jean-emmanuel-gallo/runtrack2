<!DOCTYPE html>
<html>
<head>
	<title>Formulaire POST</title>
</head>
<body>
	<form method="POST">
	   <label for="nom">Nom:</label>
	   <input type="text" name="nom"><br><br>
	   <label for="prenom">Prénom:</label>
	   <input type="text" name="prenom"><br><br>
       <label for="email">Email:</label>
       <input type="text" name="email">
	   <input type="submit" value="Envoyer">
	</form>

	<?php
	$count = count($_POST);

	echo "Le nombre d'arguments POST envoyé est : " . $count;
	?>
</body>
</html>
