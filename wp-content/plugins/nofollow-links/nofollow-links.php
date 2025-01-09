<?php
/*
Plugin Name: NoFollow Links
Description: Agrega el atributo nofollow a todos los enlaces salientes.
Version: 1.0
Author: TuNombre
*/

// Agregar la función JavaScript en el pie de página
function add_nofollow_script() {
    // Solo ejecuta si no estás en el área de administración
    if (!is_admin()) {
        // Verificar si jQuery está cargado, de lo contrario, cargarlo de forma síncrona
        if (!wp_script_is('jquery', 'enqueued')) {
            wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, false);
        }
        // Agregar el script JavaScript en el pie de página
        wp_enqueue_script('nofollow-links-script', plugin_dir_url(__FILE__) . 'nofollow-links.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'add_nofollow_script');




// Agregar el script para modificar los enlaces
function nofollow_links_script() {
    // Definir el script JavaScript
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        // Seleccionar todos los enlaces salientes
        $('a').each(function() {
            var href = $(this).attr('href');
            // Verificar si el enlace es externo
            if (href && href.indexOf(window.location.hostname) === -1 && href.indexOf('http') === 0) {
                // Agregar el atributo nofollow
                $(this).attr('rel', 'nofollow');
            }
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'nofollow_links_script');
