<?php
  include("include/header.php");

  // Si on n’a pas de id dans les paramètres de l’URL, on bloque la page
  if (isset($_GET["id"]) && $_GET["id"] != "" && $_GET["id"] != 0) {

    // Si on a des variables en POST, on tente de modifier la promotion ciblée
    if (isset($_POST["promotionname"]) && $_POST["promotionname"] != " ") {
      $request = sprintf("UPDATE promotion SET name='%s' WHERE id='%s'",
                  $_POST["promotionname"], $_POST["id"]);
      if($connection->query($request)) {
          printf("<div class='alert alert-success'>Promotion modifiée</div>\n<a href='promotions.php'>Retour à la liste des promotions</a>");
      }
      else {
        // Gestion d’erreur SQL
        printf("<div class='alert alert-warning'>Erreur: %s</div>", $connection->error);
      }
    }

    // On a un id en GET, on sélectionne la promotion et ses informations
    $request = sprintf("SELECT * FROM promotion WHERE id=%s", $_GET["id"]);
    $result = $connection->query($request);
    $promotions = $result->fetch_assoc();
  }
  else {
    // message d’alerte si on n’a pas d’id en paramètre d’URL
    printf("<div class='alert alert-danger'>Pas d’ID renseigné</div>");
    die();
  }
?>
  <form method="post" class="form-horizontal">
  <fieldset>

  <!-- Form Name -->
  <legend>Modifier une promotion</legend>

  <!-- Text input
  Notez les balises PHP qui permettent l’affichage dynamique -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="promotionname">Nom de la promotion</label>
    <div class="col-md-4">
    <input id="promotionname" name="promotionname"
    placeholder="Nom de la promotion" class="form-control input-md"
    required="" value="<?php printf("%s",$promotions["name"]); ?>"
    type="text">
    <span class="help-block">Indiquez ici le nom de la promotion</span>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="validate"></label>
    <div class="col-md-4">
      <input type="hidden" name="id" value="<?php printf("%s", $promotions["id"]);?>">
      <button id="validate" name="validate" class="btn btn-primary">Valider</button>
    </div>
  </div>

  </fieldset>
  </form>
  <?php
  include("include/footer.php");
   ?>
