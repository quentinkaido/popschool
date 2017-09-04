<?php

require('vendor/autoload.php');

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
    'dbname' => 'preslist',
    'user' => 'root',
    'password' => '1234',
    'host' => '127.0.0.1',
    'driver' => 'pdo_mysql',
    'charset'=> 'utf8mb4'
);

try {
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$conn->connect();
} catch (Exception $e) {
  echo $e->getMessage();
  exit();
}

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
<table>
  <tr>
    <th>Id</th>
    <th>Titre</th>
    <th>Auteur</th>
    <th>Date</th>
    <th>Durée en minute</th>
  </tr>
    <?php
    while ($row = $stmt->fetch()) {
      echo "<tr>\n";

      echo "<td>" . $row['id'] . "</td>\n";
      echo "<td>" . $row['titre'] . "</td>\n";
      echo "<td>" . $row['auteur'] . "</td>\n";
      echo "<td>" . $row['date'] . "</td>\n";
      echo "<td>" . $row['duree'] . "</td>\n";

      echo "</tr>\n";
    }

    ?>

  </table>

  </body>

</html>
