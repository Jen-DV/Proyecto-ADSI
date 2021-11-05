<?php

if (isset($_FILES["carga_archivotxt"])) {
    $TXT = fopen($_FILES["carga_archivotxt"]["tmp_name"], "rb");
    while (($line = fgets($TXT)) !== False) {
        echo $line;
        $sql = "SELECT * FROM tbproductos WHERE Prod_ID_producto = '$line'";
        $resul = mysqli_query($conn, $sql);
        if (mysqli_num_rows($resul) > 0) {
            $fecha = date("Y-m-d");
            $sql = "UPDATE `tbproductos` SET `Prod_Cantidad_producto`= Prod_Cantidad_producto +1,
            `Prod_Fecha_de_Modificacion`= '$fecha' WHERE Prod_ID_producto = '$line'";
            $resul = mysqli_query($conn, $sql);
        }
    }
}
