<html>
<head>
    <title>Información de Dirección IP</title>
</head>
<body>
<?php
// convierte un numero decimal a binario 
function decimalToBinary($decimal) {
    // 0 o nnumero negativos
    if ($decimal == 0) {
        return "0";
    } elseif ($decimal < 0) {
        return "solo admite numeros en positivo.";
    }

    // Inicializa y almacena los bits binarios 
    $binario = "";

    while ($decimal > 0) {
        // obtiene el resultado de la division de 2 
        $residuo = $decimal % 2;

        // agrega a la cadena binaria 
        $binario = $residuo . $binario;

        // lo dividen entre 2 
        $decimal = (int)($decimal / 2);
    }

    return $binario;
}

// numero solicitados 
$numeros = [168, 128, 127, 1, 2];

foreach ($numeros as $numero) {
    $resultado = decimalToBinary($numero);
    echo "Numero $numero en binario = $resultado\n";
}
?>

</body>
</html>