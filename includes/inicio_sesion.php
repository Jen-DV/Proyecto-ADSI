<?php



if (isset($_POST["username"]) and isset($_POST["password"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_powercaraudio";
    $user = $_POST["username"];
    $contra = md5($_POST["password"]);


    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbusuarios where email= '$user' and contrasena= '$contra' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        session_start();

        if ($row = mysqli_fetch_assoc($result)) {
            if ($row["tipo_usuario"] == 1) {

                $_SESSION["tipo_usuario"] = 1;
                header("location:../Perf_Admin/Perf_Admin.php");
            } elseif ($row["tipo_usuario"] == 2) {
                $_SESSION["tipo_usuario"] = 2;
                header("location:../Perf_Emple/Perf_Emple.php");
            }
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}
