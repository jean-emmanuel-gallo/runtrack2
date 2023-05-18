<?php
session_start();

if (!isset($_SESSION['morpion'])) {
    $_SESSION['morpion'] = array(
        array('-', '-', '-'),
        array('-', '-', '-'),
        array('-', '-', '-')
    );
}

function checkWin($player)
{
    $morpion = $_SESSION['morpion'];

    for ($i = 0; $i < 3; $i++) {
        if ($morpion[$i][0] === $player && $morpion[$i][1] === $player && $morpion[$i][2] === $player) {
            return true;
        }
    }

    for ($j = 0; $j < 3; $j++) {
        if ($morpion[0][$j] === $player && $morpion[1][$j] === $player && $morpion[2][$j] === $player) {
            return true;
        }
    }

    if ($morpion[0][0] === $player && $morpion[1][1] === $player && $morpion[2][2] === $player) {
        return true;
    }
    if ($morpion[0][2] === $player && $morpion[1][1] === $player && $morpion[2][0] === $player) {
        return true;
    }

    return false;
}

if (isset($_POST['reset'])) {
    unset($_SESSION['morpion']);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $row = $_POST['row'];
    $col = $_POST['col'];

    if ($_SESSION['morpion'][$row][$col] === '-') {
        $player = $_SESSION['player'];

        $_SESSION['morpion'][$row][$col] = $player;

        $_SESSION['player'] = ($player === 'X') ? 'O' : 'X';

        if (checkWin($player)) {
            $message = "$player a gagné !";
            unset($_SESSION['morpion']);
        } elseif (!in_array('-', $_SESSION['morpion'][0]) && !in_array('-', $_SESSION['morpion'][1]) && !in_array('-', $_SESSION['morpion'][2])) {
            $message = "Match nul !";
            unset($_SESSION['morpion']);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <?php
    if (isset($message)) {
        echo "<p>$message</p>";
    }

    echo "<table>";
    foreach ($_SESSION['morpion'] as $row => $cols) {
        echo "<tr>";
        foreach ($cols as $col => $value) {
            if ($value === '-') {
                echo "<td>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='row' value='$row'>";
                echo "<input type='hidden' name='col' value='$col'>";
                echo "<input type='submit' value='-' name='submit'>";
                echo "</form>";
                echo "</td>";
            } else {
                echo "<td>$value</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    if (!isset($_SESSION['morpion'])) {
        echo "<form method='post'>";
        echo "<input type='submit' value='Réinitialiser la partie' name='reset'>";
        echo "</form>";
    }
?>

