<?php 
define("pagina", "sobre mi");
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
        <section id="banner-titulo">
            <h1 class="titulo-principal">Esto es el h1 de la página Sobre mi</h1>
        </section>
            <div>
                <h2>¿Qué es Lorem Ipsum?</h2>
                <p style="color:blue;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                <h2>¿Por qué lo <span title="explicacion de por que se usa lorem ipsum">usamos?</span></h2>
                <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". 
                    <blockquote cite="url-origen-cita">Esto es una cita en mitad de una párrafo (etiqueta p)</blockquote>
                    Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
            </div>
                <code>
                    Esto es una prueba de código 
                </code>
            <div>
                <table id="tabla-informativa">
                    <tr>
                        <th>Encabezado 1</th>
                        <th>Encabezado 2</th>
                        <th>Encabezado 3</th>
                    </tr>
                    <tr>
                        <td>Dato Fila 1 Columna 1</td>
                        <td>Dato Fila 1 Columna 2</td>
                        <td>Dato Fila 1 Columna 3</td>
                    </tr>
                    <tr>
                        <td>Dato Fila 2 Columna 1</td>
                        <td>Dato Fila 2 Columna 2</td>
                        <td>Dato Fila 2 Columna 3</td>
                    </tr>
                    <tr>
                        <td>Dato Fila 3 Columna 1</td>
                        <td>Dato Fila 3 Columna 2</td>
                        <td>Dato Fila 3 Columna 3</td>
                    </tr>
                    <tr>
                        <td>Dato Fila 4 Columna 1</td>
                        <td>Dato Fila 4 Columna 2</td>
                        <td>Dato Fila 4 Columna 3</td>
                    </tr>
                </table>
            </div>
            <div class="clase1 clase2">
                Esto es un div con dos clases, clase1 y clase2
                <p>
                    Esto es un elemento sin clase ni id
                </p>
                <p class="clase-subelemento">
                    Esto es un elemento con una clase única, clase-subelemento
                </p>
                <p>
                    Esto es un elemento sin clase ni id
                </p>
                <p>
                    Esto es un elemento sin clase ni id
                </p>
                <p class="clase-subelemento-doble">
                    Esto es un elemento con una clase duplicada, clase-subelemento-doble
                </p>
                <p>
                    Esto es un elemento sin clase ni id
                </p>
                <p class="clase-subelemento-doble">
                    Esto es un elemento con una clase duplicada, clase-subelemento-doble
                </p>
                <p>
                    Esto es un elemento sin clase ni id
                </p>
            </div>
        <?php 
        include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
        ?>
    </body>
</html>