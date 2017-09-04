<?php
$date ='31/12/2017 23:50:50'

$dateArray = explode(" ", $date);
var_dump($dateArray);

$dateArray = explode("/", $dateArray[0]);
var_dump($dayArray);

$timeArray = explode(":", $dateArray[1]);
var_dump($timeArray);

if (count($dayArray) != 3) {
  throw new Exception("date non valide");

if (count($timeArray) != 3) {
  throw new Exception("heure non valide");
