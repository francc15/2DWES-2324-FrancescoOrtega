<html>
<head>
    <title>matriz</title>
</head>
<body>
<?php
// Crear una matriz 3x3 
$matriz = array(
    array(2, 4, 6),
    array(8, 10, 12),
    array(14, 16, 18)
);

// Inicializar arrays para almacenar 
$sumasFilas = array();
$sumasColumnas = array();

// Calcular las sumas 
for ($i = 0; $i < count($matriz); $i++) {
    $sumaFila = array_sum($matriz[$i]);
    $sumasFilas[] = $sumaFila;
    
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        if (!isset($sumasColumnas[$j])) {
            $sumasColumnas[$j] = 0;
        }
        $sumasColumnas[$j] += $matriz[$i][$j];
    }
}

// Mostrar la suma por filas
echo "<br>SUMA POR FILAS:<br>";
foreach ($sumasFilas as $fila => $suma) {
    echo $suma . "<br>";
}

// Mostrar la suma por columnas
echo "<br>SUMA POR COLUMNAS:<br>";
foreach ($sumasColumnas as $columna => $suma) {
    echo $suma . " ";
}
?>
</body>
</html>
