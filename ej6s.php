<html>
<head>
    <title>Información de Dirección IP</title>
</head>
<body>
<?php
// convertir de decimal a hexadecimal
function decimalToHexadecimal($decimal) {
    // numeros negativos 
    if ($decimal == 0) {
        return "0";
    } elseif ($decimal < 0) {
        return "Este programa solo admite números positivos.";
    }

    // digitos
    $hexDigits = "0123456789ABCDEF";

    // Inicializa una cadena para almacenar los dígitos 
    $hexadecimal = "";

    while ($decimal > 0) {
        // Obtener el residuo de la división 
        $residuo = $decimal % 16;

        // Agregar el dígito hexadecimal 
        $hexadecimal = $hexDigits[$residuo] . $hexadecimal;

        // Dividir el número decimal entre 16
        $decimal = (int)($decimal / 16);
    }

    return $hexadecimal;
}

// conversion 
$numeros = [48, 222, 15, 1515];

foreach ($numeros as $numero) {
    $hexadecimal = decimalToHexadecimal($numero);
    echo "Número $numero en base 16 = $hexadecimal\n";
}
?>



</body>
</html>