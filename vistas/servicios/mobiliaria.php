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
        <h1 class="categoria1__titulo ">FABRICACIÓN MOBILIARIA</h1>
        <div class="categoria1__section">


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_2" src="/public/imagenes/moviliaria/AnyConv.com__MOBILIARIA UNO.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>SOFISTICADO, LUMINOSO Y LUMINOSO</strong> <p>Mesas de centro, hechas de vidrio con luces Led incorporadas
                    para puntualizar los espacios de fiestas y reuniones sociales.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_7" src="/public/imagenes/moviliaria/AnyConv.com__MOBILIARIO DOS.jpeg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>TÉNUE Y CÓMODO</strong> <p>Mobiliario iluminado sutilmente para resaltar el contraste de este con
                    el piso, ideal para bares y restaurantes con estilo moderno.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_4" src="/public/imagenes/moviliaria/AnyConv.com__MOBILIARIO TRES.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>ESTILO Y MODERNIDAD
                </strong> <p>Mesa craquelada con iluminación LED para bares.</p></figcaption>
            </figure>


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_3" src="/public/imagenes/moviliaria/AnyConv.com__MOBILIARIO CUATRO.jpeg.webp" alt="Imagen del selvicio">
            </a>
                <figcaption class="categoria1__desc"><strong>INNOVADOR Y DECORATIVO</strong> <p> Mesa de acrílico con una base iluminada con luces LED para
                    focalizar puntos específicos en algunos bares.</p></figcaption>
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
                        mostrar_imagenes("mobiliaria");
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