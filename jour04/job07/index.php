<!DOCTYPE html>
<html>
<head>
    <title>Ma maison</title>
    <style>
        .roof {
            border-bottom: solid 100px transparent;
            border-left: solid 50px <?php echo $_POST['color'] ?>;
            border-right: solid 50px <?php echo $_POST['color'] ?>;
            height: 0;
            width: 0;
        }

        .house {
            background-color: <?php echo $_POST['color'] ?>;
            height: <?php echo $_POST['hauteur'] ?>px;
            width: <?php echo $_POST['largeur'] ?>px;
        }

        .door {
            background-color: white;
            border: solid 5px black;
            height: 80px;
            margin: 20px;
            width: 40px;
        }

        .window {
            background-color: white;
            border: solid 5px black;
            height: 50px;
            margin: 20px;
            width: 50px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="largeur">Largeur :</label>
        <input type="text" name="largeur" id="largeur">
        <br>
        <label for="hauteur">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur">
        <br>
        <label for="color">Couleur :</label>
        <input type="text" name="color" id="color" value="red">
        <br>
        <button type="submit">Valider</button>
    </form>

    <?php
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        $largeur = $_POST['largeur'];
        $hauteur = $_POST['hauteur'];

        if (is_numeric($largeur) && is_numeric($hauteur)) {
            echo '<div class="roof"></div>';
            echo '<div class="house">';
            echo '<div class="door"></div>';
            echo '<div class="window"></div>';
            echo '<div class="window"></div>';
            echo '</div>';
        } else {
            echo "Veuillez entrer des valeurs numériques pour la largeur et la hauteur.";
        }
    }
    ?>
</body>
</html>
