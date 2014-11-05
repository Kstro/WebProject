function letrasnum(inputtxt){
	var text = /^\s*([0-9a-zA-Z]*)\s*$/;
	if(inputtxt.match(text)){
	return true;
	}
	else{
	return false;
	}
}

function letrasnum_espacio(inputtxt){
	var text = /^\s*([0-9a-zA-Z áéíóúÁÉÍÓÚ]*)\s*$/;
	if(inputtxt.match(text)){
	return true;
	}
	else{
	return false;
	}
}

function numeros(inputtxt){
	var text = /^\s*([0-9]*)\s*$/;
	if(inputtxt.match(text)){
	return true;
	}
	else{
	return false;
	}
}

function loginusuario(inputtxt){
	/*var text = /^\s*([0-9a-zA-Z._]*)\s*$/;*/
	/*if(inputtxt.match(text)){
	return true;
	}
	else{
	return false;
	}*/
	if (inputtxt.length==0) {
		return true;/*el */
	}
	else
	{
		return false;

	}

}


function longitudcampo(minima, maxima, campo){
	
	if (campo.length==0){
		return false;
	}
	if (campo.length < minima) {
		mensaje_error("Longitud mínima del campo: "+minima);
		return true;
	}
	else{
			if(campo.length > maxima){
			mensaje_error("Longitud máxima del campo: "+maxima);
			return true;
		}	
	}
	
}





//Verifica si la contraseña tiene un numero, una mayuscula y una minuscula
function CheckPassword(inputtxt){
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
if(inputtxt.match(passw)){
return true;
}
else{
return false;
}
}
function verificarREG(opc){
var existe_reg=0;
var reg = [];
var id_reg = [];
var reg_aux = 0;
if(opc==1){
$('select').each( function(index, val) {
reg.push($(this).val());
id_reg.push($(this).attr('id'));
});
$('select').removeClass('errorform');
}
else{
$('.placas .desplegable').each( function(index, val) {
reg.push($(this).val());
id_reg.push($(this).attr('id'));
});
// mensaje_info(rol);
$('.placas .desplegable').removeClass('errorform');
}
// mensaje_info(os);
for (var j = 0; j < reg.length; j++) {
existe_reg=0;
reg_aux=reg[j];
for (var i = 0; i < reg.length; i++) {
if(reg_aux==reg[i]){
// alert("Ya existe el reg");
if(existe_reg!=0){
$('#'+id_reg[i]).addClass('errorform');
}
existe_reg++;
}
}
}
if (existe_reg>1){
return false;
}
else{
return true;
}
}