<?php
    function functiontest1(){
        echo 'Esto es una prueba de la función functiontest1()';
    }
    function ctas(){
        // Si son variables hay que definirlas dentro de la función, si las definimos en otro archivo como las constantes no funciona correctamente
        $linkcta4 = $_SERVER['DOCUMENT_ROOT'].'/contacto.php';
        $linkcta5 = $_SERVER['DOCUMENT_ROOT'].'/contacto.php';
        $linkcta6 = $_SERVER['DOCUMENT_ROOT'].'/contacto.php';
        echo   '<div>
                <div><a href="'. linkcta1 . '">CTA1 ' . "linkcta1" . '</a></div>
                <div><a href="'. linkcta2 . '">CTA2 ' . 'linkcta2' . '</a></div>
                <div><a href="'. linkcta3 . '">CTA3 ' . linkcta3 . '</a></div>
                <div><a href="'. $linkcta4 . '">CTA4 ' . "$linkcta4" . '</a></div>
                <div><a href="'. $linkcta5 . '">CTA5 ' . '$linkcta5' . '</a></div>
                <div><a href="'. $linkcta6 . '">CTA6 ' . $linkcta6 . '</a></div>
                ';
        /*
        Resultado visible en la web:
        Anchor: CTA1 linkcta1
                            href: file:///C:/Users/anton/Documents/github/ejemplo/index.php
        Anchor: CTA2 linkcta2
                            href: file:///C:/Users/anton/Documents/github/ejemplo/index.php
        Anchor: CTA3 C:/Users/anton/Documents/github/ejemplo/index.php
                            href: file:///C:/Users/anton/Documents/github/ejemplo/index.php
        Anchor: CTA4 C:/Users/anton/Documents/github/ejemplo/contacto.php
                            href: file:///C:/Users/anton/Documents/github/ejemplo/contacto.php
        Anchor: CTA5 $linkcta5
                            href: file:///C:/Users/anton/Documents/github/ejemplo/contacto.php
        Anchor: CTA6 C:/Users/anton/Documents/github/ejemplo/contacto.php
                            href: file:///C:/Users/anton/Documents/github/ejemplo/contacto.php

        El ejercicio me ha servido, además, para comprobar las llamadas a las constantes y a las variables
        */
    }
?>