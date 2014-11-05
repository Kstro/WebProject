function mensaje_alerta(cadena){
	
	/* Se inicializan los valores necesarios para el mensaje*/
	
	/*var mensaje = alertify.alert();*/
	alertify.defaults.glossary.title = "Error...";
	alertify.defaults.closable = false;
	alertify.defaults.glossary.ok = "Aceptar";

				
                                
                
	/*mensaje.setting('message', cadena).show();             */
    /*mensaje.alert(cadena);*/
    alertify.alert(cadena);

}

function mensaje_error(cadena){
	
	/* Se inicializan los valores necesarios para el mensaje*/
	
	/*var mensaje = alertify.alert();*/
	alertify.defaults.notifier.position = "top-right";

				
                                
                
	/*mensaje.setting('message', cadena).show();             */
    /*mensaje.alert(cadena);*/
    alertify.error(cadena);

}

function mensaje_warning(cadena){
	
	/* Se inicializan los valores necesarios para el mensaje*/
	
	/*var mensaje = alertify.alert();*/
	alertify.defaults.notifier.position = "top-right";

				
                                
                
	/*mensaje.setting('message', cadena).show();             */
    /*mensaje.alert(cadena);*/
    alertify.warning(cadena);

}

function mensaje_confirmacion(cadena){
	
	/* Se inicializan los valores necesarios para el mensaje*/
	
	/*var mensaje = alertify.alert();*/
/*	alertify.defaults.notifier.position = "top-right";*/

				
                                
                
	/*mensaje.setting('message', cadena).show();             */
    /*mensaje.alert(cadena);*/

    alertify.confirm("Pregunta...",cadena).set('oncancel', function(){ 
    	return false;
    }); 

    /*alertify.confirm(cadena);*/

}