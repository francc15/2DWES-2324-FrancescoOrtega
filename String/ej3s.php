<html>
<head>
    <title>Información de Dirección IP</title>
</head>
<body>

<?php
$direccionIPMascara = "192.168.16.100/16";

$partesDireccion = explode("/", $direccionIPMascara);
$direccionIP = $partesDireccion[0];
$mascaraSubredDec = $partesDireccion[1];

echo "Dirección IP: " . $direccionIP . "<br>";
echo "Máscara de Subred: " . $mascaraSubredDec . "<br>";

$octetosDireccionIP = explode(".", $direccionIP);

$bitsHost = 32 - $mascaraSubredDec;

$direccionRed = calcularDireccionDeRed($octetosDireccionIP, $bitsHost);
echo "Dirección de Red: " . $direccionRed . "<br>";

$direccionBroadcast = calcularDireccionDeBroadcast($octetosDireccionIP, $bitsHost);
echo "Dirección de Broadcast: " . $direccionBroadcast . "<br>";

function calcularDireccionDeRed($octetosIP, $bitsHost) {
    $direccionRed = $octetosIP;
    $hostBits = 32 - $bitsHost;

    $direccionRed[3] = 0;
    return implode(".", $direccionRed);
}

function calcularDireccionDeBroadcast($octetosIP, $bitsHost) {
    $direccionBroadcast = $octetosIP;
    $hostBits = 32 - $bitsHost;

    $direccionBroadcast[3] = 255;
    return implode(".", $direccionBroadcast);
}
?>
</body>
</html>

