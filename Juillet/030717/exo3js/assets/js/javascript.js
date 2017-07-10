var first, second, result;

  first = prompt('Entrez le premier chiffre :');
  second = prompt('Entrez le second chiffre :');
  result = parseInt(first) + parseInt(second);

  console.log(result);


var printForm = function() {
  var box = document.getElementById("box");
  box.innerHTML =
  "Age : " + document.getElementById("age").value + "<br>" +
  "Combien : " + document.getElementById("combien").value + "<br>" +
  "Résultat boîte dialogue : " + result;

}

for (var i=0; i < 10; i++) {
    console.log("La variable i vaut " + i)
}
