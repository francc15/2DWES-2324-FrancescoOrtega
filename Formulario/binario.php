<?php
// Función para convertir un número decimal a binario
function decimalToBinary($decimal) {
    if ($decimal == 0) {
        return "0";
    }

    $binary = "";
    while ($decimal > 0) {
        $remainder = $decimal % 2;
        $binary = $remainder . $binary;
        $decimal = floor($decimal / 2);
    }

    return $binary;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $decimal = $_POST["decimal"];

    if (is_numeric($decimal)) {
        $resultado = decimalToBinary((int)$decimal);
    } else {
        $resultado = "Entrada no válida. Por favor, ingrese un número decimal válido.";
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
    <p>El numero decimal convertido a binario es: <?php echo isset($resultado) ? $resultado : ''; ?></p>
    <a href="binario.html">Volver a convertir</a>
</body>
</html>
