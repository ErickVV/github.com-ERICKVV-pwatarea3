
<?php
session_start();

if(session_destroy()) {
   header("Location: cerrar_sesion.php");
}
?>
