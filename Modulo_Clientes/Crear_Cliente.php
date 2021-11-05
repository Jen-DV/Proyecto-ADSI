<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Car Audio</title>
    <link rel='shortcut icon' href='../Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />
    <link rel="stylesheet" href="../css/estilos_Crear_usu.css">
    <style>
        .linea {
            margin-top: 140px;
            background-color: rgba(255, 0, 0, 0.822);
            height: 4px;
            border-radius: 100%;
        }
    </style>
</head>

<body>

    <?php

    if (
        isset($_POST["Cli_Cedula"]) and isset($_POST["Cli_P_Nombre"]) and isset($_POST["Cli_S_Nombre"]) and isset($_POST["Cli_P_Apellido"]) and isset($_POST["Cli_S_Apellido"]) and isset($_POST["Cli_Direccion"]) and isset($_POST["Cli_Telefono"]) and isset($_POST["Cli_Correo"])
    ) {
        $cedula = $_POST["Cli_Cedula"];
        $nombre1 = $_POST["Cli_P_Nombre"];
        $nombre2 = $_POST["Cli_S_Nombre"];
        $apellido1 = $_POST["Cli_P_Apellido"];
        $apellido2 = $_POST["Cli_S_Apellido"];
        $direccion = $_POST["Cli_Direccion"];
        $telefono = $_POST["Cli_Telefono"];
        $correo = $_POST["Cli_Correo"];

        include "../includes/conexion_general.php";

        $sql = "INSERT INTO `tbcliente`( `Cli_Cedula`, `Cli_P_Nombre`, `Cli_S_Nombre`, `Cli_P_Apellido`, `Cli_S_Apellido`, `Cli_Direccion`, `Cli_Telefono`, `Cli_Correo`) 
    VALUES ('$cedula','$nombre1','$nombre2','$apellido1','$apellido2','$direccion','$telefono','$correo')";

        if (mysqli_query($conn, $sql)) {
            echo "se registro correctamente";
        } else {
            echo "Error: no se puedo registrar ";
        }
        mysqli_close($conn);
    }
    ?>

    <img class="img" src="../Imag/admin naranja.png" all="">
    <form action="#" target="" method="POST" name="formDatosPersonales">

        <label for="Documento de identidad">Documento de identidad</label>
        <input type="text" name="Cli_Cedula" id="Documento de identidad" placeholder="Documento de identidad" required />

        <label for="Primer Nombre">Primer Nombre </label>
        <input type="text" name="Cli_P_Nombre" id="nombre" placeholder="Escribe tu primer nombre" required />

        <label for="Segundo Nombre">Segundo Nombre</label>
        <input type="text" name="Cli_S_Nombre" id="nombre" placeholder="Escribe tu segundo nombre" />

        <label for="Primer Apellidoo">Primer Apellido</label>
        <input type="text" name="Cli_P_Apellido" id="apellidos" placeholder="1er Apellido" required />

        <label for="Segundo Apellido">Segundo Apellido</label>
        <input type="text" name="Cli_S_Apellido" id="apellidos" placeholder="2do Apellido" />

        <label for="Direccion">Direccion</label>
        <input type="text" name="Cli_Direccion" id="Direccion" placeholder="Direccion" required />

        <label for="Telefono">Telefono</label>
        <input type="text" name="Cli_Telefono" id="Telefono" placeholder="Telefono" required />

        <label for="email">Email</label>
        <input type="email" name="Cli_Correo" id="email" placeholder="email" required />

        <input type="submit" name="enviar" value="enviar datos" />
        <a href="../Modulo_Clientes/Modulo_Clientes.php"><button type="button" class="btn btn-sm btn-success">Atras</button></a>
    </form>
    <div class="linea border border-dark">-</div>
</body>
<div class="footer" <center>
    <footer>© Todos los derechos reservados 2021</footer>
    </center>
</div>

</html>