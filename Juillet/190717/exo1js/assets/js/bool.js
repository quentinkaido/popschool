"use strict";

// function getRandomArbitrary(min, max) {
//   return Math.random() * (max - min) + min;
// }
function getRandomArbitrary(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}
var stock = getRandomArbitrary(0, 100);
console.log(stock);


//afficher dans la console :
// - "stock indisponible si stock est à 0"
// - "stock en faible quantité si le stock est plus petit que 50"
// - "stock disponible si le stock est plus grand ou égal à 50"


if (stock == 0) {
  console.log('stock indisponible');
}
else if (stock < 50) {
  console.log('stock en faible quantité');
}
else {
  console.log('stock disponible');
}
