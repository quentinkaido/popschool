function ajouteElement(person) {
  console.log("we're in");
  console.log(person);
  // crée un nouvel élément div
  // et lui donne un peu de contenu
  const nouveauDiv = document.createElement("div");
  const nouveauContenu = document.createTextNode("");
  nouveauDiv.appendChild(nouveauContenu) //ajoute le contenu au div

document.getElementById("infoZone").innerHTML +=
' <div class="container">' +
'  <div class="row">' +
'  <div class="col-md-6">' +
'  <div class="card" id="infoCarte" style="width: 19rem;">' +
'    <img class="card-img-top" src="..." alt="">' +
'    <div class="card-block">' +
'      <h4 class="card-title">' + person.name + '</h4>' +
'      <p class="card-text">Age: ' + person.age + '</p>' +
'      <p class="card-text">Taille: ' + person.size + '</p>' +
'      <p class="card-text">Surnom: ' + person.surname + '</p>' +
'      <p class="card-text">Nom Complet: ' + person.fullname + '</p>' +
'      <p class="card-text">Email: ' + person.email + '</p>' +
'      <p class="card-text">Permis: ' + person.drivinglicence + '</p>' +
'      <a href="#" class="btn btn-primary">Modifier</a>' +
'      <a href="#" class="btn btn-danger">Supprimer</a>' +
'     </div>' +
'     </div>' +
'     </div>' +
'    </div>' +
'  </div>';

  // ajoute l'élément qui vient d'être créé et son contenu au DOM
  const divActuel = document.getElementById("div1");
  document.body.insertBefore(nouveauDiv, divActuel);
}
