<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Car Audio</title>
    <link rel='shortcut icon' href='Imag/CAR AUDIO.png' type='image/x-icon' sizes="16x16" />
    <link rel="stylesheet" href="css/estilos_Mod_Clietes.css">
    <style>
        .linea {
            margin-top: 250px;
            background-color: rgba(255, 0, 0, 0.822);
            height: 4px;
            border-radius: 100%;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 5px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr {
            background-color: #FBFCFC;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_GET['cliente'])) {
        include "includes/conexion_general.php";
        $id = htmlspecialchars($_GET['cliente'], ENT_QUOTES);

        $sql = "DELETE FROM tbcliente WHERE Cli_ID_Cliente=$id";

        if (mysqli_query($conn, $sql)) {
            echo "Eliminado Correctamente";
            header("location:Modulo_clientes.php");
        } else {
            echo "Error o no existe: ";
        }

        mysqli_close($conn);
    }


    ?>

    <img class="img" src="Imag/CAR AUDIO.png" all="">
    <center>
        <h1 class="h1">Modulo Clientes</h1>
    </center>
    <br>><nav class="navbar navbar-light bg-light">
        <center>
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="text" name="busqueda" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </center>
    </nav>

    <nav>
        <ul>
            <li><a href="Crear_Cliente.php">Crear</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="Pagina Principal.php">Cerrar sesión</a></li>
        </ul>
    </nav>

    <center>
        <table border="1" style="width:65%">
            <tr>
                <th>ID Cliente</th>
                <th>Cedula</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Opciones</th>
            </tr>

            <?php

            include "includes/conexion_cliente.php";

            ?>
        </table>
    </center>

    <div class="linea border border-dark">-</div>
</body>
<div class="footer" <center>
    <footer>© Todos los derechos reservados 2021</footer>
    </center>
</div>

</html>