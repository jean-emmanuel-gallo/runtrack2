<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelle = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
$result = '';
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $voyelle)) {
        $result .= $str[$i];
    }
}
echo $result;
?>
