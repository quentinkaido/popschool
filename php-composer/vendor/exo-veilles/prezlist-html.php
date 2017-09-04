<?php

// * créer une BDD nommée prezlist qui stock des présentations
// y insérer des présentations fictives

// * une présentation contient les champs suivants :
//   - titre
//   - durée en minutes
//   - auteur
//   - date (jour, pas besoin de l'heure)
//
// * créer une page web qui affiche la liste des présentations
require('../vendor/autoload.php');
require('prezlist-connect.php');

$sql = "SELECT * FROM veille";
$stmt = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo BDD veilles</title>
  </head>
  <body>

nombre de lignes : <?= $stmt->rowCount() ?>

<table>
  <tr>
    <th>id</th>
    <th>titre</th>
    <th>auteur</th>
    <th>date</th>
    <th>durée</th>
  </tr>

    <?php
    while ($row = $stmt->fetch()) {
      echo "<tr>\n";

      echo "<td>" . $row['id'] . "</td>\n";
      echo "<td>" . $row['titre'] . "</td>\n";
      echo "<td>" . $row['auteur'] . "</td>\n";
      echo "<td>" . $row['date'] . "</td>\n";
      echo "<td>" . $row['durée'] . "</td>\n";

      echo "</tr>\n";

    }
    ?>
  </table>
  </body>
</html>
