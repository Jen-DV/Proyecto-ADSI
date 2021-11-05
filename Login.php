<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Car Audio</title>
    <link rel="shortcut icon" href="Imag/CAR AUDIO.png" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="css/estilos_login.css">
    <style>
        .linea {
            margin-top: 50px;
            background-color: rgba(255, 0, 0, 0.822);
            height: 4px;
            border-radius: 100%;
        }
    </style>
</head>

<body>
    <?php

    include "includes/inicio_sesion.php";

    ?>
    <div class="login-box">
        <img class="avatar" src="Imag/CAR AUDIO.png" alt="Logo de CAR AUDIO">
        <br>
        <h1>Power Car Audio</h1>

        <div class="container">

            <form method="POST" name="formingresar" action="#">
                Nombre De Usuario<br>
                <input type="email" name="username" placeholder="Nombre de usuario"><br>
                Contraseña<br>
                <input type="password" name="password" placeholder="Contraseña">
                <br>
                <center><input type="submit" name="btningresar" value="Ingresar" onsubmit="ingresar"></center>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                </div>
            </form>
        </div>
        <div class="linea border border-dark">-</div>

        <div class="footer" <center="">
            <footer> © Todos los derechos reservados 2021</footer>
        </div>


    </div>
</body>

</html>