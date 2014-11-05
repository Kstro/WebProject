

    /* Inicializa el reloj */
    
	/*$('#year').text(austDay.getFullYear());*/
    /*$('#reloj').countdown({until: liftoffTime});*/

    $(function () {

    	shortly = new Date(); 
    	shortly.setSeconds(shortly.getSeconds() + 5.5); 
	  	
    	$('#reloj').countdown({until: shortly, compact: true, 
    	onExpiry: liftOff, onTick: watchCountdown}); 
	  /*$('#year').text(austDay.getFullYear());*/

	});

    /* Fin del 'Reloj' */

    function liftOff() { 
	    /*alert('We have lift off!');*/ 
	    mensaje_error("El tiempo ha expirado!");
        $('#enviar-test').click();

	}

	function watchCountdown(periods) { 
 	   $('#monitor').text('Just ' + periods[5] + ' minutes and ' + 
       periods[6] + ' seconds to go'); 
	}

    

    




