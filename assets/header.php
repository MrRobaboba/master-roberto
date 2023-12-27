<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <link href="/css/fonts.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/estilo.css">
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
        ?>
        <title>Mi proyecto</title>
        <?php
        switch (constant("pagina")){
            case 'inicio':
                break;
            case 'contacto':
                echo '<link rel="stylesheet" type="text/css" href="/css/contacto.css">';
                break;
            case 'sobre mi':
            case 'nueva carpeta':
                echo '<link rel="stylesheet" type="text/css" href="/css/otro-archivo.css">';
                break;
            default:
                echo '<!-- No pondré css en este caso del Switch Case -->';
                break;
        }
        ?>
        <style>
            h1 {
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                margin:auto;
            }
            details {
                margin:10px;
            }
            summary {
                padding: 5px;
            }
            details > p {
                color: lightcoral;
                margin: 10px 30px;
            }
            #css-display div{
                font-size: small;
            }
            #css-display p{
                font-size: large;
                text-align:center;
                font-weight: 500;
                font-style: oblique;
                font-family: monospace;
                margin: 50px 0 20px;
                padding: 20px;
                border-top: 1px double lightgray;
            }
        </style>
    </head>
    <body id="home">
        <!--Esto es un comentario-->
        <header>
            <nav id="menu-desktop">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/sobre-mi">Sobre Mi</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <li><a href="/landing">Landing</a></li>
                    <li><a href="/carpeta/archivo-carpeta">Archivo de carpeta</a></li>
                    <li><a href="/redirect">Redirect</a></li>
                    <li><a href="https://www.google.es/" target="_blank">Google</a></li>
                </ul>
            </nav>
            <nav id="menu-mobile">
                <details>
                    <summary>Menú Mobile</summary>
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/sobre-mi">Sobre Mi</a></li>
                        <li><a href="/contacto">Contacto</a></li>
                        <li><a href="/landing">Landing</a></li>
                        <li><a href="/carpeta/archivo-carpeta">Archivo de carpeta</a></li>
                        <li><a href="/redirect">Redirect</a></li>
                        <li><a href="https://www.google.es/" target="_blank">Google</a></li>
                    </ul>
                </details>
            </nav>
        </header>