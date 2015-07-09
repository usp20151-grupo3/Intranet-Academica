function validNumber(e) {
var tecla = document.all ? tecla = e.keyCode : tecla = e.which;
return ((tecla > 47 && tecla < 58) || tecla == 13);
}
function validLetter(e){
var tecla = document.all ? tecla = e.keyCode : tecla = e.which;
var especiales = [8, 32, 13];

for (var i in especiales) {
if (tecla == especiales[i]) { return true;}
}
return (((tecla > 96 && tecla < 123) || (tecla > 64 && tecla < 91)) || tecla == 8);
}
