<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Car Audio</title>
    <link rel='shortcut icon' href='Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />
    <link rel="stylesheet" href="css/estilos_Crear_usu.css">
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
    $mensaje = "";
    if (
        isset(
            $_POST["Cli_Cedula"],
            $_POST["Cli_P_Nombre"],
            $_POST["Cli_S_Nombre"],
            $_POST["Cli_P_Apellido"],
            $_POST["Cli_S_Apellido"],
            $_POST["Cli_Direccion"],
            $_POST["Cli_Telefono"],
            $_POST["Cli_Correo"]
        )
    ) {
        $cedula = $_POST["Cli_Cedula"];
        $nombre1 = $_POST["Cli_P_Nombre"];
        $nombre2 = $_POST["Cli_S_Nombre"];
        $apellido1 = $_POST["Cli_P_Apellido"];
        $apellido2 = $_POST["Cli_S_Apellido"];
        $direccion = $_POST["Cli_Direccion"];
        $telefono = $_POST["Cli_Telefono"];
        $correo = $_POST["Cli_Correo"];

        include "includes/conexion_general.php";
        $id = $_GET['cliente'];
        $sql = "UPDATE `tbcliente` SET `Cli_Cedula`= $cedula,
        `Cli_P_Nombre`='$nombre1',`Cli_S_Nombre`='$nombre2 ',`Cli_P_Apellido`='$apellido1',
        `Cli_S_Apellido`='$apellido2',`Cli_Direccion`='$direccion',`Cli_Telefono`=' $telefono',
        `Cli_Correo`='$correo' WHERE Cli_ID_Cliente= $id";

        if (mysqli_query($conn, $sql)) {
            $mensaje = "se actualizo correctamente";
        } else {
            $mensaje =  "Error: no se puedo Actualizar ";
        }
        mysqli_close($conn);
    }

    if (isset($_GET['cliente'])) {

        include "includes/conexion_general.php";
        $id = $_GET['cliente'];
        $sql = "SELECT * FROM tbcliente WHERE Cli_ID_Cliente=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $cedula = $row["Cli_Cedula"];
            $nombre1 = $row["Cli_P_Nombre"];
            $nombre2 = $row["Cli_S_Nombre"];
            $apellido1 = $row["Cli_P_Apellido"];
            $apellido2 = $row["Cli_S_Apellido"];
            $direccion = $row["Cli_Direccion"];
            $telefono = $row["Cli_Telefono"];
            $correo = $row["Cli_Correo"];
        } else {
            $mensaje = "0 results";
        }

        mysqli_close($conn);
    }

    ?>

    <img class="img" src="Imag/admin naranja.png" all="">
    <form action="#" target="" method="POST" name="formDatosPersonales">

        <label for="Documento de identidad">Documento de identidad</label>
        <input value="<?php
                        echo $cedula;
                        ?>" type="text" name="Cli_Cedula" id="Documento de identidad" placeholder="Documento de identidad" required />

        <label for="Primer Nombre">Primer Nombre </label>
        <input value="<?php
                        echo $nombre1;
                        ?>" type="text" name="Cli_P_Nombre" id="nombre" placeholder="Escribe tu primer nombre" required />

        <label for="Segundo Nombre">Segundo Nombre</label>
        <input value="<?php
                        echo $nombre2;
                        ?>" type="text" name="Cli_S_Nombre" id="nombre" placeholder="Escribe tu segundo nombre" />

        <label for="Primer Apellidoo">Primer Apellido</label>
        <input value="<?php
                        echo $apellido1;
                        ?>" type="text" name="Cli_P_Apellido" id="apellidos" placeholder="1er Apellido" required />

        <label for="Segundo Apellido">Segundo Apellido</label>
        <input value="<?php
                        echo $apellido2;
                        ?>" type="text" name="Cli_S_Apellido" id="apellidos" placeholder="2do Apellido" />

        <label for="Direccion">Direccion</label>
        <input value="<?php
                        echo $direccion;
                        ?>" type="text" name="Cli_Direccion" id="Direccion" placeholder="Direccion" required />

        <label for="Telefono">Telefono</label>
        <input value="<?php
                        echo $telefono;
                        ?>" type="text" name="Cli_Telefono" id="Telefono" placeholder="Telefono" required />

        <label for="email">Email</label>
        <input value="<?php
                        echo $correo;
                        ?>" type="email" name="Cli_Correo" id="email" placeholder="email" required />

        <?php

        echo $mensaje;

        ?>

        <input type="submit" name="enviar" value="Actualizar" />
        <a href="Modulo_Clientes.php">Atras</a>
    </form>
    <div class="linea border border-dark">-</div>
</body>
<div class="footer" <center>
    <footer>© Todos los derechos reservados 2021</footer>
    </center>
</div>

</html>