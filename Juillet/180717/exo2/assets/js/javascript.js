"use strict";

var myArray = ["kevin", "jean-paul", "bernard", "bénédicte", "robert", "sébastiane", 45, 89, 2, 51];
var myArray2 = [];

//boucle for avec un index qui commence au début
for (var i = 0; i < myArray.length; i++){
  console.log(myArray[i]);
}

//boucle  for qui commence à la fin jusqu'au début
for (var i = myArray.length -1; i >= 0; i--){
  console.log(myArray[i]);
}


for (var i = 0; i < 10; i++){
  myArray.push(myArray2);
}


//afficher les nombre au dessus de 50
for (var i = 0; i < myArray.length; i++){
  if (myArray[i] > 50){
    console.log(myArray[i]);
  }
}


function fibonacci()
{
  var nb_1 = 0, nb_2 = 1;
  for(var j = 0; j < 500; j++)

  {
    var result = nb_1 + nb_2;
    console.log(result);
    nb_1 = nb_2;
    nb_2 = result;
    if (result > 500000){
      console.log(result[j]);
    }
  }
}
fibonacci();
