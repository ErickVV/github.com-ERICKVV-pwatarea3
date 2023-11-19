<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>
    <h1>Mi Galeria de Imagenes</h1>

<div class="galeria">
    <?php
    $directorio = 'imagenes/'; // Ruta al directorio donde están las imágenes
    $imagenes = glob($directorio . "*.jpg"); 

    foreach ($imagenes as $imagen) {
        echo "<div class='imagen'>";
        echo "<img src='" . $imagen . "' alt='Imagen'>";
        echo "</div>";
    }
    ?>
</div>
<footer>
<h2>Realizado por Erick Vargas</h2>
</footer>
</body>
</html>
