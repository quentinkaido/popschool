<?php
$connection = new mysqli("localhost", "root", "1234", "coursSQL1"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styles.css">
  <title>Document</title>
</head>
<body>

  <form class="form-horizontal">
    <fieldset>
      <legend>Liste des promotions</legend>

      <?php
      if ($result = $connection->query("SELECT * FROM promotions")) {
        while ($row =$result->fetch_assoc()) {
          printf('
          <div class="form-group">
          <label class="col-md-4-controle-label" for="edit_button">%s n°%s</label>
          <div class="col-md-8">
          <button id="edit_button" name="edit" class="btn btn-success">Editer</button>
          <button id="del_button" name="del" class="btn btn-danger">Supprimer</button>
          </div>
          </div>
          ',
          $row["name"],
          $row["id"],
          $row["id"],
          $row["id"],
          $row["id"],
          $row["id"]
        );
      }
    }
    ?>
  </fieldset>
</form>

</body>
</html>
