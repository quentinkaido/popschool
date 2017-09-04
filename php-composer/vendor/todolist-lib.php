<?php

function getTodos($conn, $done) {
  $sql = "SELECT * FROM todo WHERE done = " . $conn->quote($done);

  return $conn->query($sql);
}

function getAllTOdos($conn, $done) {
  $sql = "SELECT * FROM todo WHERE done = " . $conn->quote($done);

  return $conn->fetchAll($sql);
}?>
