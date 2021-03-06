<?php

include("config/db.php");
$connection = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_base
);

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel ="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
  <title>TP PHP: Gestion des promotions et des élèves</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="nav">
        <ul class="nav navbar-nav">
          <li><a href="/"><i class="glyphicon glyphicon-home"></i>&nbsp;Accueil</a></li>
          <li><a href="promotions.php"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Promotions</a></li>
          <li><a href="students.php"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Élèves</a></li>
          <li><a href="create_promotion.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Ajouter une promotion</a></li>
          <li><a href="create_student.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Ajouter un élève</a></li>
        </ul>
      </div>
    </div>
  </nav>
