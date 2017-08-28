<?php
$connection = new mysqli("localhost", "root", "1234", "coursSQL1");
if ($result = $connection->query("SELECT * FROM eleves")) {
  printf("Le résultat de la requête contient %d lignes ",$result->num_rows);
  while ($row = $result->fetch_assoc()){
    printf("<br> %s %s %s %s %s %s %s \n", $row["id"], $row["firstname"], $row["lastname"], $row["promotionsid"], $row["sexe"], $row["date_de_naissance"], $row["adresse"], $row["ville"]);
  }}
  else {  printf("Tu t'es planté");}
  ?>
