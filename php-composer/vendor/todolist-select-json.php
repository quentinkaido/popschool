<?php

require('vendor/autoload.php');
require('todolist-connect.php');
require('todolist-lib.php');


$done = 0;
$data = getAllTodos($conn, $done);

$json = json_encode($date, JSON_PRETTY_PRINT);
echo $json;
