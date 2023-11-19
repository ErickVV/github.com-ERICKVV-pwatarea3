<?php
session_start();

// Verificar si la variable de sesión ya existe.
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}

// Incrementa con cada visita
$_SESSION['visits']++;

// Muestra  el número de visitas
$visits = $_SESSION['visits'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a mi sitio web</h1>
    
    <p>Esta página ha sido visitada <?php echo $visits; ?> veces.</p>

    <h3>By ERICK VARGAS</h3>

</body>
</html>
