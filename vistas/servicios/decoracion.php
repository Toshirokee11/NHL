<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led-Servicios</title>
    <?php require_once "../layout/links.php" ?>
</head>

<body>
<?php require_once "../layout/header.php" ?>

    <main class="main__categoria">
        <h1 class="categoria1__titulo ">DECORACIÓN Y REMODELACIÓN</h1>
        <div class="categoria1__section">

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_2" src="/public/imagenes/decoracion/AnyConv.com__CEVICHERIA.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>RÚSTICO MODERNO
                </strong> <p>Espacio adecuado para su uso con iluminación puntual y destacada.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_7" src="/public/imagenes/decoracion/AnyConv.com__SANGUCHERIA.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>EXPRESIVO</strong> <p>Espacio adecuado para su uso con iluminación puntual y destacada.
                </p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_4" src="/public/imagenes/decoracion/AnyConv.com__RESTAURANTE JAPONES.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>ELEGANTE</strong> <p>El minimalismo en espacios elegantes es el ideal.</p></figcaption>
            </figure>


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_3" src="/public/imagenes/decoracion/AnyConv.com__SALON SPA.jpg.webp" alt="Imagen del selvicio">
            </a>
                <figcaption class="categoria1__desc"><strong>CÁLIDO ATRACTIVO</strong> <p>La combinación de texturas crea un espacio dinámico y atractivo.</p></figcaption>
            </figure>
        </div>

        <h2 class="subtitulo">Revisa nuestros diseños exclusivos:</h2>
        <button class="catalogo" id="catalogo">Ver catálogo completo</button>
        <?php require_once "../layout/modal.php" ?>
        <a href="../contacto.php"><button class="cotizar">Cotizar</button></a>
        <div class="galeria">
            <div class="galeria-imagenes">
                <?php
                    if(isset($_COOKIE["user"]))
                    {
                        require_once "../layout/funciones.php";
                        mostrar_imagenes("decoracion");
                    }
                ?>
            </div> 

        </div>
    </main>

    <?php require_once "../layout/foother.php" ?>
    <script defer type="text/javascript" src="/public/js/modal.js"></script>
    <script defer>
    // 360 viewer
    var PSV = new PhotoSphereViewer({
        panorama: '../../public/imagenes/Imagenes 360/BAR/2.webp',
        container: 'photosphere',
        navbar: 'fullscreen',
        default_fov: 65,
        mousewheel: false,
    });
    </script>
    </body>

</html>