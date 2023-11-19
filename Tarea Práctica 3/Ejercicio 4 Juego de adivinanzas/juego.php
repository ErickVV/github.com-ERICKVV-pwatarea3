
<?php
session_start();

// Adivinanza
$riddleQuestion = "Si sumas mis lados, da igual que te diviertas, en un cubo, soy la magia que concentras. ¿Quién soy, si la cuenta bien aprendes?";
$possibleAnswers = [
    'a' => '6',
    'b' => '8',
    'c' => '10'
];

// Inicializar la respuesta si no está establecida
if (!isset($_SESSION['correctAnswer'])) {
    $_SESSION['correctAnswer'] = 'a';
}

// Mensaje para mostrar al usuario
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la suposición del usuario
    $userGuess = isset($_POST['guess']) ? strtolower($_POST['guess']) : null;

    if ($userGuess !== null) {
        if ($userGuess === $_SESSION['correctAnswer']) {
            $message = "¡Felicidades! Has acertado la adivinanza.";
            // Reiniciar el juego
            unset($_SESSION['correctAnswer']);
        } else {
            $message = "¡Incorrecto! Inténtalo de nuevo.";
        }
    } else {
        $message = "Por favor, selecciona una respuesta.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanzas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>

    <h1>Juego de Adivinanzas</h1>

    <p><?= $riddleQuestion ?></p>
    
    <p><?= $message ?></p>

    <form method="post">
        <?php foreach ($possibleAnswers as $key => $answer) : ?>
            <label>
                <input type="radio" name="guess" value="<?= $key ?>" required>
                <?= $answer ?>
            </label>
        <?php endforeach; ?>
        <button type="submit">Adivinar</button>
    </form>

    <h3>By ERICK VARGAS </h3>

</body>
</html>
