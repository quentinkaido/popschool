<?php

$myArray = [];

$myArray[] = 42;
$myArray[] = 3.14;
$myArray[] = "foo bar baz";
$myArray[] = true;

for ($i = 0; $i < count($myArray); $i++) {
  echo $myArray[$i];
  echo '<br  />';
}
