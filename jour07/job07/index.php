<?php
function mettreEnGras($str) {
    $mots = explode(' ', $str);
    $resultat = '';

    foreach ($mots as $mot) {
        if (ctype_upper(substr($mot, 0, 1))) {
            $resultat .= '<b>' . $mot . '</b> ';
        } else {
            $resultat .= $mot . ' ';
        }
    }

    return $resultat;
}

function decalerCesar($str, $decalage = 2) {
    $resultat = '';

    for ($i = 0; $i < strlen($str); $i++) {
        $caractere = $str[$i];

        if (ctype_alpha($caractere)) {
            $majuscule = ctype_upper($caractere);
            $caractere = chr((ord($caractere) - ($majuscule ? 65 : 97) + $decalage) % 26 + ($majuscule ? 65 : 97));
        }

        $resultat .= $caractere;
    }

    return $resultat;
}

function ajouterUnderscore($str) {
    $mots = explode(' ', $str);
    $resultat = '';

    foreach ($mots as $mot) {
        if (substr($mot, -2) === 'me') {
            $resultat .= $mot . '_ ';
        } else {
            $resultat .= $mot . ' ';
        }
    }

    return $resultat;
}

if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    $resultat = '';

    switch ($fonction) {
        case 'gras':
            $resultat = mettreEnGras($str);
            break;
        case 'cesar':
            $resultat = decalerCesar($str);
            break;
        case 'plateforme':
            $resultat = ajouterUnderscore($str);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de transformation</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required><br>

        <label for="fonction">Transformation :</label>
        <select id="fonction" name="fonction">
            <option value="gras">Mettre en gras les mots commençant par une majuscule</option>
            <option value="cesar">Décaler chaque caractère selon un décalage</option>
            <option value="plateforme">Ajouter un "_" aux mots finissant par "me"</option>
        </select><br>

        <input type="submit" name="submit" value="Valider">
    </form>

    <?php if (isset($resultat)) : ?>
        <div>Résultat : <?php echo $resultat; ?></div>
    <?php endif; ?>
</body>
</html>
