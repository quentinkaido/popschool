<?php
  include("include/header.php");

  // Si on a reçu des paramètres en POST grâce au formulaire
  if(isset($_POST["elevename"]) && $_POST["elevefirstname"] && $_POST["elevepromo"] != " ") {
    // On prépare la requête au serveur de base de données
    $request = sprintf("INSERT INTO eleves (id, lastname, firstname, promotion_id) VALUES ('', '%s', '%s', '%s')",
                $_POST["elevename"],
                $_POST["elevefirstname"],
                $_POST["elevepromo"]);
    // On execute la requête
    if($connection->query($request)) {
        // Si on est ici, c’est que ça a marché
        printf("<div class='alert alert-success'>Eleve créée</div>\n<a href='students.php'>Retour à la liste des élèves</a>");
    }
    else {
      // Si on est ici, c’est que ça a foiré. Message pour la gestion d’erreur MySQL
      printf("<div class='alert alert-warning'>Erreur: %s</div>", $connection->error);
    }
  }

  ?>
    <form method="POST" class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend>Créer un élève</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="elevename">Nom de l'élève</label>
      <div class="col-md-4">
      <input id="elevename" name="elevename" placeholder="Nom de l'élève" class="form-control input-md" required="" type="text">
      <span class="help-block">Indiquez ici le nom de l'élève</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="elevefirstname">Prénom de l'élève</label>
      <div class="col-md-4">
      <input id="elevefirstname" name="elevefirstname" placeholder="Prénom de l'élève" class="form-control input-md" required="" type="text">
      <span class="help-block">Indiquez ici le prénom de l'élève</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="elevepromo">Promotion de l'élève</label>
      <div class="col-md-4">
      <input id="elevepromo" name="elevepromo" placeholder="Nom de la promotion" class="form-control input-md" required="" type="number">
      <span class="help-block">Indiquez ici la promotion de l'élève</span>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="validate"></label>
      <div class="col-md-4">
        <button id="validate" name="validate" class="btn btn-primary">Valider</button>
      </div>
    </div>

    </fieldset>
    </form>
    <?php
    include("include/footer.php");
     ?>
