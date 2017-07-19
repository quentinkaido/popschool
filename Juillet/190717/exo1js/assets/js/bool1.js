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
