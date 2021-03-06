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
        <h1 class="categoria1__titulo ">ARQUITECTURA COMERCIAL</h1>
        <div class="categoria1__section">

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_2" src="/public/imagenes/arquitectura/1.webp" alt="Diversión Asegurada"></a>
                <figcaption class="categoria1__desc"><strong>DIVERSIÓN ASEGURADA</strong> <p> Lo importante es la comodidad y el estilo para disfrutar de la noche.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_7" src="/public/imagenes/arquitectura/2.webp" alt="Arte para todos"></a>
                <figcaption class="categoria1__desc"><strong>ARTE PARA TODOS</strong> <p>Lo ideal es salir de lo tradicional con una buena iluminación y una barra personalizada.</p></figcaption>
            </figure>

            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_4" src="/public/imagenes/arquitectura/3.webp" alt="Iluminación puntual"></a>
                <figcaption class="categoria1__desc"><strong>ILUMINACIÓN PUNTUAL</strong> <p> El bar es el área principal y una iluminación led es la adecuada para hacerlo más
                    llamativo.</p></figcaption>
            </figure>


            <figure class="categoria1__imagen">
                <a href="#">
                <img class="categoria1__img" id="imagen_3" src="/public/imagenes/arquitectura/AnyConv.com__BARRA JUGUERIA..webp" alt="Estilo moderno">
            </a>
                <figcaption class="categoria1__desc"><strong>ESTILO MODERNO</strong> <p> Con una buena iluminación cálida se puede obtener un estilo moderno y elegante.</p></figcaption>
            </figure>
        </div>

        <h2 class="subtitulo">Revisa nuestros diseños exclusivos:</h2>
        <button class="catalogo" id="catalogo">Ver catálogo completo</button>
        <?php require_once "../layout/modal.php" ?>
        <a href="../contacto.php?v=<?php echo base64_encode('ARQUITECTURA COMERCIAL')?>"><button class="cotizar">Cotizar</button></a>
        <div class="galeria">
            <div class="galeria-imagenes">
                <?php
                    if(isset($_COOKIE["user"]))
                    {
                        require_once "../layout/funciones.php";
                        mostrar_imagenes("arquitectura");
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