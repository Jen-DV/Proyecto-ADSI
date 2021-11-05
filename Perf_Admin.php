<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Car Audio</title>
    <link rel='shortcut icon' href='Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />
    <link rel="stylesheet" href="css/estilos_Per_admin.css">
    <style>
        .linea {
            margin-top: 100px;
            background-color: rgba(255, 0, 0, 0.822);
            height: 4px;
            border-radius: 100%;
        }
    </style>
</head>

<body>
    <?php

    session_start();
    if ($_SESSION["tipo_usuario"] == 1) {
        # code...
    } else {
        header("location: Login.php");
    }

    ?>
    <img class="img" src="Imag/admin naranja.png" all="">
    <br>
    <nav class="navbar navbar-light bg-light">
        <center>
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
    </nav>
    <nav>
        <ul>
            <li><a href="Crear_Usuario.php">Crear Usuario</a></li>
            <li><a href="Modulo_Clientes.php">Modulo Clientes</a></li>
            <li><a href="Modulo_Inventarios.php">Modulo Inventario</a></li>
            <li><a href="Modulo_Servicios.php">Modulo Servicios</a></li>
            <li><a href="Modulo_Garantias.php">Modulo Garantia</a></li>
            <li><a href="Modulo_De_Facturacion.php">Modulo Facturacion</a></li>
            <li><a href="Modulo_De_Ventas.php">Modulo Ventas</a></li>
            <li><a href="#">Eliminar Usuario</a></li>
            <li><a href="#">Configuracion</a></li>
            <li><a href="#">Informes</a></li>
            <li><a href="includes/cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <div class="login-box">
        <img class="avatar" src="Imag/POWER CAR NARAJA.png" alt="Logo de CAR AUDIO">
    </div>
    <div class="linea border border-dark">-</div>

</body>
<div class="footer" <center>
    <footer>© Todos los derechos reservados 2021</footer>
    </center>
</div>

</html>