<?php

$file = 'files/alumnos2.txt';


if (file_exists($file)) {

    $alumnos = file($file, FILE_IGNORE_NEW_LINES);

   
    $numFilas = count($alumnos);

    
    echo "<html><head><title>Contenido de alumnos2.txt</title></head><body>";
    echo "<h2>Contenido de alumnos2.txt</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Fecha de Nacimiento</th><th>Localidad</th></tr>";

    foreach ($alumnos as $alumno) {
        $data = explode("##", $alumno);
        echo "<tr>";
        foreach ($data as $field) {
            echo "<td>" . htmlspecialchars($field) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    echo "<p>Número de filas leídas: $numFilas</p>";
    echo "</body></html>";
} else {
    echo "El archivo alumnos2.txt no existe.";
}
?>

