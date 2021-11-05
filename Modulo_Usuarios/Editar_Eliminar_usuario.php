<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Car Audio</title>
    <link rel='shortcut icon' href='Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />
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
    $mensaje = "";
    if (
        isset(
            $_POST["p_nombre"],
            $_POST["s_nombre"],
            $_POST["p_apellido"],
            $_POST["s_apellido"],
            $_POST["documento"],
            $_POST["telefono"],
            $_POST["email"],
            $_POST["contrasena"],
            $_POST["tipo_usuario"]
        )

    ) {

        $nombre1 = $_POST["p_nombre"];
        $nombre2 = $_POST["s_nombre"];
        $apellido1 = $_POST["p_apellido"];
        $apellido2 = $_POST["s_apellido"];
        $cedula = $_POST["documento"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["email"];
        $contrasena = $_POST["contrasena"];
        $tipo_us = $_POST["tipo_usuario"];

        include "../includes/conexion_general.php";
        $id = $_GET['usuario'];
        $sql = "UPDATE `tbusuarios` SET `p_nombre`='$nombre1',`s_nombre`= '$nombre2',`p_apellido`='$apellido1',
        `s_apellido`='$apellido2',`documento`='$cedula',`telefono`='$telefono',
        `email`='$correo',`contrasena`='$contrasena',`tipo_usuario`='$tipo_us' WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            $mensaje = "se actualizo correctamente";
        } else {
            $mensaje =  "Error: no se puedo Actualizar ";
        }
        mysqli_close($conn);
    }

    if (isset($_GET['usuario'])) {

        include "../includes/conexion_general.php";
        $id = $_GET['usuario'];
        $sql = "SELECT * FROM tbusuarios WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $nombre1 = $row["p_nombre"];
            $nombre2 = $row["s_nombre"];
            $apellido1 = $row["p_apellido"];
            $apellido2 = $row["s_apellido"];
            $cedula = $row["documento"];
            $telefono = $row["telefono"];
            $correo = $row["email"];
            $contrasena = $row["contrasena"];
            $tipo_us = $row["tipo_usuario"];
        } else {
            $mensaje = "0 results";
        }

        mysqli_close($conn);
    }

    ?>

    <img class="img" src="../Imag/admin naranja.png" all="">
    <form action="#" target="" method="POST" name="formDatosPersonales">

        <label for="Documento de identidad">Documento de identidad</label>
        <input value="<?php
                        echo $cedula;
                        ?>" type="text" name="documento" id="Documento de identidad" placeholder="Documento de identidad" required />

        <label for="Primer Nombre">Primer Nombre </label>
        <input value="<?php
                        echo $nombre1;
                        ?>" type="text" name="p_nombre" id="nombre" placeholder="Escribe tu primer nombre" required />

        <label for="Segundo Nombre">Segundo Nombre</label>
        <input value="<?php
                        echo $nombre2;
                        ?>" type="text" name="s_nombre" id="nombre" placeholder="Escribe tu segundo nombre" />

        <label for="Primer Apellidoo">Primer Apellido</label>
        <input value="<?php
                        echo $apellido1;
                        ?>" type="text" name="p_apellido" id="apellidos" placeholder="1er Apellido" required />

        <label for="Segundo Apellido">Segundo Apellido</label>
        <input value="<?php
                        echo $apellido2;
                        ?>" type="text" name="s_apellido" id="apellidos" placeholder="2do Apellido" />

        <label for="Telefono">Telefono</label>
        <input value="<?php
                        echo $telefono;
                        ?>" type="text" name="telefono" id="Telefono" placeholder="Telefono" required />

        <label for="Correo">Correo</label>
        <input value="<?php
                        echo $correo;
                        ?>" type="email" name="email" id="Correo" placeholder="Correo" required />

        <label for="Contraseña">Contraseña</label>
        <input value="<?php
                        echo $contrasena;
                        ?>" type="text" name="contrasena" id="Contraseña" placeholder="Contraseña" required />

        <label for="Tipo de Usuario">Tipo de Usuario</label>
        <input value="<?php
                        echo $tipo_us;
                        ?>" type="text" name="tipo_usuario" id="Tipo de Usuario" placeholder="Tipo de Usuario" required />

        <?php

        echo $mensaje;

        ?>

        <input type="submit" name="enviar" value="Actualizar" />
        <a href="../Modulo_Usuarios/Modulo_Usuarios.php"><button type="button" class="btn btn-sm btn-success">Atras</button></a>
    </form>
    <div class="linea border border-dark">-</div>
</body>
<div class="footer" <center>
    <footer>© Todos los derechos reservados 2021</footer>
    </center>
</div>

</html>