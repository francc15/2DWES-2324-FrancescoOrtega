<?php
// Función para sumar dos números
function sumar($numero1, $numero2) {
    return $numero1 + $numero2;
}

// Función para restar dos números
function restar($numero1, $numero2) {
    return $numero1 - $numero2;
}

// Función para multiplicar dos números
function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
}

// Función para dividir dos números
function dividir($numero1, $numero2) {
    if ($numero2 == 0) {
        return "No se puede dividir por cero";
    }
    return $numero1 / $numero2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "sumar":
            $resultado = sumar($numero1, $numero2);
            break;
        case "restar":
            $resultado = restar($numero1, $numero2);
            break;
        case "multiplicar":
            $resultado = multiplicar($numero1, $numero2);
            break;
        case "dividir":
            $resultado = dividir($numero1, $numero2);
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="fcalculadora.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" id="numero2" required><br><br>

        <label>Operación:</label><br>
        <input type="radio" name="operacion" value="sumar" id="sumar" required>
        <label for="sumar">Sumar</label><br>
        
        <input type="radio" name="operacion" value="restar" id="restar">
        <label for="restar">Restar</label><br>
        
        <input type="radio" name="operacion" value="multiplicar" id="multiplicar">
        <label for="multiplicar">Multiplicar</label><br>
        
        <input type="radio" name="operacion" value="dividir" id="dividir">
        <label for="dividir">Dividir</label><br><br>

        <input type="submit" value="Calcular">
        <input type="reset" value="Borrar">
    </form>

    <?php if (isset($resultado)): ?>
    <h2>Resultado:</h2>
    <p>El resultado de la operación seleccionada es: <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>

