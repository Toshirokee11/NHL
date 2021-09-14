<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
            font-family: Calibri, sans-serif;
        }

        .container {
            width: 80%;
            height: 100vh;
            margin: 0 auto;
        }

        h1 {
            text-transform: uppercase;
            font-size: 3.3rem;
            text-align: center;
            font-weight: bold;
        }

        .img__sent {
            display: block;
            margin: auto;
            width: 200px;
        }

        .text {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .texts {
            width: 60%;
            margin: 0 auto;
            font-size: 1.1rem;
            border: 3px double lightslategray;
            padding: 3px 7px;
        }

        .pie {
            border: 4px solid lightskyblue;
            width: max-content;
            padding: 0.7rem;
            margin-top: 1.8rem;
        }

        .pie img {
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Neonhouseled</h1>
        <img class="img__sent" src="https://i.ibb.co/zXP3BkD/sent.png" alt="">
        <p class="text">Un nuevo usuario quiere contactarse:</p>
        <div class="texts">
            <p><b>Nombres:</b> full_name</p>
            <p><b>Teléfono:</b> telephone</p>
            <p><b>Correo:</b> email</p>
            <p><b>Interesado en:</b> interesed_service</p>
            <p><b>Mensaje:</b> career</p>
        </div>
        <div class="pie">
            <img class="" src="https://i.ibb.co/Y2c32Qw/Neon-House-Logo.png" alt="">
        </div>
    </div>
</body>
</html>