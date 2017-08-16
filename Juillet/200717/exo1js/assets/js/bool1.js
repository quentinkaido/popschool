"use strict";

// exo 2
var hasValidAddress = true;
var hasValidatedAgreement = true;

// afficher dans la console :
// - "commande en cours" si hasValidAddress et hasValidatedAgreement sont vrais
// - "vous devez renseigner une adresse valide" si hasValidAddress est faux
// - "vous devez cocher la case conditions de vente" si hasValidatedAgreement est faux

if (hasValidAddress == true && hasValidatedAgreement == true) {
  console.log('commande en cours');
} else if (hasValidAddress == false && hasValidatedAgreement == false) {
  console.log('vous devez renseigner une adresse et cocher la case condition de vente');
} else if (hasValidAddress == false && hasValidatedAgreement == true){
  console.log('vous devez renseigner une adresse valide');
} else if (hasValidAddress == true && hasValidatedAgreement == false){
  console.log('vous devez cocher la case conditions de vente');
}


//mini appli checklist vacance
function check() {
  var gas = document.getElementById("gas").checked;

  console.log(gas);

  var inputs = document.getElementsByTagName("input");

  for (var input of inputs) {
    console.log(input.checked);
  }

  inputs = document.getElementsByClassName("checklist-item");
  for (var input of inputs) {
    console.log(input.checked);
  }

  inputs = document.querySelectorAll("div label input.checklist-item");
  for (var input of inputs) {
    console.log(input.checked);
  }

}



function check() {
  var inputs = document.querySelectorAll("div label input.checklist-item");

  var result = true;
  for (var input of inputs) {
    if (!input.checked) {
      result = false;
      break;
    }
  }

  if (result) {
    document.querySelector("#message").style.cssText = "color: blue;" = "vous pouvez y aller";
  } else {
    document.querySelector("#message").innerHTML = "attendez, il reste des choses à faire";
  }
}
