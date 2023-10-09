<html>
<head>
    <title>matriz</title>
</head>
<body>
<?php
// Definir una matriz 
$notas = array(
    array(10, 8, 9, 2),
    array(7, 8, 6, 8),
    array(9, 4, 8, 7),
    array(6, 6, 6, 5),
    array(8, 2, 5, 8),
    array(7, 6, 8, 7),
    array(7, 1, 0, 8),
    array(9, 5, 6, 9),
    array(8, 8, 2, 9),
    array(7, 8, 2, 8)
);

// a. Mostrar el alumno 
function obtenerAlumnoConMayorNota($notas, $asignatura) {
    $maxNota = -1;
    $alumno = -1;
    
    for ($i = 0; $i < count($notas); $i++) {
        if ($notas[$i][$asignatura] > $maxNota) {
            $maxNota = $notas[$i][$asignatura];
            $alumno = $i + 1; // Sumar 1 para mostrar el número
        }
    }
    
    return $alumno;
}

$asignatura = 2; // Cambia el número de asignatura 
$alumnoConMayorNota = obtenerAlumnoConMayorNota($notas, $asignatura);
echo "a. El alumno con la mayor nota en la asignatura $asignatura es el alumno $alumnoConMayorNota.<br>";

// b. Mostrar el alumno con menor nota e
function obtenerAlumnoConMenorNota($notas, $asignatura) {
    $minNota = 10;
    $alumno = -1;
    
    for ($i = 0; $i < count($notas); $i++) {
        if ($notas[$i][$asignatura] < $minNota) {
            $minNota = $notas[$i][$asignatura];
            $alumno = $i + 1; // Sumar 1 para mostrar el número 
        }
    }
    
    return $alumno;
}

$alumnoConMenorNota = obtenerAlumnoConMenorNota($notas, $asignatura);
echo "b. El alumno con la menor nota en la asignatura $asignatura es el alumno $alumnoConMenorNota.<br>";

// c. Para un alumno, mostrar en qué materia tiene su nota más baja.
function obtenerMateriaConNotaMasBaja($notas, $alumno) {
    $minNota = 101;
    $materia = -1;
    
    for ($j = 0; $j < count($notas[$alumno - 1]); $j++) {
        if ($notas[$alumno - 1][$j] < $minNota) {
            $minNota = $notas[$alumno - 1][$j];
            $materia = $j;
        }
    }
    
    return $materia;
}

$alumno = 5; // Cambia el número de alumno 
$materiaConNotaMasBaja = obtenerMateriaConNotaMasBaja($notas, $alumno);
echo "c. El alumno $alumno tiene su nota más baja en la materia $materiaConNotaMasBaja.<br>";

// d. Para un alumno, mostrar en qué materia tiene su nota más alta.
function obtenerMateriaConNotaMasAlta($notas, $alumno) {
    $maxNota = -1;
    $materia = -1;
    
    for ($j = 0; $j < count($notas[$alumno - 1]); $j++) {
        if ($notas[$alumno - 1][$j] > $maxNota) {
            $maxNota = $notas[$alumno - 1][$j];
            $materia = $j;
        }
    }
    
    return $materia;
}

$alumno = 7; // Cambia el número de alumno 
$materiaConNotaMasAlta = obtenerMateriaConNotaMasAlta($notas, $alumno);
echo "d. El alumno $alumno tiene su nota más alta en la materia $materiaConNotaMasAlta.<br>";

// e. Mostrar la media por materia de todos los alumnos.
echo "e. Media por materia de todos los alumnos:<br>";
$mediaMaterias = array();
for ($j = 0; $j < count($notas[0]); $j++) {
    $sumaMateria = 0;
    for ($i = 0; $i < count($notas); $i++) {
        $sumaMateria += $notas[$i][$j];
    }
    $mediaMateria = $sumaMateria / count($notas);
    $mediaMaterias[] = $mediaMateria;
    echo "Materia $j: $mediaMateria<br>";
}

// f. Mostrar la media por alumno para todas las materias.
echo "<br>f. Media por alumno para todas las materias:<br>";
foreach ($notas as $alumnoNotas) {
    $mediaAlumno = array_sum($alumnoNotas) / count($alumnoNotas);
    echo "Alumno: " . implode(", ", $alumnoNotas) . " - Media: $mediaAlumno<br>";
}
?>
</body>
</html>
