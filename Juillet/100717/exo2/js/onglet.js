function testEchap(e){
var keynum;
if(window.event) // IE
  {
  keynum = e.keyCode;
  }
else if(e.which) // Netscape/Firefox/Opera
  {
  keynum = e.which;
  }
//alert(keynum);
	if (keynum == 27) alert("Echap !");
}
