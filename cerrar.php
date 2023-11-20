<?php
  session_start();
  session_destroy();
   $varsesion=$_SESSION["buser_complet"];
   
   if($varsesion==null || $varsesion="")
   {
    echo"No esta autorizado";
    die();
   }
   header("Location:inicio_sesion.php");
?>