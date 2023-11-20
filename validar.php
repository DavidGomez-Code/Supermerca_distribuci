<?php
session_start();

include("conexion.php");
// Obtener los datos enviados por el formulario
$usuariob = $_POST['buser_complet'];
$contraseñab = $_POST['bcontraseña_usu'];

// Verificar si el usuario y la contraseña son válidos
if ($usuariob === $usuario_valido && $contraseñab === $contraseña_valida) {
  
  // Si son correctos, iniciar sesión y redirigir al panel
  $_SESSION['buser_complet'] = $usuariob;
  header('Location: inicio.php');
  
} else {
  
  // Si no son correctos, verificar si el usuario y la contraseña existen en la base de datos
  $sqlconsultar = "SELECT * FROM registro where Usuario='$usuariob' AND Contraseña='$contraseñab'";
  $resultado = mysqli_query($conn, $sqlconsultar);
  
  if(mysqli_num_rows($resultado) > 0) {
    // Si el usuario y la contraseña existen en la base de datos, iniciar sesión y redirigir al panel
    $_SESSION['buser_complet'] = $usuariob;
    header('Location: inicio.php');
  } else {
    // Si el usuario y la contraseña no son correctos o no existen en la base de datos, redirigir al inicio y mostrar mensaje de error
    header('Location: inicio_sesion.php?error=1');
  }
}
mysqli_close($conn);
?>