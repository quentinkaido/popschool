// $(document).ready(function(){
//   $("#menu_1").click(function(){
//     $("#panel").slideToggle("slow");
//   });
// });

// $('#menu_1').click(function() {
//    $('#panel').slideToggle('slow');
//    return false;
// });


// Fonction executée lors de l'utilisation du clic droit.
$(document).bind("contextmenu",function()
{
// Si vous voulez ajouter un message d'alerte
alert('Merci de respecter le travail du webmaster en ne copiant pas le contenu sans autorisation');
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
