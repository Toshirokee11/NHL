<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led-Servicios</title>
    <?php require_once "layout/links.php" ?> 
</head>

<body>
<?php require_once "layout/header.php" ?>

    <main class="main__categoria">
        <h1 class="categoria1__titulo ">PANELES LED</h1>
        <div class="categoria1__section">

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_2" src="../public/imagenes/led/AnyConv.com__PANEL LED UNO.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>INNOVACIÓN
                </strong> <p>Paneles LED para ambientes modernos y luminosos.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_7" src="../public/imagenes/led/AnyConv.com__PANEL LED DOS.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>DECORATIVO</strong> <p>La iluminación es uno de los factores decisivos en un ambiente. </p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_4" src="../public/imagenes/led/AnyConv.com__PANEL LED TRES.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>ARTISTICO
                </strong> <p>Paneles LED ideales para ambientar tu espacio.</p></figcaption>
            </figure>


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_3" src="../public/imagenes/led/AnyConv.com__PANEL LED CUATRO.jpg.webp" alt="Imagen del selvicio">
            </a>
                <figcaption class="categoria1__desc"><strong>MODERNO</strong> <p>Luces LED ligeros, extraplanos y gran cantidad de luz.</p></figcaption>
            </figure>

        </div>

        <h2 class="subtitulo">Revisa nuestros diseños exclusivos:</h2>
        <button class="catalogo" id="catalogo">Ver catálogo completo</button>
        <?php require_once "layout/modal.php" ?>
        <a href="contacto.php"><button class="cotizar">Cotizar</button></a>
    </main>

    <?php require_once "layout/foother.php" ?>
    <script defer type="text/javascript" src="../public/js/modal.js"></script>
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