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


<!-- Pseudo -->
  <form action="basededonnee.php" method="post">
  Pseudo : <input id="pseudo"name="pseudo" placeholder="Indiquez votre pseudo.." type="text">
  </form>


  <!-- Promotion -->
  <form action="basededonnee.php" method="post">
  <select name="promo">
  <option value="Vous avez sélectionné la promotion Jimmy Walses">Jimmy Walses</option>
  <option value="Vous avez sélectionné la promotion Aaron Swartz">Aaron Swartz</option>
  <option value="Vous avez sélectionné la Promo3">Promo3</option>
  </select>
  <br>
  <button id="promo" name="envoi" type="submit" class="btn btn-primary">Valider</button>
  </form>






</body>
</html>
