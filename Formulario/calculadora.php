<?php
// Función para sumar 
function sumar($numero1, $numero2) {
    return $numero1 + $numero2;
}

// Función para restar 
function restar($numero1, $numero2) {
    return $numero1 - $numero2;
}

// Función para multiplicar 
function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
}

// Función para dividir 
function dividir($numero1, $numero2) {
    if ($numero2 == 0) {
        return "Error: No se puede dividir por cero";
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
    }
}
?>

<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>El resultado es: <?php echo $resultado; ?></p>
</body>
</html>
