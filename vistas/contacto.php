  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link rel="preload" href="../public/css/shared/header.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="../public/css/shared/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="../public/css/contacto.css" as="style" onload="this.onload=null;this.rel='stylesheet'">    
</head>
<body>
<?php require_once "layout/header.php" ?>

    <section class="hero_container">
    </section>
    
    <section class="contact">
        <h1 class="contact-title">Contacto</h1>
        <div class="contact-contact-container">
            
            <div class="contact-description"> 
                <div class="img_container">
                </div>
                <p>
                    Si requieres mayor información o estás interesado sobre alguno de nuestros productos. Completa nuestro formulario y nos pondremos en contacto contigo a la brevedad posible.
                </p>        
            </div>

            <div class="contact-form-container">
                <!-- Formulario -->
                <form id="formContact" class="contact-form" action="../controladores/enviarcorreo.php" method="POST">
                    <!-- Nombres -->
                    <div class="box-container">
                        <label for="full_name">
                            <h2>Nombre</h2>
                            <input type="text" name="full_name" id="full_name" pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. john" required>
                        </label>
                    </div>
                    <!-- Telefono -->
                    <div class="box-container">
                        <label for="telephone">
                            <h2>Número de teléfono</h2>
                            <input type="text" name="telephone" id="telephone" pattern="[0-9]{9,12}" title="debe conter numeros" required>
                        </label>
                    </div>
                    <!-- E-mail -->
                    <div class="box-container">
                        <label for="email">
                            <h2>E-mail</h2>
                            <input type="text" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com" required>
                        </label>
                    </div>
                    <!-- Mensaje -->
                    <div class="box-container">
                        <label for="career">
                            <h2>Mensaje</h2>
                            <textarea name="career" id="career" cols="30" rows="10" required></textarea>
                        </label>
                    </div>
                    <!-- Button -->
                    <div class="box-container" id="button-container">
                        <!--<button>Enviar</button>-->
                        <button class="form__section boton"  id="enviar" name="enviar" >Enviar</button>
                    </div>                 

                </form>
            </div>
        </div>

    </section>


    <?php require_once "layout/foother.php" ?>
    <script src="../public/js/contact.js"></script>
    </body>
</html>