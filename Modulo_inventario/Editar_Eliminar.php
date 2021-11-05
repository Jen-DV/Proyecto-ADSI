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
            $_POST["Prod_ID_producto"],
            $_POST["Prod_Nombre_producto"],
            $_POST["Prod_Precio_producto"],
            $_POST["Prod_Cantidad_producto"],
            $_POST["Prod_Nombre_proveedor"],
            $_POST["Prod_Serie_producto"],
            $_POST["Prod_Fecha_de_creacion"],
            $_POST["Prod_Fecha_de_Modificacion"],
            $_POST["Prod_Estado_Producto"]
        )

    ) {

        $ID_Producto = $_POST["Prod_ID_producto"];
        $Nombre_Producto = $_POST["Prod_Nombre_producto"];
        $Precio = $_POST["Prod_Precio_producto"];
        $Cantidad = $_POST["Prod_Cantidad_producto"];
        $Nom_Proveedor = $_POST["Prod_Nombre_proveedor"];
        $Serie_Producto = $_POST["Prod_Serie_producto"];
        $Fecha_Ingreso = $_POST["Prod_Fecha_de_creacion"];
        $Fecha_Modificacion = $_POST["Prod_Fecha_de_Modificacion"];
        $Estado = $_POST["Prod_Estado_Producto"];

        include "../includes/conexion_general.php";

        $ID_Producto = $_GET['producto'];
        $sql = "UPDATE `tbproductos` SET `Prod_Nombre_producto`='$Nombre_Producto ',`Prod_Precio_producto`= '$Precio',`Prod_Cantidad_producto`='$Cantidad',
        `Prod_Nombre_proveedor`=' $Nom_Proveedor',`Prod_Serie_producto`='$Serie_Producto',`Prod_Fecha_de_creacion`='$$Fecha_Ingreso',
        `Prod_Fecha_de_Modificacion`=' $Fecha_Modificacion',`Prod_Estado_Producto`='$Estado' WHERE Prod_ID_product = $ID_Producto";

        if (mysqli_query($conn, $sql)) {
            $mensaje = "se actualizo correctamente";
        } else {
            $mensaje =  "Error: no se puedo Actualizar ";
        }
        mysqli_close($conn);
    }

    if (isset($_GET['producto'])) {

        include "../includes/conexion_general.php";
        $ID_Producto = $_GET['producto'];
        $sql = "SELECT * FROM tbproductos WHERE Prod_ID_product=$ID_Producto";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $ID_Producto = $row["Prod_ID_producto"];
            $Nombre_Producto = $row["Prod_Nombre_producto"];
            $Precio = $row["Prod_Precio_producto"];
            $Cantidad = $row["Prod_Cantidad_producto"];
            $Nom_Proveedor = $row["Prod_Nombre_proveedor"];
            $Serie_Producto = $row["Prod_Serie_producto"];
            $Fecha_Ingreso = $row["Prod_Fecha_de_creacion"];
            $Fecha_Modificacion = $row["Prod_Fecha_de_Modificacion"];
            $Estado = $row["Prod_Estado_Producto"];
        } else {
            $mensaje = "0 results";
        }

        mysqli_close($conn);
    }

    ?>

    <img class="img" src="../Imag/admin naranja.png" all="">
    <form action="#" target="" method="POST" name="formDatosPersonales">

        <label for="Id producto">ID Producto</label>
        <input value="<?php
                        echo $ID_Producto;
                        ?>" type="text" name="Prod_ID_producto" id="Documento de identidad" placeholder="Documento de identidad" required />

        <label for="Primer Nombre">Primer Nombre </label>
        <input value="<?php
                        echo $Nombre_Producto;
                        ?>" type="text" name="Prod_Nombre_producto" id="nombre" placeholder="Escribe tu primer nombre" required />

        <label for="Segundo Nombre">Segundo Nombre</label>
        <input value="<?php
                        echo  $Precio;
                        ?>" type="text" name="Prod_Precio_producto" id="nombre" placeholder="Escribe tu segundo nombre" />

        <label for="Primer Apellidoo">Primer Apellido</label>
        <input value="<?php
                        echo $Cantidad;
                        ?>" type="text" name="Prod_Cantidad_producto" id="apellidos" placeholder="1er Apellido" required />

        <label for="Segundo Apellido">Segundo Apellido</label>
        <input value="<?php
                        echo $Nom_Proveedor;
                        ?>" type="text" name="Prod_Nombre_proveedor" id="apellidos" placeholder="2do Apellido" />

        <label for="Telefono">Telefono</label>
        <input value="<?php
                        echo $Fecha_Ingreso;
                        ?>" type="text" name="Prod_Fecha_de_creacion" id="Telefono" placeholder="Telefono" required />

        <label for="Correo">Correo</label>
        <input value="<?php
                        echo $Fecha_Modificacion;
                        ?>" type="text" name="Prod_Fecha_de_Modificacion" id="Correo" placeholder="Correo" required />

        <label for="Contraseña">Contraseña</label>
        <input value="<?php
                        echo $Estado;
                        ?>" type="text" name="Prod_Estado_Producto" id="Contraseña" placeholder="Contraseña" required />



        <?php

        echo $mensaje;

        ?>

        <input type="submit" name="enviar" value="Actualizar" />
        <a href="../Modulo_inventario/Inventario_Corriente.php"><button type="button" class="btn btn-sm btn-success">Atras</button></a>
    </form>
    <div class="linea border border-dark">-</div>
</body>
<div class="footer" <center>
    <footer>© Todos los derechos reservados 2021</footer>
    </center>
</div>

</html>