<?php

$data = [];

$data = rand(0, 100);
echo $data;
echo '<br  />';

for ($i = 0; $i < count($data); $i++) {
  echo $data[$i];
  echo '<br  />';
} ?>



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
