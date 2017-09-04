<?php

// * créer une version json de veille.html
require('../vendor/autoload.php');
require('prezlist-connect.php');

$sql = "SELECT * FROM veille";
$data = $conn->fetchAll($sql);
$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;
