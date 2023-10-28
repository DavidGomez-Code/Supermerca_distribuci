<html>
<body>
    <link rel="stylesheet" href="style.css">
    <h1 class="trorte">
        <?php
        include("conexion.php");

        $nombre_completob = $_REQUEST["bnombre_completo"];
        $correo_electronicob = $_REQUEST["bcorreo_electronico"];
        $numero_telefonob = $_REQUEST["bnumero_telefonico"];
        $departamentob = $_REQUEST["bdepartamento"];
        $ciudadb = $_REQUEST["bciudad"];

        // Generación del código registro
        $Codigo_registro = rand(1, 9999999);

        // Generación del código cliente
        $Codigo_cliente = rand(1, 9999999);


        // Consulta la base de datos para verificar si el nombre ya existe
        $sqlconsultar = "SELECT * FROM registro WHERE LOWER(Nombre_Completo) = LOWER('$nombre_completob')";
        $resultado = mysqli_query($conn, $sqlconsultar);
        if (!$resultado) {
            die("Error en la consulta: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($resultado) > 0) {
            echo "Ya se ha registrado anteriormente";
            echo "<br><a href='inicio.html'>Regresar al inicio</a>";
        } else {
            // Consulta para insertar el nuevo registro
            $sql = "INSERT INTO registro (Nombre_Completo, Correo_Electrónico, Número_Telefónico, Departamento, Ciudad, Codigo_registro, Codigo_cliente) VALUES ('$nombre_completob', '$correo_electronicob', '$numero_telefonob', '$departamentob', '$ciudadb', '$Codigo_registro', '$Codigo_cliente')";

            if (mysqli_query($conn, $sql)) {
                echo "Registro exitoso";
                echo "<br><a href='inicio.html'>Regresar al inicio</a>";
            } else {
                echo "Error al enviar los datos: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
        ?>

    </h1>
</body>
</html>