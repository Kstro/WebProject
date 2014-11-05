$( document ).ready(function() {
    /*Evento que se ejecuta cuando el usuario hace click en 'Acceder' */
    
    $('.menu a').on('click', function(event) {
        
        var href = $(this).attr('href');
        $('.contenido').html("<div id='cargando'><img src='../imagenes/loading.gif'><div>");
        /*$('.contenido').load(href);
        event.preventDefault();*/

        
    });
    /*Fin del evento 'Acceder' */

    


}); 


