<?php
// Función para convertir un número decimal a otra base
function decimalToBase($decimal, $base) {
    if ($decimal == 0) {
        return "0";
    }

    $symbols = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $result = "";

    while ($decimal > 0) {
        $remainder = $decimal % $base;
        $result = $symbols[$remainder] . $result;
        $decimal = floor($decimal / $base);
    }

    return $result;
}

$decimal = "";
$base = "";
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $decimal = $_POST["decimal"];
    $base = $_POST["base"];

    if (is_numeric($decimal) && is_numeric($base) && $base >= 2 && $base <= 36) {
        $resultado = decimalToBase((int)$decimal, (int)$base);
    } else {
        $resultado = "Entrada no válida. Por favor, ingrese un número decimal válido y una base entre 2 y 36.";
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
    <p>El numero decimal <?php echo $decimal; ?> convertido a base <?php echo $base; ?> es: <?php echo $resultado; ?></p>
    <a href="cambiobase.html">Volver a convertir</a>
</body>
</html>
