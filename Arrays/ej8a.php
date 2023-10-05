<html>
<head>
    <title>modulos</title>
</head>
<body>
<?php
// Crear un array asociativo 
$alumnos = array(
    "Francesco" => 10,
    "Marcos" => 9,
    "Carlos" => 8,
    "Jose" => 2,
    "Pedro" => 6
);

// Mostrar el alumno con la mayor nota
$maxNota = max($alumnos);
$maxAlumno = array_search($maxNota, $alumnos);
echo "El alumno con la mayor nota es $maxAlumno con una nota de $maxNota.<br>";

// Mostrar el alumno con la menor nota
$minNota = min($alumnos);
$minAlumno = array_search($minNota, $alumnos);
echo "El alumno con la menor nota es $minAlumno con una nota de $minNota.<br>";

// Calcular la media de las notas obtenidas por los alumnos
$totalNotas = array_sum($alumnos);
$media = $totalNotas / count($alumnos);
echo "La media de las notas obtenidas por los alumnos es $media.<br>";
?>
</body>
</html>
