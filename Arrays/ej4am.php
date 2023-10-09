<html>
<head>
    <title>matriz</title>
</head>
<body>
<?php
// Crear una matriz 3x5
$matriz = array(
    array(2, 4, 6, 9, 7),
    array(8, 10, 12, 1, 12),
    array(14, 16, 88, 3, 15)
);

// Encontrar el elemento mayor y su posición
$mayor = $matriz[0][0];
$mayorFila = 0;
$mayorColumna = 0;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($matriz[$i][$j] > $mayor) {
            $mayor = $matriz[$i][$j];
            $mayorFila = $i;
            $mayorColumna = $j;
        }
    }
}

// Mostrar la matriz
echo "MATRIZ:<br>";
foreach ($matriz as $fila) {
    foreach ($fila as $elemento) {
        echo $elemento . " ";
    }
    echo "<br>";
}

// Mostrar el elemento mayor y su posición
echo "<br>Elemento Mayor $mayor - fila " . ($mayorFila + 1) . " columna " . ($mayorColumna + 1);
?>
</body>
</html>