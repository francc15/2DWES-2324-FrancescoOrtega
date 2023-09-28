<html>
<head>
    <title>Información de Dirección IP</title>
</head>
<body>
<?php
// numero decimal a una base en especifico 
function decimalToBase($decimal, $base) {
    // valida la base 
    if ($base < 2 || $base > 9) {
        return "Base no válida. Debe estar entre 2 y 9.";
    }

    // casos especiales 
    if ($decimal == 0) {
        return "0";
    } elseif ($decimal < 0) {
        return "Este programa solo admite números positivos.";
    }

    // Inicializa la cadena en base 
    $resultado = "";

    while ($decimal > 0) {
        // Obtener el residuo
        $residuo = $decimal % $base;

        // Agregar el residuo )
        $resultado = $residuo . $resultado;

        // divide el número decimal entre la base
        $decimal = (int)($decimal / $base);
    }

    return $resultado;
}

// conversion de diferente bases 
$numero = 48;
$basesObjetivo = [8, 2, 4, 6];

foreach ($basesObjetivo as $base) {
    $resultado = decimalToBase($numero, $base);
    echo "Numero $numero en base $base = $resultado\n";
}
?>

</body>
</html>
