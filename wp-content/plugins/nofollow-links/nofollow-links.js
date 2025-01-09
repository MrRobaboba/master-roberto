jQuery(document).ready(function($) {
    // Seleccionar todos los enlaces
    $('a').each(function() {
        var href = $(this).attr('href');
        // Verificar si el enlace es externo y no contiene el atributo nofollow
        if (href && href.startsWith('https') && !$(this).is('[rel="nofollow"]')) {
            // Agregar el atributo nofollow
            $(this).attr('rel', 'nofollow');
        }
    });
});
