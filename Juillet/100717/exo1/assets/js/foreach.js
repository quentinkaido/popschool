var makeGreen= function(div) {
  div.style = 'background-color: green;';
}

var resetDiv= function(div) {
  div.style = '';
}

var r2g = function(){
  var divs = Array.from(document.getElementsByClassName('red'));
  divs.forEach(makeGreen);
  }


var b2g = function(){
  var divs = Array.from(document.getElementsByClassName('blue'));
  divs.forEach(makeGreen);
  }


var a2g = function(){
  r2g();
  b2g();
}

var reset = function(){
  var divs = Array.from(document.getElementsByTagName('div'));
  divs.forEach (resetDiv);
  }
