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

    $sql = "SELECT * FROM `tbproductos` WHERE Prod_ID_producto  LIKE '%$busqueda%'";
} else {
    $sql = "SELECT * FROM tbproductos";
}


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row 
    while ($row = mysqli_fetch_assoc($result)) {

        $ID_Producto = $row["Prod_ID_producto"];

        echo    "<tr>";
        echo "<td>" . $row["Prod_ID_producto"] . "</td>";
        echo "<td>" . $row["Prod_Nombre_producto"] . "</td>";
        echo "<td>" . $row["Prod_Precio_producto"] . "</td>";
        echo "<td>" . $row["Prod_Cantidad_producto"] . "</td>";
        echo "<td>" . $row["Prod_Nombre_proveedor"] . "</td>";
        echo "<td>" . $row["Prod_Serie_producto"] . "</td>";
        echo "<td>" . $row["Prod_Fecha_de_creacion"] . "</td>";
        echo "<td>" . $row["Prod_Fecha_de_Modificacion"] . "</td>";
        echo "<td>" . $row["Prod_Estado_Producto"] . "</td>";
        echo "<td><a href='../Modulo_inventario/Editar_Eliminar.php?producto=$ID_Producto '>Editar</a>|<a href='?producto=$ID_Producto '>Eliminar</a> </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
