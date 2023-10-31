<?php
// Función para convertir un número decimal a la base especificada
function convertirBase($numero, $baseDestino) {
    if ($baseDestino == 16) {
        // Convertir a hexadecimal
        $numero = dechex($numero);
    } elseif ($baseDestino == 2) {
        // Convertir a binario
        $numero = decbin($numero);
    } elseif ($baseDestino == 8) {
        // Convertir a octal
        $numero = decoct($numero);
    } else {
        $numero = "Base de destino no válida";
    }

    return $numero;
}

$numero = "";
$baseDestino = 16; // Establece el valor predeterminado en hexadecimal
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $baseDestino = $_POST["baseDestino"];

    if (is_numeric($numero) && in_array($baseDestino, [2, 8, 16])) {
        $resultado = convertirBase($numero, $baseDestino);
    } else {
        $resultado = "Entrada no válida. Por favor, ingrese un número válido y seleccione una base de destino válida.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Bases</title>
</head>
<body>
    <h1>Conversor de Bases</h1>
    <form action="fbasen.php" method="post">
        <label for="numero">Numero Decimal:</label>
        <input type="text" name="numero" id="numero" required><br><br>

        <label for="baseDestino">Base de Destino:</label>
        <select name="baseDestino" id="baseDestino">
            <option value="16">Hexadecimal</option>
            <option value="2">Binario</option>
            <option value="8">Octal</option>
        </select><br><br>

        <input type="submit" value="Convertir">
        <input type="reset" value="Borrar">
    </form>

    <?php if (!empty($resultado)): ?>
    <h2>Resultado de Conversión</h2>
    <p>El numero <?php echo $numero; ?> convertido a base <?php echo $baseDestino; ?> es: <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
