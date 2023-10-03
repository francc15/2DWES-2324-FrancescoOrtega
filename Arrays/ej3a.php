<?php
// almacena los primero 20 numero binarios 
$numerosBinarios = array();

// Definir un array 
$numerosOctales = array();

// Generar los 20 primeros números 
for ($i = 0; $i < 20; $i++) {
    $numerosBinarios[] = decbin($i);
    $numerosOctales[] = decoct($i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Números Binarios y Octales</title>
</head>
<body>
    <h2>Tabla de los 20 primeros números binarios y octales</h2>
    <table border="1">
        <tr>
            <th>Índice</th>
            <th>Binario</th>
            <th>Octal</th>
        </tr>
        <?php
        foreach ($numerosBinarios as $indice => $binario) {
            $octal = $numerosOctales[$indice];
            echo "<tr>";
            echo "<td>$indice</td>";
            echo "<td>$binario</td>";
            echo "<td>$octal</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
