
<?php
// Definir un array para almacenar los 20 primeros números 
$numerosImpares = array();

// Inicializar una variable
$contador = 0;

// Inicializar una variable para la suma 
$suma = 0;

// Generar los 20 primeros números 
$num = 1;
while ($contador < 20) {
    $numerosImpares[] = $num;
    $suma += $num;
    $num += 2;
    $contador++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Números Impares</title>
</head>
<body>
    <h2>Tabla de los 20 primeros números impares</h2>
    <table border="1">
        <tr>
            <th>Índice</th>
            <th>Valor</th>
            <th>Suma</th>
        </tr>
        <?php
        $sumaAcumulativa = 0;
        foreach ($numerosImpares as $indice => $valor) {
            $sumaAcumulativa += $valor;
            echo "<tr>";
            echo "<td>$indice</td>";
            echo "<td>$valor</td>";
            echo "<td>$sumaAcumulativa</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
