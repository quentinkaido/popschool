"use strict";

function addition(a, b) {
  return a + b;
}

var resultat;

resultat = addition(2,3);

console.log(resultat);


function addAction() {
  var a;
  var b;
  var result;

  a = document.querySelector("input[name=a]").value;
  b = document.querySelector("input[name=b]").value;

  a = parseInt(a);
  b = parseInt(b);

 result = addition(a, b);

 document.querySelector("#result").innerHTML = result;
}
