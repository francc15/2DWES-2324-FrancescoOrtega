<?php
// Array original con los 20 primeros números binarios
$numerosBinarios = array(
    "0", "1", "10", "11", "100", "101", "110", "111", "1000", "1001",
    "1010", "1011", "1100", "1101", "1110", "1111", "10000", "10001", "10010", "10011"
);

// Nuevo array para almacenar los números binarios 
$numerosBinariosInversos = array_reverse($numerosBinarios);

// Nuevo array para almacenar los números en octal 
$numerosOctales = array();

// Convertir los números binarios en octales 
foreach ($numerosBinariosInversos as $binario) {
    $decimal = bindec($binario);
    $octal = decoct($decimal);
    $numerosOctales[] = $octal;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Números Binarios y Octales en Orden Inverso</title>
</head>
<body>
    <h2>Tabla de Números Binarios y Octales en Orden Inverso</h2>
    <table border="1">
        <tr>
            <th>Índice</th>
            <th>Binario</th>
            <th>Octal</th>
        </tr>
        <?php
        foreach ($numerosBinariosInversos as $indice => $binario) {
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

