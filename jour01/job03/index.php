<!-- index.php -->

<!DOCTYPE html>
<html>
  <head>
    <title>Job 3</title>
  </head>
  <body>
    <?php
      $myBool = true;
      $myInt = 42;
      $myString = "Hello World!";
      $myFloat = 3.14;

      echo "<table>";
      echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
      echo "<tbody>";
      echo "<tr><td>bool</td><td>myBool</td><td>" . var_export($myBool, true) . "</td></tr>";
      echo "<tr><td>int</td><td>myInt</td><td>" . $myInt . "</td></tr>";
      echo "<tr><td>string</td><td>myString</td><td>" . $myString . "</td></tr>";
      echo "<tr><td>float</td><td>myFloat</td><td>" . $myFloat . "</td></tr>";
      echo "</tbody>";
      echo "</table>";
    ?>
  </body>
</html>
