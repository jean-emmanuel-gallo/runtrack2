<?php
$cookie_name = 'nbvisites';

if (!isset($_COOKIE[$cookie_name])) {
    $count = 0;
} else {
    $count = intval($_COOKIE[$cookie_name]);
}

$count++;

setcookie($cookie_name, $count, time() + (86400 * 30), "/"); // Durée du cookie : 30 jours

echo "Nombre de visites : " . $count;
?>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
