$( document ).ready(function() {
    
    /*Evento que se ejecuta cuando ell usuario hace click en 'Nuevo instituciones' */

    
    $('.menu a').on('click', function(event) {
        
        var href = $(this).attr('href');
        $('.contenido').load(href);
        event.preventDefault();

        
    });

    /*Fin del evento 'Nuevo instituciones' */

    /*Evento que se ejecuta cuando el usuario hace click en 'Nuevo instituciones' */
    $('#nuevo-listado').on('click', function(event) {
        var href = $(this).attr('href');    
        $('.contenido').load(href);
        event.preventDefault();
    });
    /*Fin del evento 'Nuevo instituciones' */

    /*Evento que se ejecuta cuando ell usuario hace click en 'modificar instituciones' */
    /*$('#modificar').on('click', function(event) {
        var chequeados=0;
        var id=$(this).attr('id');
        var href = $(this).attr('href');   
        $('.seleccion-ins, .seleccion-test').removeClass('errorform');
        $(".seleccion-ins, .seleccion-test").each(function(index, val) {

            if($(this).is(':checked')){
                chequeados++;
            } 
            else{
                $(this).addClass('errorform');
            }
            if(chequeados==1){
                $('.comparacion').removeClass('errorform');
            }
            else {
                if (chequeados!=0) {
                    $(this).addClass('errorform');
                }
                else{
                    $(this).removeClass('errorform');
                }
            }
        });
        
        if (chequeados==0) {
            if(id=="modificar"){
                mensaje_error("Debe escoger una institución");
                return false;    
            }
            else{
                mensaje_error("Debe escoger un test");
                return false;       
            }
            
        }
*/
        /*else{
            
            $('.contenido').load(href);
            return false;
        }*/

        
    /*});*/
    /*Fin del evento 'Modificar instituciones' */


    $('#modificar, #escoger-test').on('click', function(event) {

        var num = 0;        
        var id=$(this).attr('id');
        $('.seleccion-ins, .seleccion-test').removeClass('errorform');
        $('.seleccion-ins, .seleccion-test').each( function(index, val) {
            if($(this).is(':checked')){
                num++;                
            }
            else{
                $(this).addClass('errorform');
            }
            if(num==1){
                $('.seleccion-ins, .seleccion-test').removeClass('errorform');
            }
        });
        if(num<1){
            if (id=="modificar") {
                mensaje_error("Debe seleciconar una institución");
            }
            else{
                mensaje_error("Debe seleciconar un test");
            }
            return false;
        }    
        if (id=="modificar") {
            var href = $(this).attr('href');
            $('.contenido').load(href);
            return false;
        }

    });

    $('.seleccion-ins, .seleccion-test').click(function(){ 
        // alert("Comparacion");
        var num = 0;
        // .is(':checked')
        $('.seleccion-ins, .seleccion-test').removeClass('errorform');
        $('.seleccion-ins, .seleccion-test').each( function(index, val) {
            if($(this).is(':checked')){
                num++;                                  
            }
        });
        if(num>=2){
                    $(this).prop('checked', false);
                    var clase = $(this).attr('class');
                    if (clase == "seleccion-test"){
                        mensaje_warning("Solo puede seleccionar un test");
                    }
                    else{
                        mensaje_warning("Solo puede seleccionar una institución");   
                    }
                    return false;
        }
                
        // alert(num);
    });
        

    $("#limpiar").on('click', function(event) {
        
        $(".dataTables_filter>label>input").val("");// deja el cmapo de busqueda en blanco
        $(".dataTables_filter>label>input").keyup();// dispara la acción de buscar todos los elemtentos
        event.preventDefault();
        /* Act on the event */
    });
    

    /*var table = */
    $('.tabla-registros').DataTable({ 
    
    });//Muestra los registros en una tabla con paginación
    /*table.page.len(1).draw();*/
    //Muestra los registros en una tabla con paginación
    $('.tabla-test').DataTable({
        "ordering":false,
        "searching": false,
        "lengthChange": false,
        "processing": true,
        "autoWidth": true,
    });

     $(".header-tabla-forms").sticky({ topSpacing: 0,
        getWidthFrom: '.tabla-forms',
        responsiveWidth: true
    });
}); 


