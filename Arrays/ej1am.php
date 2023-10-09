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

// Mostrar el contenido de la matriz 
echo "<table border='1'>";
echo "<tr><th></th><th>Col 1</th><th>Col 2</th><th>Col 3</th></tr>";

for ($i = 0; $i < count($matriz); $i++) {
    echo "<tr>";
    echo "<th>Fila " . ($i + 1) . "</th>";
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo "<td>" . $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
