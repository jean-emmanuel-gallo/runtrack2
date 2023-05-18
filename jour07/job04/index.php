<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Division par zéro impossible";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opération invalide";
    }
}

$resultat = calcule(5, '+', 3); 
echo "Résultat : " . $resultat . "<br>";

$resultat = calcule(10, '*', 2); 
echo "Résultat : " . $resultat . "<br>";

$resultat = calcule(60, '/', 2);
echo "Résultat : " . $resultat . "<br>";
?>
