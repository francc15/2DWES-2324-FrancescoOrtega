<html>
<head>
    <title>modulos</title>
</head>
<body>
<?php
// Crear un array 
$alumnos = array(
    "Francesco" => 20,
    "Marcos" => 22,
    "Pedro" => 19,
    "Jose" => 21,
    "Ariana" => 18
);

//Mostramos el contenido del array
echo "Mostrar el contenido del array utilizando bucles for:\n <br>";
$alumnoKeys = array_keys($alumnos);
$numAlumnos = count($alumnoKeys);

for ($i = 0; $i < $numAlumnos; $i++) {
    $nombre = $alumnoKeys[$i];
    $edad = $alumnos[$nombre];
    echo "Nombre: $nombre, Edad: $edad\n <br>";
}

// b. Situar el puntero en la segunda posición del array y mostrar su valor
echo "\nb. Valor en la segunda posición del array:\n <br>";
reset($alumnos); // Reiniciar el puntero al principio
next($alumnos); // Avanzar al siguiente elemento (segunda posición)
$segundoAlumno = current($alumnos); // Obtener el valor
echo "Nombre:  " . key($alumnos) . ", Edad: $segundoAlumno\n <br>";

// c. Avanzar una posición y mostrar el valor
echo "\nc. Valor avanzado una posición:\n <br>";
next($alumnos); // Avanzar al siguiente elemento (tercera posición)
$tercerAlumno = current($alumnos); // Obtener el valor
echo "Nombre:  " . key($alumnos) . ", Edad: $tercerAlumno\n <br>";

// d. Colocar el puntero en la última posición y mostrar el valor
echo "\nd. Valor en la última posición del array:\n <br>";
end($alumnos); // Colocar el puntero en el último elemento
$ultimoAlumno = current($alumnos); // Obtener el valor
echo "Nombre:  " . key($alumnos) . ", Edad: $ultimoAlumno\n <br>";

// e. Ordenar el array por orden de edad (de menor a mayor) y mostrar la primera y última posición
echo "\ne. Ordenar el array por orden de edad y mostrar la primera y última posición:\n <br>";
asort($alumnos); // Ordenar el array por edad (de menor a mayor) preservando las claves

$alumnosKeys = array_keys($alumnos);
$primerAlumnoOrdenado = reset($alumnos);
$ultimoAlumnoOrdenado = end($alumnos);

echo "Primer Alumno (menor edad): Nombre: " . $alumnosKeys[0] . ", Edad: $primerAlumnoOrdenado\n <br>";
echo "Último Alumno (mayor edad): Nombre: " . end($alumnosKeys) . ", Edad: $ultimoAlumnoOrdenado\n <br>";

?>
</body>
</html>
