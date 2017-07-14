
$(document).ready(function(){
  $("#menu_1").click(function(){
    $("#panel").slideToggle("slow");
  });
});


// Fonction executée lors de l'utilisation du clic droit.
$(document).bind("contextmenu",function()
{
// Si vous voulez ajouter un message d'alerte
sweetAlert("Hey tu fais quoi la ?!", "Ne prend pas mon site pd!", "error");
// On indique au navigateur de ne pas réagir en cas de clic droit.
return false;
});

// Empecher le ctrl-u code source
window.onkeydown=function(event){
    var e=event||window.event;
    if(e.keyCode===85 && e.ctrlKey===true){
        e.stopPropagation();
        e.preventDefault();
        e.returnValue = false;
        return false;
    }
}
// swal({
//   title: "Comme tu es un fils de pute :",
//   text: "Je me fermerai dans 100 secondes :).",
//   timer: 100000,
//   showConfirmButton: false
// });
