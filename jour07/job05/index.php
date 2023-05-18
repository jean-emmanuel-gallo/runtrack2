<?php
function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    
    return $count;
}


function occurrences2($str, $char) {
    $count = 0;
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    
    return $count;
}


$str = "Chromosome";
$char = "o";
$resultat = occurrences($str, $char);
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . $resultat;


$str = "Anticonstutionnellement";
$char = "t";
$resultat = occurrences2($str, $char);
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . $resultat;
?>


