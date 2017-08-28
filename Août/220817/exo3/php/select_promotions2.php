<?php
$connection = new mysqli("localhost", "root", "1234", "coursSQL1");
if ($result = $connection->query("SELECT * FROM promotions")) {
  printf("Le résultat de la requête contient %d lignes ",$result->num_rows);
  while ($row = $result->fetch_assoc()){
    printf("<br> %s %s %s %s \n", $row["id"], $row["name"], $row["startdate"], $row["enddate"]);
  }}
  else {  printf("Tu t'es planté");}
  ?>
