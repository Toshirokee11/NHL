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
        <h1 class="categoria1__titulo ">LETREROS LUMINOSOS</h1>
        <div class="categoria1__section">


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_2" src="/public/imagenes/luminosos/AnyConv.com__LETRERO LUMINOSO UNO.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>INNOVADOR, LUMÍNICO Y MODERNO
                </strong> <p>Letrero elaborado para un casino, con letras punteadas y luz LED
                    focalizada para causar mayor impacto.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_7" src="/public/imagenes/luminosos/AnyConv.com__LETRRERO LUMINOSO ODS.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>COLORIDO, PECULIAR, LUMINOSO</strong> <p>Letrero con tiras LED para rellenar y bordear las formas,
                    aportando un realce al lugar. </p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_4" src="/public/imagenes/luminosos/AnyConv.com__LETRERO LUMINOSO TRES.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>CREATIVO Y PINTORESCO
                </strong> <p>Letrero de promociones elaborado en una marquesina
                    transparente con tiras LED para resaltar el producto en oferta.</p></figcaption>
            </figure>


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_3" src="/public/imagenes/luminosos/AnyConv.com__LETRERO LUMINOSO CUATRO.jpg.webp" alt="Imagen del selvicio">
            </a>
                <figcaption class="categoria1__desc"><strong>COSMOPOLITA Y DESTACADO</strong> <p>Letrero con un juego de sombras y profundidad dado por la iluminación LED.</p></figcaption>
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
                        mostrar_imagenes("No hay imagen");
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