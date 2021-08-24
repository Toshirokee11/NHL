<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led</title>
    <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
    <meta name="description" content="Empresa dedicada al diseño de interiores y remodelación de locales comerciales u hogares, contando con los mejores materiales de decoración  y comunicación."/>
    <meta name="keywords" content="Diseño, Remodelación, Decoracion">    
    
    <!--<link rel="stylesheet" href="public/css/shared/footer.css">-->
    <link rel="preload" href="public/css/shared/header.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/shared/categoria_index.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/shared/auspicio.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/shared/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
</head>


<body>

<?php require_once "vistas/layout/header.php" ?>

<section class="hero-container">
        <article id="slider">
            <div id="carouselExampleControls" class="carousel_slide" data-ride="carousel">
                
            </div>
        </article>
        <div class="title-hero-container">
            <p>Diseñando y <br> creando espacios ideales</p>
        </div>
    </section>

    <section class="about-us">
        <h2 class="about-us-title">¿Quiénes somos?</h2>
        <div class="about-us-content">
            <figure class="video-container">
                <a href="https://www.youtube.com/watch?v=NnkbMaaskLY&ab_channel=NEONHOUSELED" rel="noreferrer" target="_blank">
                    <img src="public/imagenes/index/video_index.webp" alt="video">
                </a>
            </figure>
            <div class="description-container">
                <p>Somos Neon House Led empresa dedicada a la decoración y diseño de interiores así como la fabricación,
                    importación y distribución de letreros y anuncios publicitarios. Por ello, contamos con un equipo de
                    profesionales expertos que van a satisfacer la más grande expectativa de comunicación visual y de
                    proyección de imagen que requieren nuestros clientes a nivel nacional e internacional, desarrollando
                    sus ideas, y haciéndolas realidad con la mejor tecnología y creatividad para su satisfacción.</p>
            </div>
        </div>
    </section>

    <section class="quote">
        <h2 class="quote-title">Creamos los mejores espacios en todos los rubros</h2>
        <a href="vistas/contacto.php" class="quote-link">Cotiza aquí</a>
    </section>

    <section class="services">
        <h2 class="services-title">Servicios</h2>
        <div class="services-items-container">
            <div class="services-item">
                <a href="vistas\arquitectura.php"><figure class="img-item-container">
                    <img src="public/imagenes/index/arquitectura comercial.webp" alt="Alquitectura comercial">
                </figure></a>
                <h3>Arquitectura comercial</h3>
            </div>
            <div class="services-item">
                <a href="vistas\mobiliaria.php"><figure class="img-item-container">
                    <img src="public/imagenes/index/fabricacion mobiliaria.webp" alt="Fabricación mobiliaria">
                </figure></a>
                <h3>Fabricación mobiliaria</h3>
            </div>
            <div class="services-item">
                <a href="vistas\decoracion.php"><figure class="img-item-container">
                    <img src="public/imagenes/index/decoracion y remodelacion.webp" alt="Decoración y remodelación">
                </figure></a>
                <h3>Decoración y remodelación</h3>
            </div>
            <div class="services-item">
                <a href="vistas\neon.php"><figure class="img-item-container">
                    <img src="public/imagenes/index/fabricacion neon.webp" alt="Fabricación neon">
                </figure></a>
                <h3>Fabricación neón</h3>
            </div>
            <div class="services-item">
                <a href="vistas\luminosos.php"><figure class="img-item-container">
                    <img src="public/imagenes/index/letreros luminosos.webp" alt="Letreros luminosos">
                </figure></a>
                <h3>Letreros luminosos</h3>
            </div>
            <div class="services-item">
                <a href="vistas\led.php"><figure class="img-item-container">
                    <img src="public/imagenes/index/paneles led.webp" alt="Paneles led">
                </figure></a>
                <h3>Paneles LED</h3>
            </div>



        </div>
    </section>

    <!-- -------------------------------------------------------------- -->

    <!-- Espacio para Edward -->
    <div class="categoria">
        <h2 class="categoria__titulo titulo">CATEGORÍAS</h2>
        <div class="categoria__section">
            <figure class="categoria__imagen">
                <a href="vistas\categorias\cevicheria.php"><img class="categoria__img lazyload" id="imagen_1" data-src="public/imagenes/cevicheria_c.webp" alt="Cevicheria"></a>
                <figcaption class="categoria__desc">CEVICHERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\sangucheria.php"><img class="categoria__img lazyload" id="imagen_2" data-src="public/imagenes/sangucheria_c.webp" alt="Sangucheria"></a>
                <figcaption class="categoria__desc">SANGUCHERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\discoteca.php"><img class="categoria__img lazyload" id="imagen_3" data-src="public/imagenes/discoteca_c.webp" alt="Discoteca"></a>
                <figcaption class="categoria__desc">DISCOTECA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\polleria.php"><img class="categoria__img lazyload" id="imagen_4" data-src="public/imagenes/polleria_c.webp" alt="Pollería"></a>
                <figcaption class="categoria__desc">POLLERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\restaurante.php"><img class="categoria__img lazyload" id="imagen_5" data-src="public/imagenes/restaurante_c.webp" alt="Restaurante"></a>
                <figcaption class="categoria__desc">RESTAURANTE</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\bar.php"><img class="categoria__img lazyload" id="imagen_6" data-src="public/imagenes/bar_c.webp" alt="Bar"></a>
                <figcaption class="categoria__desc">BAR</figcaption>
            </figure>



            <figure class="categoria__imagen">
                <a href="vistas\categorias\fast__food.php"><img class="categoria__img lazyload" id="imagen_7" data-src="public/imagenes/Fast Food_c.webp" alt="Fast Food"></a>
                <figcaption class="categoria__desc">FAST FOOD</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\spa.php"><img class="categoria__img lazyload" id="imagen_8" data-src="public/imagenes/salon y spa.webp" alt="Salón SPA y barbería"></a>
                <figcaption class="categoria__desc">SALON SPA Y BARBERÍA</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\hogar.php"><img class="categoria__img lazyload" id="imagen_9" data-src="public/imagenes/hogar_c.webp " alt="Hogar"></a>
                <figcaption class="categoria__desc">HOGAR</figcaption>
            </figure>

            <figure class="categoria__imagen">
                <a href="vistas\categorias\pizzeria.php"><img class="categoria__img lazyload" id="imagen_10" data-src="public/imagenes/pizzeria_c.webp" alt="Pizzeria"></a>
                <figcaption class="categoria__desc">PIZZERIA</figcaption>
            </figure>


            <figure class="categoria__imagen">
                <a href="vistas\categorias\panaderia.php"><img class="categoria__img lazyload" id="imagen__11" data-src="public/imagenes/panaderia y pasteleria_c.webp" alt="Panadería y pastelería"></a>
                <figcaption class="categoria__desc">PANADERIA Y PASTELERIA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\cafeteria.php"><img class="categoria__img lazyload" id="imagen__12" data-src="public/imagenes/cafeteria y jugueria_c.webp" alt="Cafetería y juguería"></a>
                <figcaption class="categoria__desc">CAFETERIA Y JUGUERIA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\minimarket.php"><img class="categoria__img lazyload" id="imagen__13" data-src="public/imagenes/minimarket.webp" alt="Minimarket"></a>
                <figcaption class="categoria__desc">MINIMARKET</figcaption>
            </figure>
         
         
            <!--Nuevas categorias-->
            
            <figure class="categoria__imagen">
                <a href="vistas\categorias\dental.php"><img class="categoria__img lazyload" id="imagen__14" data-src="public/imagenes/categoria/dental.webp" alt="Clínica dental"></a>
                <figcaption class="categoria__desc">CLINICA DENTAL</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\departamento.php"><img class="categoria__img lazyload" id="imagen__15" data-src="public/imagenes/categoria/departamento.webp" alt="Departamento"></a>
                <figcaption class="categoria__desc">DEPARTAMENTO</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\dormitorio.php"><img class="categoria__img lazyload" id="imagen__16" data-src="public/imagenes/categoria/dormitorio.webp" alt="Dormitorio para niños"></a>
                <figcaption class="categoria__desc">DORMITORIO PARA NIÑOS</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\industrial.php"><img class="categoria__img lazyload" id="imagen__17" data-src="public/imagenes/categoria/industrial.webp" alt="Estilo industrial"></a>
                <figcaption class="categoria__desc">ESTILO INDUSTRIAL</figcaption>
            </figure>                
            
            <figure class="categoria__imagen">
                <a href="vistas\categorias\soda.php"><img class="categoria__img lazyload" id="imagen__18" data-src="public/imagenes/categoria/soda.webp" alt="Fuente de soda"></a>
                <figcaption class="categoria__desc">FUENTE DE SODA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\gimnasio.php"><img class="categoria__img lazyload" id="imagen__19" data-src="public/imagenes/categoria/gimnasio.webp" alt="Gimnasio"></a>
                <figcaption class="categoria__desc">GIMNASIO</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\hoteles.php"><img class="categoria__img lazyload" id="imagen__20" data-src="public/imagenes/categoria/hoteles.webp" alt="Hoteles"></a>
                <figcaption class="categoria__desc">HOTELES</figcaption>
            </figure>                
           
            <figure class="categoria__imagen">
                <a href="vistas\categorias\recepciones.php"><img class="categoria__img lazyload" id="imagen__21" data-src="public/imagenes/categoria/recepciones.webp" alt="Recepciones"></a>
                <figcaption class="categoria__desc">RECEPCIONES</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\restobar.php"><img class="categoria__img lazyload" id="imagen__22" data-src="public/imagenes/categoria/restobar.webp" alt="Restobar"></a>
                <figcaption class="categoria__desc">RESTOBAR</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\belleza.php"><img class="categoria__img lazyload" id="imagen__23" data-src="public/imagenes/categoria/belleza.webp" alt="Salón belleza y barbería"></a>
                <figcaption class="categoria__desc">SALON BELLEZA Y BARBERIA</figcaption>
            </figure>                

            <figure class="categoria__imagen">
                <a href="vistas\categorias\terraza.php"><img class="categoria__img lazyload" id="imagen__24" data-src="public/imagenes/categoria/terraza.webp" alt="Terraza"></a>
                <figcaption class="categoria__desc">TERRAZA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\ropa.php"><img class="categoria__img lazyload" id="imagen__25" data-src="public/imagenes/categoria/ropa.webp" alt="Ropa"></a>
                <figcaption class="categoria__desc">ROPA</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="vistas\categorias\veterinaria.php"><img class="categoria__img lazyload" id="imagen__26" data-src="public/imagenes/categoria/veterinaria.webp" alt="Veterinaria"></a>
                <figcaption class="categoria__desc">VETERINARIA</figcaption>
            </figure>

          <!--Fin Nuevas Categorias-->

        </div>
    </div>

<div class="nuestros__clientes">

<h2 class="nuestros__titulo">NUESTROS CLIENTES</h2>




<section class="hero-container clientes__section" >
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 arti" id="clientes ">

           <footer class="page1-footer">
                <p class="marquesina">
                <span><a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="128" height="72"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a  ><img src="public/imagenes/auspicios/vladi.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hilton.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/sagafalabella.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/touloulause.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/hotel colors.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/petroperu.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img src="public/imagenes/auspicios/entel.webp"  class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/cristal.webp"   class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/backus.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/olympuz.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/ripley.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                <a ><img  src="public/imagenes/auspicios/utilex.webp"   
                class="icon-img-empresa" width="126" height="125" alt="cliente"></a>
                </span>
                </p>    
                </footer>
           
            
        
    
        </div>
    </div>
   
</section>







</div>


    <div class="ubicanos">

        <h2 class="ubicanos__titulo titulo">TENDENCIA, VANGUARDIA Y NOVEDADES / NUEVOS PROYECTOS</h2>

        <div class="categoria__section proyectos">
            <figure class="categoria__imagen">
                <a href="https://youtu.be/qU08CNcnQhA"><img class="categoria__img lazyload" id="imagen_1" data-src="public/imagenes/proyectos/1.webp" alt="Cevicheria"></a>
                <figcaption class="categoria__desc">DECORACIÓN E ILUMINACIÓN DE INTERIORES Y EXTERIORES</figcaption>
            </figure>
            <figure class="categoria__imagen">
                <a href="https://youtu.be/3QMkxPf7H3U"><img class="categoria__img lazyload" id="imagen_1" data-src="public/imagenes/proyectos/2.webp" alt="Cevicheria"></a>
                <figcaption class="categoria__desc">DECORACIÓN CON PANTALLAS LED</figcaption>
            </figure>
        </div>


    </div>


    <div class="ubicanos">

        <h2 class="ubicanos__titulo titulo">UBÍCANOS</h2>

        <div class="mapas">
        <figure class="mapa">
            <a class="mapa__link" href="https://www.google.com/maps/place/Neon+House+Led/@-12.057222,-77.025545,19z/data=!4m5!3m4!1s0x0:0xb89ce2c672f2aa0c!8m2!3d-12.0571663!4d-77.0256203?hl=es" rel="noreferrer" target="_blank"><img class="mapa__img lazyload" data-src="public/imagenes/as.webp"  alt="Mapa"></a>
        </figure>
        </div>
        
 

    </div>

    <footer>

        <div class="direccion">
            <p class="direccion__item">Jr. Paruro 1401 tda. 130 sótano, CC Shopping Center, Cercado de Lima</p>
            <p class="direccion__item">936910425 - 994078320 </p>
            <p class="direccion__item">ventasneonhouse@gmail.com</p>
            <p class="direccion__item">www.facebook.com/nhldecoracioncomercial</p>
            <p class="direccion__item">@nhldecoracioncomercial </p>


        </div>

        <div class="ultimo">
            <a class="boton_final"href="admin/index.php">
                <img class="imagen_final lazyload" alt="neon" data-src="public/imagenes/lupa.webp" width="219px" height="100px">
            </a>
        </div>

        <div class="sociales">
            <a class="sociales__item" rel="noreferrer" target="_blank" href="https://www.instagram.com/neon_led_store/"><i class="fab fa-instagram-square"></i></a>
            <a class="sociales__item" rel="noreferrer" target="_blank" href="https://www.facebook.com/nhldecoracioncomercial"> <i class="fab fa-facebook"></i></a>
            <a class="sociales__item"  rel="noreferrer" target="_blank" href="https://www.youtube.com/user/NEONHOUSELEDS"> <i class="fab fa-youtube"></i></a>
            <a class="sociales__item" rel="noreferrer" target="_blank" href="https://twitter.com/NEONHOUSELEDS"><i class="fab fa-twitter-square"></i></a>
            <a class="sociales__item" rel="noreferrer" target="_blank" href="https://www.linkedin.com/in/neonhouseled/"><i class="fab fa-invision"></i></a>

            



        </div>
        

    </footer>
    <script src="public/js/lazysizes.min.js" async></script>
    <script type="text/javascript" defer src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>
    <script type="text/javascript"  defer src="public/js/menu.js"></script>
    

</body>

</html>