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
        isset($_POST["p_nombre"]) and isset($_POST["s_nombre"]) and isset($_POST["p_apellido"]) and isset($_POST["s_apellido"]) and isset($_POST["documento"]) and isset($_POST["telefono"]) and isset($_POST["email"]) and isset($_POST["contrasena"]) and isset($_POST["tipo_usuario"])
    ) {
        $nombre1 = $_POST["p_nombre"];
        $nombre2 = $_POST["s_nombre"];
        $apellido1 = $_POST["p_apellido"];
        $apellido2 = $_POST["s_apellido"];
        $cedula = $_POST["documento"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["email"];
        $Contraseña = $_POST["contrasena"];
        $tipo_usu = $_POST["tipo_usuario"];

        include "../includes/conexion_general.php";

        $sql = "INSERT INTO `tbusuarios`(`p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `documento`, `telefono`, `email`, `contrasena`, `tipo_usuario`) 
        VALUES ('$nombre1','$nombre2','$apellido1','$apellido2','$cedula','$telefono','$correo','$Contraseña','$tipo_usu')";
**//////////////////////////////////////////////////
$_POST["Prod_ID_producto"],
$_POST["Prod_Nombre_producto"],
$_POST["Prod_Precio_producto"],
$_POST["Prod_Cantidad_producto"],
$_POST["Prod_Nombre_proveedor"],
$_POST["Prod_Serie_producto"],
$_POST["Prod_Fecha_de_creacion"],
$_POST["Prod_Fecha_de_Modificacion"],
$_POST["Prod_Estado_Producto"]

$ID_Producto = $_POST["Prod_ID_producto"];
$Nombre_Producto = $_POST["Prod_Nombre_producto"];
$Precio = $_POST["Prod_Precio_producto"];
$Cantidad = $_POST["Prod_Cantidad_producto"];
$Nom_Proveedor = $_POST["Prod_Nombre_proveedor"];
$Serie_Producto = $_POST["Prod_Serie_producto"];
$Fecha_Ingreso = $_POST["Prod_Fecha_de_creacion"];
$Fecha_Modificacion = $_POST["Prod_Fecha_de_Modificacion"];
$Estado = $_POST["Prod_Estado_Producto"];

INSERT INTO `tbproductos`(`Prod_ID_producto`, `Prod_Nombre_producto`, `Prod_Precio_producto`, `Prod_Cantidad_producto`, `Prod_Nombre_proveedor`, `Prod_Serie_producto`,
 `Prod_Fecha_de_creacion`, `Prod_Fecha_de_Modificacion`, `Prod_Estado_Producto`) VALUES 
([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
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

        <label for="Primer Nombre ">Primer Nombre </label>
        <input type="text" name="p_nombre" id="nombre" placeholder="Escribe tu primer nombre" required />

        <label for="nombre">Segundo Nombre</label>
        <input type="text" name="s_nombre" id="nombre" placeholder="Escribe tu segundo nombre" />

        <label for="apellido">Primer Apellido</label>
        <input type="text" name="p_apellido" id="apellidos" placeholder="1er Apellido" required />

        <label for="apellido">Segundo Apellido</label>
        <input type="text" name="s_apellido" id="apellidos" placeholder="2do Apellido" required />

        <label for="Documento de identidad">Documento de identidad</label>
        <input type="text" name="documento" id="Documento de identidad" placeholder="Documento de identidad" required />

        <label for="Telefono">Telefono</label>
        <input type="text" name="telefono" id="Telefono" placeholder="Telefono" required />

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="email" required />

        <label for="Contraseña">Contraseña</label>
        <input type="text" name="contrasena" id="contrasena" placeholder="Contraseña" required />

        <label for="Tipo de usuario">Tipo de usuario</label>
        <input type="text" name="tipo_usuario" id="tipo de usuario" placeholder="Tipo de usuario" required />

        <input type="submit" name="enviar" value="enviar datos" />
        <a href="../Modulo_inventario/Inventario_Corriente.php"><button type="button" class="btn btn-sm btn-success">Atras</button></a>
    </form>
    <div class="linea border border-dark">-</div>


**//////////////////////////////////////////////////////
</body>
<div class="footer" <center>
    <footer>© Todos los derechos reservados 2021</footer>
    </center>
</div>

</html>