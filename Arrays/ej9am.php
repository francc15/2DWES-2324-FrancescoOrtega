<html>
<head>
    <title>matriz</title>
</head>
<body>
<?php
// Definir la matriz 
$matriz = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 10, 11, 12)
);

// Función para calcular la matriz 
function matrizTraspuesta($matriz) {
    $filas = count($matriz);
    $columnas = count($matriz[0]);

    $traspuesta = array();

    for ($i = 0; $i < $columnas; $i++) {
        $fila = array();
        for ($j = 0; $j < $filas; $j++) {
            $fila[] = $matriz[$j][$i];
        }
        $traspuesta[] = $fila;
    }

    return $traspuesta;
}

// Calcular la matriz 
$matrizTraspuesta = matrizTraspuesta($matriz);

// Mostrar la matriz original y la traspuesta
echo "Matriz Original:<br>";
foreach ($matriz as $fila) {
    foreach ($fila as $valor) {
        echo $valor . " ";
    }
    echo "<br>";
}

echo "<br>Matriz Traspuesta:<br>";
foreach ($matrizTraspuesta as $fila) {
    foreach ($fila as $valor) {
        echo $valor . " ";
    }
    echo "<br>";
}
?>
</body>
</html>
