<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="exo1/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <form class="form-horizontal">
  <fieldset>

  <!-- Form Name -->
  <legend>Créer un élève</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="name">Nom de l'élève</label>
    <div class="col-md-5">
    <input id="name" name="name" placeholder="nom de l'élève" class="form-control input-md" type="text">
    <span class="help-block">Indiquez ici le nom de l'élève</span>
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
    <div class="col-md-4">
      <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Aaron Swartz</option>
        <option value="2">Jimmy Wales</option>
      </select>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-4">
      <button id="" name="envoi" type="submit" class="btn btn-primary" action="exo1/php/functions.php" method="post">Valider</button>
    </div>
  </div>

  <?php
  if(isset($_POST['envoi'])){ // si formulaire soumis
  echo $_POST['name'];
  }
  ?>


  </fieldset>
  </form>



</body>
</html>
