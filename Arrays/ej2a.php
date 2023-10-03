<?php
// Definir un array para almacenar los 20 
$numerosImpares = array();

// Inicializar una variable para contar impares
$contador = 0;

//  la suma de posiciones pares e impares
$sumaPares = 0;
$sumaImpares = 0;

// Generar los 20 primeros números impares
$num = 1;
while ($contador < 20) {
    $numerosImpares[] = $num;
    
    if ($contador % 2 == 0) {
        // Posición par
        $sumaPares += $num;
    } else {
        // Posición impar
        $sumaImpares += $num;
    }

    $num += 2;
    $contador++;
}

// Calcular la media de posiciones pares e impares
$mediaPares = $sumaPares / ($contador / 2);
$mediaImpares = $sumaImpares / ($contador / 2);
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
            <th>Suma Acumulativa</th>
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
    <br>
    <p>Media de posiciones pares: <?php echo $mediaPares; ?></p>
    <p>Media de posiciones impares: <?php echo $mediaImpares; ?></p>
</body>
</html>
