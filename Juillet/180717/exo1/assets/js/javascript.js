"use strict";

//déclaration et initialisation d'un tableau vide
var myArray =[];
//déclaration et initialisation d'un tableau avec 3 élements
var myArray2 = [123, 42, 3.14, "Hello"];


// inspection des tableaux dans la console
console.log(myArray);
console.log(myArray2);

// ajout d'élements dans un tableau
myArray.push(123);
myArray.push(42);
myArray.push(3.14);
myArray.push("Hello");


//aficher le premier élement d'un tableau
if (myArray.length > 0);
console.log(myArray[0]);

//aficher la taille d'un tableau
console.log (myArray.length);

//si le tableau contient au moins un élement
//afficher le dernier élement d'un tableau
if (myArray.length > 0) {
console.log(myArray[myArray.length - 1]);
}

if (myArray.length > 0) {
  myArray[myArray.length - 1] = "Salut";
}

//supprimer le deuxième élément ( la valeur 42) du tableau
myArray.splice(1, 1);
console.log(myArray);

//supprimer la valeur 3.14 du tableau
myArray.splice(1, 1);
console.log(myArray.splice);
