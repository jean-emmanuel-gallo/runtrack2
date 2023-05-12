<form method="post">
   <label for="username">Nom d'utilisateur:</label>
   <input type="text" name="username"><br><br>
   <label for="password">Mot de passe:</label>
   <input type="password" name="password"><br><br>
   <input type="submit" value="Se connecter">
</form>

<?php
if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo') {
    echo "C'est pas ma guerre";
} else {
    echo "Votre pire cauchemar";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'John' && $password == 'Rambo') {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
