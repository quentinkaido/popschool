// backgroundColor
function fond(X) { myBody.style.backgroundColor = X.value;}

// Boîte de dialogue Bonjour Name
var start = 'Bonjour ', name, end = ' !', result;
name = prompt('Comment tu t\'apelles ?');
result = start + name + end;
alert(result);
