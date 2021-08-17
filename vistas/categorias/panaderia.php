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
        <h2 class="categoria1__titulo ">PANADERÍA Y PASTELERÍA</h2>

        <?php require_once "../layout/modal.php" ?>

        <div id="slider">
            <figure>
                <img loading="lazy" src="../../public/imagenes/Slider/PANADERIA Y PASTELERIA/1.webp" alt="">
                <img loading="lazy" src="../../public/imagenes/Slider/PANADERIA Y PASTELERIA/2.webp" alt="">
                <img loading="lazy" src="../../public/imagenes/Slider/PANADERIA Y PASTELERIA/3.webp" alt="">
                <img loading="lazy" src="../../public/imagenes/Slider/PANADERIA Y PASTELERIA/4.webp" alt="">
            </figure>
        </div>

        <br>

        <h2 class="subtitulo">Revisa nuestros diseños exclusivos:</h2>
        <button class="catalogo" id="catalogo">Ver catálogo completo</button>

        <a href="contacto.php"><button class="cotizar">Cotizar</button></a>

        <div id="form_1" class="overlay__formulario">
            <a href="#" id="x_1" class="overlay__x x">X</a>
            <form class="overlay__form" id="restaurante">
                <div class="empresa">
                    <label class="overlay__label" for="empresa">Nombre o Empresa:
                    </label>

                    <input class="overlay__input e" type="text" id="empresa" pattern="[a-zA-Z ]{2,254}"
                        title="Solo debe contener letras. e.g. Company" required>
                </div>
                <div class="correo">
                    <label for="email" class="overlay__label cor">Correo:</label>
                    <input id="email" class="overlay__input c" type="email"
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com" required>

                </div>
                <div class="telefono">
                    <label for="tel" class="overlay__label te">Celular:</label>
                    <input type="text" id="tel" class="overlay__input t" pattern="[0-9]{9}" title="debe conter numeros"
                        required>
                </div>
                <input type="hidden" id="nomcategory" class="hiden" value="panaderia">
                <input type="hidden" id="url" class="hiden" value="https://www.flipsnack.com/7DE97999E8C/panader-a-y-pasteler-a-catalogo-con-textos.html">
                <input type="submit" class="overlay__submit" value="Obtener mi catálogo de categoría panadería ">

            </form>

        </div>


    </main>

<?php require_once "../layout/foother.php" ?>

<script defer type="text/javascript" src="../../public/js/modal.js"></script>
<script defer>
    // 360 viewer
    var PSV = new PhotoSphereViewer({
        panorama: '../../public/imagenes/Imagenes 360/PANADERIA Y PASTELERIA/1.webp',
        container: 'photosphere',
        navbar: 'fullscreen',
        default_fov: 65,
        mousewheel: false,
    });
</script>


</body>

</html>