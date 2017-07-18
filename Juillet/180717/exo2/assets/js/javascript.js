"use strict";

var myArray = ["kevin", "jean-paul", "bernard", "bénédicte", "robert", "sébastiane"];
var myArray2 = [];

//boucle for avec un index qui commence au début
for (var i = 0; i < myArray.length; i++){
  console.log(myArray[i]);
}

//boucle  for qui commence à la fin jusqu'au début
for (var i = myArray.length -1; i >= 0; i--){
  console.log(myArray[i]);
}


//myArray2

for (var i = 0; i < 10; i++){
  myArray.push(myArray2);
}

console.log(myArray2);
