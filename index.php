<?php 
define("pagina", "inicio");
// Constanstes funciones
define("linkcta1",$_SERVER['DOCUMENT_ROOT'].'/index.php');
define("linkcta2",$_SERVER['DOCUMENT_ROOT'].'/index.php');
define("linkcta3",$_SERVER['DOCUMENT_ROOT'].'/index.php');
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
        <section id="banner-titulo">
            <h1 class="titulo-principal"><?php echo "Test php clase 1, Esto es el h1" ?></h1>
            <p>Hoy estamos a: 
                <?php
                 echo date("d/m/Y") ;
                ?>
                . Si el máster termina el 31 de Julio de 2024, nos quedan sólo 
                <b><?php
                # Defino horario local
                date_default_timezone_set("Europe/Madrid");
                // Guardo la fecha actual y la fecha de finalización del máster en nuevas variables de tipo DateTime
                $fecha_fin = new DateTime("2024-03-31");
                $fecha_hoy = new DateTime("today");
                # Hago la resta de las dos fechas con la función diff
                $dif = $fecha_fin->diff($fecha_hoy);
                // Salida del número de días totales acompañado de texto
                echo $dif->days . ' días</b>.';
                /*
                En este ejemplo hemos usado:
                - Varibales de tipo DateTime
                - Diferencia entre fechas
                También nos sirve para el ejercicio de la clase 3 de php Sintaxis
                */
                # Ejemplo condicionales php, divimos los días entre 30 y dependiendo del resultado muestra un contenido u otro (no es la forma más útil desde luego)
                $text1 ="Quedan ";
                $text2 = " meses de máster";
                $meses = intval($dif->days/30);
                if ($meses >= 8){
                    echo '<p>Quedan más de 8 meses para terminar</p>';
                }
                elseif ($meses >= 7 && $meses < 8){
                    echo '<p>' . $text1 . $meses . $text2 . '</p>';
                }
                elseif ($meses >= 6 && $meses < 7){
                    echo '<p>' . $text1 . $meses . $text2 . '</p>';
                }
                elseif ($meses >= 5 && $meses < 6){
                    echo '<p>' . $text1 . $meses . $text2 . '</p>';
                }
                elseif ($meses >= 4 && $meses < 5){
                    echo '<p>' . $text1 . $meses . $text2 . '</p>';
                }
                elseif ($meses >= 3 && $meses < 4){
                    echo '<p>' . $text1 . $meses . $text2 . '</p>';
                }
                elseif ($meses >= 2 && $meses < 3){
                    echo '<p>' . $text1 . $meses . $text2 . '</p>';
                }
                elseif ($meses >= 1 && $meses < 2){
                    echo '<p>' . $text1 . $meses . $text2 . '</p>';
                }
                elseif ($meses >= 0 && $meses < 1){
                    echo '<p>Sólo queda este mes para terminar</p>';
                }
                else{
                    echo '<p>El máster ya ha terminado</p>';
                }
                ?>
            </p>
            <div style="text-align: center;">
                <?php
                // Test Constante
                    define("testConstante", "Esto es una constante");
                    echo testConstante;
                ?>
            </div>
        </section>
        <section>
            <div>
                <?php
                // Test Función functiontest1() y ctas()
                    functiontest1();
                    ctas();
                ?>
            </div>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/tablasql.php'; ?>
            </div>
        </section>
        <section>
            <img src="\imagenes\carlos-seo.webp" alt="carlos sanchez seo tecnico" width="600" height="465" title="foto de carlos sanchez donate">
            <div title="ejemplo title como atributo" class="titulo-pregunta">Esto es un div</div>
            <p>Esto es un párrafo</p>
        </section>
        <section id="preguntas-frecuentes" style="padding:2em;background-color:blanchedalmond;margin:auto;width: 50%;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-weight: 600;">
            <h2 id="titulo2" class="titulo-secundario">Esto es el h2</h2>
            <details>
                <summary class="titulo-pregunta">Esta es la primera pregunta</summary>
                <p>Esta es la respuesta de la primera pregunta</p>
            </details>
            <details>
                <summary class="titulo-pregunta">Esta es la segunda pregunta</summary>
                <p>Esta es la respuesta de la segunda pregunta</p>
            </details>
            <details>
                <summary class="titulo-pregunta">Esta es la tercera pregunta</summary>
                <p>Esta es la respuesta de la tercera pregunta</p>
            </details>
        </section>
        <section id="multimedia">
            <div>
            <picture>
                <source type="image/avif" srcset="\imagenes\cheatsheet.avif">
                <img src="\imagenes\cheatsheet.png" loading="lazy" alt="etiquetas HTML 5" width="600" height="465" title="infografia etiquetas html 5">
            </picture>
            </div>
            <div>
            <video width="320" height="240" controls muted preload="auto" poster="\imagenes\poster-video.webp">
                <source src="\video\movie.mp4" type="video/mp4">
                <!--<source src="movie.ogg" type="video/ogg">-->
              Your browser does not support the video tag.
              </video>
            </div>
        </section>
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
        <section id="css-position">
            <div style="position:absolute;bottom:0;right:50px;margin:10px;width:100px;height:100px;background-color:blue;">
                Div con CSS inline -> position:absolute, bottom:0, rigth:50
            </div>
            <div style="position:fixed;bottom:0;right:150px;margin:10px;width:100px;height:100px;background-color:rgb(28, 28, 255);">
                Div con CSS inline -> position:fixed, bottom:0, rigth:150
            </div>
            <div style="position:relative;bottom:250px;left:250px;margin:10px;margin:10px;width:100px;height:100px;background-color:rgb(67, 67, 255);">
                Div con CSS inline -> position:relative, bottom:250, left:250
            </div>
            <div style="position:static;margin:10px;margin:10px;width:100px;height:100px;background-color:rgb(123, 123, 255);">
                Div con CSS inline -> position:static
            </div>
            <div style="position:sticky;bottom:100px;float:right;margin:10px;width:100px;height:100px;background-color:rgb(213, 213, 255);">
                Div con CSS inline -> position:sticky, bottom:100, float:right
            </div>
        </section>
        <section id="css-display">
            <p>El siguiente div tiene display flex, justify-content center y align-items center</p>
            <div style="display: flex;justify-content: center;align-items: center;margin:20px 100px;">
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(99, 255, 99);"></div>
                <div style="margin:10px;width:150px;height:100px;background-color:rgb(169, 255, 169);"></div>
                <div style="margin:10px;width:200px;height:100px;background-color:orange;"></div>
                <div style="margin:10px;width:100px;height:200px;background-color:rgb(255, 182, 46);"></div>
                <div style="margin:10px;width:100px;height:150px;background-color:rgb(255, 207, 118);"></div>
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(255, 231, 187);"></div>
            </div>
            <p>El siguiente div tiene display flex, flex-flow: row wrap, align-items flex-start y justify-content space-between</p>
            <div style="display: flex;flex-flow: row wrap;align-items: flex-start;justify-content: space-between;">
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(99, 255, 99);"></div>
                <div style="margin:10px;width:150px;height:100px;background-color:rgb(169, 255, 169);"></div>
                <div style="margin:10px;width:200px;height:100px;background-color:orange;"></div>
                <div style="margin:10px;width:100px;height:200px;background-color:rgb(255, 182, 46);"></div>
                <div style="margin:10px;width:100px;height:150px;background-color:rgb(255, 207, 118);"></div>
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(255, 231, 187);"></div>
            </div>
            <p>El siguiente div tiene display flow-root</p>
            <div style="display:flow-root;">
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(99, 255, 99);"></div>
                <div style="margin:10px;width:150px;height:100px;background-color:rgb(169, 255, 169);"></div>
                <div style="margin:10px;width:200px;height:100px;background-color:orange;"></div>
                <div style="margin:10px;width:100px;height:200px;background-color:rgb(255, 182, 46);"></div>
                <div style="margin:10px;width:100px;height:150px;background-color:rgb(255, 207, 118);"></div>
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(255, 231, 187);"></div>
            </div>
            <p>El siguiente div tiene display grid, justify-items: center; justify-content: start;</p>
            <div style="display:grid;justify-items: center; justify-content: start;">
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(99, 255, 99);"></div>
                <div style="margin:10px;width:150px;height:100px;background-color:rgb(169, 255, 169);"></div>
                <div style="margin:10px;width:200px;height:100px;background-color:orange;"></div>
                <div style="margin:10px;width:100px;height:200px;background-color:rgb(255, 182, 46);"></div>
                <div style="margin:10px;width:100px;height:150px;background-color:rgb(255, 207, 118);"></div>
                <div style="margin:10px;width:100px;height:100px;background-color:rgb(255, 231, 187);"></div>
            </div>
            <p>El siguiente div tiene display inline y algunos de los div también</p>
            <div style="display:inline;clear: both;">
                <div style="display:inline;margin:10px;width:100px;height:100px;background-color:rgb(99, 255, 99);">Lorem Ipsum1</div>
                <div style="margin:10px;width:150px;height:100px;background-color:rgb(169, 255, 169);"></div>
                <div style="display:inline;margin:10px;width:200px;height:100px;background-color:orange;">Lorem Ipsum3</div>
                <div style="display:inline;margin:10px;width:100px;height:200px;background-color:rgb(255, 182, 46);">Lorem Ipsum4</div>
                <div style="margin:10px;width:100px;height:150px;background-color:rgb(255, 207, 118);"></div>
                <div style="display:inline;margin:10px;width:100px;height:100px;background-color:rgb(255, 231, 187);">Lorem Ipsum6</div>
            </div>
            <p>El siguiente div tiene display block y algunos de los div también y uno display none</p>
            <div style="display:inline-block;clear: both;">
                <div style="display:inline-block;margin:10px;width:100px;height:100px;background-color:rgb(99, 255, 99);">Lorem Ipsum1</div>
                <div style="display:none;margin:10px;width:150px;height:100px;background-color:rgb(169, 255, 169);"></div>
                <div style="display:inline-block;margin:10px;width:200px;height:100px;background-color:orange;">Lorem Ipsum3</div>
                <div style="display:inline-block;margin:10px;width:100px;height:200px;background-color:rgb(255, 182, 46);">Lorem Ipsum4</div>
                <div style="margin:10px;width:100px;height:150px;background-color:rgb(255, 207, 118);"></div>
                <div style="display:inline-block;margin:10px;width:100px;height:100px;background-color:rgb(255, 231, 187);">Lorem Ipsum6</div>
            </div>
            <p>El siguiente div tiene display block y algunos de los div también y uno visibility hidden y otro opacity 0</p>
            <div style="display:inline-block;clear: both;">
                <div style="display:inline-block;margin:10px;width:100px;height:100px;background-color:rgb(99, 255, 99);">Lorem Ipsum1</div>
                <div style="display:inline-block;margin:10px;width:150px;height:100px;background-color:rgb(169, 255, 169);"></div>
                <div style="visibility:hidden;margin:10px;width:200px;height:100px;background-color:orange;">Lorem Ipsum3</div>
                <div style="display:inline-block;opacity: 0;margin:10px;width:100px;height:200px;background-color:rgb(255, 182, 46);">Lorem Ipsum4</div>
                <div style="margin:10px;width:100px;height:150px;background-color:rgb(255, 207, 118);"></div>
                <div style="display:inline-block;margin:10px;width:100px;height:100px;background-color:rgb(255, 231, 187);">Lorem Ipsum6</div>
            </div>
        </section>
        <?php 
        include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
        ?>
        <?php 
        include $_SERVER['DOCUMENT_ROOT'].'/assets/css-footer-home.php';
        ?>
    </body>
</html>