<?php

session_start();
if ($_SESSION["tipo_usuario"] == 1) {
  # code...
} else {
  header("location: ../Login/Login.php");
}
