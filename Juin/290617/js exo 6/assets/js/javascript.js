function ajouter_div(){
var myDiv= document.getElementById("myDiv");
myDiv.appendChild(document.createElement('div'));
}


function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function setRandomColor(element) {
    element.style = "background-color:" + getRandomColor();
}