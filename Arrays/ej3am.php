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


// Mostrar la matriz por columnas
echo "<br>MATRIZ POR COLUMNAS:<br>";
for ($j = 0; $j < 5; $j++) {
    for ($i = 0; $i < 3; $i++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

// Comparaciones
echo "<br>COMPARACIONES:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "($i,$j) = (elemento pos $i,$j) - ";
        for ($k = 0; $k < 3; $k++) {
            if ($k != $i) {
                echo "($k,$j) = (elemento pos $k,$j) ";
            }
        }
        echo "<br>";
    }
}
?>
</body>
</html>
