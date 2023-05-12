<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET</title>
</head>
<body>
    <form method="get" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre">
        <button type="submit">Valider</button>
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        } else {
            echo "La valeur entrée n'est pas un nombre.";
        }
    }
    ?>
</body>
</html>
