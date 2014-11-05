$( document ).ready(function() {
    /*Evento que se ejecuta cuando ell usuario hace click en 'Guardar' */
    $("#guardar").on('click',  function(event) {
        var errores_textos=0;
        var errores_select=0;
        
        
        $(".textos").each(function(index, val) {
            
            if(longitudcampo(2,11,$(this).val())){
                $(this).addClass('errorform');
                $(this).focus();
                errores_textos++;
                return false;
            }
                
        });

        $(".desplegable").each(function(index, val) {
            if($(this).val()==""){
                $(this).addClass('errorform');                                    
            }
        });

        if (errores_textos!=0) {
            return false;
        }

        
        
    });
    /*Fin del evento 'Guardar' */

    /*Evento que se ejecuta cuando ell usuario hace click en 'Cancelar' */
    $("#cancelar").on('click',  function(event) {
        var href = $(this).attr('href');
        
        location.reload();
        
        event.preventDefault();
        
    });
    /*Fin del evento 'Cancelar' */

    $("select, .textos, file").on('change',  function(event) {
        $(this).removeClass('errorform');
        
    });
}); 

