<?php
$cookie_name = 'nbvisites';

if (!isset($_COOKIE[$cookie_name])) {
    $count = 0;
} else {
    $count = intval($_COOKIE[$cookie_name]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        $count = 0;
    }
}

$count++;

setcookie($cookie_name, $count, time() + 3600); // Durée du cookie : 1 heure

echo "Nombre de visites : " . $count;
?>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
