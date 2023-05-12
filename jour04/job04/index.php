<form method="post">
   <label for="nom">Nom:</label>
   <input type="text" name="nom"><br><br>
   <label for="prenom">Prénom:</label>
   <input type="text" name="prenom"><br><br>
   <input type="submit" value="Envoyer">
</form>

<?php
echo "<table>";
echo "<tr><th>Argument</th><th>Valeur</th></tr>";
foreach ($_POST as $key => $value) {
	echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
}
echo "</table>";
?>
