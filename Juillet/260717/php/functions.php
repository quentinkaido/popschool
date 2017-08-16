<?php

function echoboolean($i){
  if ($i == true) {
    return "true";
  } else {
    return "false";
  }
}

$variable001 = false;
$variable002 = true;

echo echoBoolean ($variable001);
echo "<br />\n";

echo echoBoolean ($variable002);
echo "<br />\n";
