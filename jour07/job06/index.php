<?php
function leetSpeak($str) {
    $leetMapping = array(
        'A' => '4',
        'a' => '4',
        'B' => '8',
        'b' => '8',
        'E' => '3',
        'e' => '3',
        'G' => '6',
        'g' => '6',
        'L' => '1',
        'l' => '1',
        'S' => '5',
        's' => '5',
        'T' => '7',
        't' => '7'
    );

    $convertedStr = strtr($str, $leetMapping);
    return $convertedStr;
}

$str = "Abasourdi, je fus stupéfait !";
$resultat = leetSpeak($str);
echo "Leet Speak : " . $resultat;
?>
