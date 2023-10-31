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

$decimal = "";
$resultado = "";

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
    <title>Conversor Decimal a Binario</title>
</head>
<body>
    <h1>Conversor Decimal a Binario</h1>
    <form action="fbinario.php" method="post">
        <label for="decimal">Número Decimal:</label>
        <input type="text" name="decimal" id="decimal" value="<?php echo $decimal; ?>" required><br><br>

        <input type="submit" value="Convertir a Binario">
    </form>

    <?php if (!empty($resultado)): ?>
    <h2>Resultado de Conversión:</h2>
    <p>El número decimal <?php echo $decimal; ?> convertido a binario es: <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
