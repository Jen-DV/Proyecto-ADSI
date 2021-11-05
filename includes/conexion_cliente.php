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

    $sql = "SELECT * FROM `tbcliente` WHERE Cli_Cedula LIKE '%$busqueda%'";
} else {
    $sql = "SELECT * FROM tbcliente";
}


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row 
    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row["Cli_ID_Cliente"];

        echo    "<tr>";
        echo "<td>" . $row["Cli_ID_Cliente"] . "</td>";
        echo "<td>" . $row["Cli_Cedula"] . "</td>";
        echo "<td>" . $row["Cli_P_Nombre"] . "</td>";
        echo "<td>" . $row["Cli_S_Nombre"] . "</td>";
        echo "<td>" . $row["Cli_P_Apellido"] . "</td>";
        echo "<td>" . $row["Cli_S_Apellido"] . "</td>";
        echo "<td>" . $row["Cli_Direccion"] . "</td>";
        echo "<td>" . $row["Cli_Telefono"] . "</td>";
        echo "<td>" . $row["Cli_Correo"] . "</td>";
        echo "<td><a href='../Modulo_Clientes/Editar_Eliminar_Cliente.php?cliente=$id'>Editar</a>|<a href='?cliente=$id'>Eliminar</a> </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
