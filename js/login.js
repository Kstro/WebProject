/*
 * HTML5 Placeholder Text jQuery Fallback with Modernizr
 *
 * @url     http://uniquemethod.com/
 * @author  Unique Method
 */

$( document ).ready(function() {
    /*Evento que se ejecuta cuando ell usuario hace click en 'Acceder' */
    $("#inputuser").focus();
    $("#acceder").on('click',  function(event) {
        /*event.preventDefault();*/
        /* Act on the event */
        if (loginusuario($("#inputuser").val()) || loginusuario($("#inputpass").val())) {

            
            
            mensaje_alerta("Complete todos los campos!.");
            return false;/* Esto hace que el formulario no haga el submit */    
        }
        
    });
    /*Fin del evento 'Acceder' */
}); 

/*

$(function()
{
    // check placeholder browser support

    if (!Modernizr.input.placeholder)
    {
 
        // set placeholder values
        $(this).find('[placeholder]').each(function()
        {
            if ($(this).val() == '') // if field is empty
            {
                $(this).val( $(this).attr('placeholder') );
            }
        });
 
        // focus and blur of placeholders
        $('[placeholder]').focus(function()
        {
            if ($(this).val() == $(this).attr('placeholder'))
            {
                $(this).val('');
                $(this).removeClass('placeholder');
            }
        }).blur(function()
        {
            if ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))
            {
                $(this).val($(this).attr('placeholder'));
                $(this).addClass('placeholder');
            }
        });
 
        // remove placeholders on submit
        $('[placeholder]').closest('form').submit(function()
        {
            $(this).find('[placeholder]').each(function()
            {
                if ($(this).val() == $(this).attr('placeholder'))
                {
                    $(this).val('');
                }
            })
        });
 
    }
});*/