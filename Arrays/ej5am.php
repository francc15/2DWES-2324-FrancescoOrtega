<html>
<head>
    <title>matriz</title>
</head>
<body>
<?php
// Crear una matriz 5x3 
$filas = 5;
$columnas = 3;
$matriz = array();

for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = $i + $j;
    }
}

// Imprimir los elementos 
echo "MATRIZ POR COLUMNAS:<br>";
for ($j = 0; $j < $columnas; $j++) {
    echo "Columna " . ($j + 1) . ": ";
    for ($i = 0; $i < $filas; $i++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
?>
</body>
</html>
