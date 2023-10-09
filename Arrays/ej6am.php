<html>
<head>
    <title>matriz</title>
</head>
<body>
<?php
// Crear una matriz 3x3 
$matriz = array(
    array(rand(1, 100), rand(1, 100), rand(1, 100)),
    array(rand(1, 100), rand(1, 100), rand(1, 100)),
    array(rand(1, 100), rand(1, 100), rand(1, 100))
);

// Inicializar arrays 
$valoresMaximos = array();
$promediosFilas = array();

// Calcular los valores as
for ($i = 0; $i < 3; $i++) {
    $maximo = max($matriz[$i]);
    $promedio = array_sum($matriz[$i]) / count($matriz[$i]);
    
    $valoresMaximos[] = $maximo;
    $promediosFilas[] = $promedio;
}

// Mostrar los valores 
echo "Valores Máximos de Cada Fila:<br>";
foreach ($valoresMaximos as $valor) {
    echo $valor . "<br>";
}

echo "<br>Promedios de las Filas:<br>";
foreach ($promediosFilas as $promedio) {
    echo $promedio . "<br>";
}
?>
</body>
</html>
