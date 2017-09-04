<?php
require('vendor/autoload.php');
require('todolist-connect.php');

$done = 0;

$sql = "SELECT * FROM todo WHERE done = " . $conn->quote($done);
$stmt = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

nombre de lignes : <?= $stmt->rowCount() ?>

<table>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>description</th>
    <th>Limite</th>
    <th>Statut</th>
  </tr>

    <?php
    while ($row = $stmt->fetch()) {
      echo "<tr>\n";

      echo "<td>" . $row['id'] . "</td>\n";
      echo "<td>" . $row['title'] . "</td>\n";
      echo "<td>" . $row['description'] . "</td>\n";
      echo "<td>" . $row['deadline'] . "</td>\n";
      echo "<td>" . $row['done'] . "</td>\n";

      echo "</tr>\n";

    }
    ?>
  </table>
  </body>
</html>
