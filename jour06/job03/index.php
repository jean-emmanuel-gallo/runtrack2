<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];

        if (!isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'] = array();
        }

        $_SESSION['prenoms'][] = $prenom;
    }

    if (isset($_POST['reset'])) {
        unset($_SESSION['prenoms']);
    }
}
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Entrez votre prénom">
    <input type="submit" value="Ajouter">
</form>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser la liste">
</form>

<?php
if (isset($_SESSION['prenoms'])) {
    echo "<h3>Liste des prénoms :</h3>";
    echo "<ul>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>$prenom</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucun prénom ajouté.</p>";
}
?>
