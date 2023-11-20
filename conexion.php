<?php
    include("settings.php");
    $conn = mysqli_connect($servidor, $usuario, $clave, $dbregistro);

    if (!$conn) {
       die("Error de conexión: " . mysqli_connect_error());
    }
    //echo: "Conectado con la base de datos"
?>