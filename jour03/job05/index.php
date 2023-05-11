<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array("consonnes" => 0, "voyelles" => 0);
$length = strlen($str);

for ($i = 0; $i < $length; $i++) {
    $char = strtolower($str[$i]);
    if ($char >= 'a' && $char <= 'z') {
        if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y') {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>".$dic["voyelles"]."</td><td>".$dic["consonnes"]."</td></tr></tbody>";
echo "</table>";
?>
