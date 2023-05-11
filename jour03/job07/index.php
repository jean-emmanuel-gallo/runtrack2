<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$length = strlen($str);

$newStr = "";

for ($i = 0; $i < $length; $i++) {
    $char = substr($str, $i, 1);

    if ($i == $length - 1) {
        $newStr .= substr($str, 0, 1);
    } else {
        $newStr .= substr($str, $i + 1, 1);
    }
}

echo $newStr;
?>
