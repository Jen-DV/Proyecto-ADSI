<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_powercaraudio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];

    $sql = "SELECT * FROM `tbusuarios` WHERE documento LIKE '%$busqueda%'";
} else {
    $sql = "SELECT * FROM tbusuarios";
}



$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row 
    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row["id"];

        echo    "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["p_nombre"] . "</td>";
        echo "<td>" . $row["s_nombre"] . "</td>";
        echo "<td>" . $row["p_apellido"] . "</td>";
        echo "<td>" . $row["s_apellido"] . "</td>";
        echo "<td>" . $row["documento"] . "</td>";
        echo "<td>" . $row["telefono"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["contrasena"] . "</td>";
        echo "<td>" . $row["tipo_usuario"] . "</td>";
        echo "<td><a href='../Modulo_Usuarios/Editar_Eliminar_usuario.php?usuario=$id'>Editar</a> | <a href='?usuario=$id'>Eliminar</a> </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
