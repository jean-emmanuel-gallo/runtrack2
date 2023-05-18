<?php
if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + (86400 * 30), "/"); 
}

if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom , bienvenu ! :)";
    echo "<form method='post'>";
    echo "<input type='submit' name='deco' value='Déconnexion'>";
    echo "</form>";

    if (isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600, "/"); 
        header("Location: ".$_SERVER['PHP_SELF']); 
        exit();
    }
} else {
    echo "<form method='post'>";
    echo "<input type='text' name='prenom' placeholder='Entrez votre prénom'>";
    echo "<input type='submit' name='connexion' value='Connexion'>";
    echo "</form>";
}
?>
