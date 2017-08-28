<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Document</title>
</head>
<body>



<div class="table">
  <?php
  $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
  $rand_keys = array_rand($input, 2);
  echo $input[$rand_keys[0]] . "\n";
  echo $input[$rand_keys[1]] . "\n";
  echo '<br />'
  ?>


  <?php
  $data = range(1, 100);
  $proba = array_fill(0, 100, 0);
  for ($i = 0; $i < 100; ++$i) {
      $tirage_tab = array_rand($data, 10);
      foreach($tirage_tab as $key => $value) {
          $proba[$value]++;
      }
  }

  asort($proba);
  echo "Proba : <br/>\n";
  foreach($proba as $key => $value) {
      echo "$key : $value<br/>\n";
  }
  ?>
</div>
<div class="table1">
  <?php
  $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
  $rand_keys = array_rand($input, 2);
  echo $input[$rand_keys[0]] . "\n";
  echo $input[$rand_keys[1]] . "\n";
  echo '<br />'
  ?>


  <?php
  $data = range(1, 100);
  $proba = array_fill(0, 100, 0);
  for ($i = 0; $i < 100; ++$i) {
      $tirage_tab = array_rand($data, 10);
      foreach($tirage_tab as $key => $value) {
          $proba[$value]++;
      }
  }

  asort($proba);
  echo "Proba : <br/>\n";
  foreach($proba as $key => $value) {
      echo "$key : $value<br/>\n";
  }
  ?>
</div>





</body>
</html>
