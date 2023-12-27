<?php 
define("pagina", "nueva carpeta");
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
        <section id="banner-titulo">
            <h1 class="titulo-principal">Esto es el h1</h1>
        </section>
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
        <?php 
        include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
        ?>
    </body>
</html>