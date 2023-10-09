<html>
<head>
    <title>matriz</title>
</head>
<body>
<?php
// Definir las dos matrices
$matriz1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$matriz2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

// Función para sumar 
function sumaMatrices($matriz1, $matriz2) {
    $resultado = array();

    for ($i = 0; $i < count($matriz1); $i++) {
        $fila = array();
        for ($j = 0; $j < count($matriz1[$i]); $j++) {
            $suma = $matriz1[$i][$j] + $matriz2[$i][$j];
            array_push($fila, $suma);
        }
        array_push($resultado, $fila);
    }

    return $resultado;
}

// Función para multiplicar 
function productoMatrices($matriz1, $matriz2) {
    $filas1 = count($matriz1);
    $columnas1 = count($matriz1[0]);
    $filas2 = count($matriz2);
    $columnas2 = count($matriz2[0]);

    if ($columnas1 !== $filas2) {
        die("No se pueden multiplicar las matrices. ya que no coinciden el uno con el dos.");
    }

    $resultado = array();

    for ($i = 0; $i < $filas1; $i++) {
        $fila = array();
        for ($j = 0; $j < $columnas2; $j++) {
            $producto = 0;
            for ($k = 0; $k < $columnas1; $k++) {
                $producto += $matriz1[$i][$k] * $matriz2[$k][$j];
            }
            array_push($fila, $producto);
        }
        array_push($resultado, $fila);
    }

    return $resultado;
}

// Cambia el nombre 
function nuevaFuncionSuma($matriz1, $matriz2) {
    return sumaMatrices($matriz1, $matriz2);
}

function nuevaFuncionProducto($matriz1, $matriz2) {
    return productoMatrices($matriz1, $matriz2);
}

// Calcular la suma 
$suma = nuevaFuncionSuma($matriz1, $matriz2);

// Calcular el producto 
$producto = nuevaFuncionProducto($matriz1, $matriz2);

// Mostrar la suma y el producto 
echo "Matriz 1:<br>";
echo "<br>";
print_r($matriz1);
echo "</br>";

echo "Matriz 2:<br>";
echo "<br>";
print_r($matriz2);
echo "</br>";

echo "Suma de las matrices:<br>";
echo "<pre>";
print_r($suma);
echo "</br>";

echo "Producto de las matrices:<br>";
echo "<br>";
print_r($producto);
echo "</br>";
?>
</body>
</html>
