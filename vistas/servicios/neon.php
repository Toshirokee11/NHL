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
        <h1 class="categoria1__titulo ">FABRICACIÓN NEON</h1>
        <div class="categoria1__section">


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_2" src="/public/imagenes/neon/AnyConv.com__F. NEON UNO.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>NOVEDOSO</strong> <p>Mezcla la tecnología en iluminación para un impacto visual.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_7" src="/public/imagenes/neon/AnyConv.com__F. NEON DOS.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>ANIMADO</strong> <p>Todo es posible con imaginación y el material indicado.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_4" src="/public/imagenes/neon/AnyConv.com__F. NEON TRES.jpg.webp" alt="Imagen del selvicio"></a>
                <figcaption class="categoria1__desc"><strong>INNOVACIÓN

                </strong> <p>La flexibilidad del material permite variedad de diseños e innovaciones
                    .</p></figcaption>
            </figure>


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_3" src="/public/imagenes/neon/AnyConv.com__F. NEON CUATRO.jpg.webp" alt="Imagen del selvicio">
            </a>
                <figcaption class="categoria1__desc"><strong>CREATIVO</strong> <p>Neón ultima tendencia en iluminación decorativa.</p></figcaption>
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