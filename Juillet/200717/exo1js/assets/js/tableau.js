var data = [
  {
    id: 243,
    name: "AAA",
    scores1: [76, 64, 10, 67, 64]  },
  {
    id: 123,
    name: "Kevin",
    scores2: [42, 100, 54, 65, 32] },
  {
    id: 768,
    name: "Steve",
    scores3: [93, 2, 56, 78, 100]  },
];

// intégrez bootsrap
// à partir de ces données :
// - afficher une table html contenant le nom des utilisateurs et leurs scores, triés par nom d'utilisateur
// - afficher un tableau html contenant le nom des utilisateurs et leur scores moyen d'utilisateur
// - afficher un tableau html contenant les cinq meilleurs scores et le nom de l'utilisateur et la position du score, triés par ordre décroissant,
// indice :
//  - vous pouvez parcourir le tableau avec une boucle for (index, in, of)
//  - pour lire le nom : user.name
//  - pour lire tableau de scores : user.scores


// TABLEAU I

var table1 = document.getElementById('table1');

  // boucle pour remplir les rangs
for (var user of data) {
  console.log(user.name);
  console.log(user.id);
  console.log(user.scores);
  // ça s'affiche bien
  table1.innerHTML += '<tr><td>#'+ user.id +'</td><td>' + user.name + '</td><td>Score : ' + user.scores + '</td></tr>';

};

// TABLEAU 2
var table2 = document.getElementById('table2');
for (var user of data) {
  console.log(user.name);
  console.log(user.id);
  console.log(user.scores);
  // ça s'affiche bien
  table2.innerHTML += '<tr><td>#'+ user.id +'</td><td>' + user.name + '</td><td>Score : ' + user.scores + '</td></tr>';

};
