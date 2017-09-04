<?php

require('../vendor/autoload.php');
require('prezlist-connect.php');

$messages = [];
$author = null;
$title = null;
$date = null;
$duration = null;

if ($_POST) {
  $valid = true;

  if (isset($_POST['author']) && !empty(trim($_POST['author']))) {
    $author = $_POST['author'];
  } else {
    $valid = false;
    $messages['author'] = 'Vous devez spécifier le nom de l\'auteur';
  }

  if (isset($_POST['title']) && !empty(trim($_POST['title']))) {
    $title = $_POST['title'];
  }

  if (isset($_POST['date']) && !empty(trim($_POST['date']))) {
    $date = $_POST['date'];
  }

  if (isset($_POST['duration']) && !empty(trim($_POST['duration']))) {
    $duration = $_POST['duration'];
  }

if ($valid) {
  try {
    $count = $conn->insert('veille', [
    'author' => $author,
    'title' => $title,
    'date' => $date,
    'duration' => $duration,
    ]);

    // @todo récupérer l'id de l'objet inséré en bdd
  } catch (Exception $e) {
    echo $e->getMessage();
    // header('Location: error500.html', true, 302);
    exit();
  }

    $messages['form'] = 'présentation créée';
  }
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Création d'une présentation</title>
  </head>
  <body>
    <h3>Création d'une présentation</h3>
<div>
<?php
if (isset($messages['form'])) {
  echo $messages['form'];
}
 ?>
  </div>
    <form action="<?= basename(__FILE__) ?>" method="post">
<div>
  <?php
if (isset($messages['title'])) {
  echo $messages['title'];
}
   ?>
  </div>
      <input type="text" name="author" value="<?= htmlentities($author)?>" placeholder="nom de l'auteur" /> *<br />

      <input type="text" name="title" value="<?= htmlentities($title)?>" placeholder="title" /> <br />

      <input type="date" name="date" value="<?= htmlentities($date)?>" placeholder="date" /> <br />

      <input type="text" name="duration" value="<?= htmlentities($duration)?>" placeholder="durée" /> <br />

      <input type="submit" value="valider" /> <br />

    </form>
</body>
</html>
