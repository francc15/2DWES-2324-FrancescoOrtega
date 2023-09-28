<html>
<head>
    <title>Información de Dirección IP</title>
</head>
<body>
<?php
// numero a multiplicar
$numero = 8;

echo "Tabla de multiplicar del $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>
</body>
</html>
