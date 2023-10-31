<?php
// Función para convertir un número de una base a otra base
function convertirBase($numero, $baseOrigen, $baseDestino) {
    if ($baseOrigen != 10) {
        // Convertir a decimal si no está en base 10
        $numero = base_convert($numero, $baseOrigen, 10);
    }

    if ($baseDestino != 10) {
        // Convertir a la base de destino si no es base 10
        $numero = base_convert($numero, 10, $baseDestino);
    }

    return $numero;
}

$numero = "";
$baseOrigen = 10;
$baseDestino = 10;
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $baseOrigen = $_POST["baseOrigen"];
    $baseDestino = $_POST["baseDestino"];

    if (is_numeric($numero) && $baseOrigen >= 2 && $baseDestino >= 2 && $baseOrigen <= 36 && $baseDestino <= 36) {
        $resultado = convertirBase($numero, $baseOrigen, $baseDestino);
    } else {
        $resultado = "Entrada no válida. Por favor, ingrese un número válido y seleccione bases válidas.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Conversión</title>
</head>
<body>
    <h1>Resultado de Conversión</h1>
    <p>El numero <?php echo $numero; ?> en base <?php echo $baseOrigen; ?> convertido a base <?php echo $baseDestino; ?> es: <?php echo $resultado; ?></p>
    <a href="basen.html">Volver a convertir</a>
</body>
</html>
