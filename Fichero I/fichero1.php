<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $nombre = str_pad(substr($_POST['nombre'], 0, 40), 40);
    $apellido1 = str_pad(substr($_POST['apellido1'], 0, 40), 40);
    $apellido2 = str_pad(substr($_POST['apellido2'], 0, 40), 40);
    $fechaNacimiento = str_pad($_POST['fechaNacimiento'], 10);
    $localidad = str_pad(substr($_POST['localidad'], 0, 27), 27);

    
    $alumnoData = $nombre . $apellido1 . $apellido2 . $fechaNacimiento . $localidad . PHP_EOL;

   
    $file = 'files/alumnos1.txt';

   
    $fp = fopen($file, 'a');

    if ($fp) {
       
        fwrite($fp, $alumnoData);

        
        fclose($fp);

        echo 'Datos del alumno almacenados correctamente en files';
    } else {
        echo 'Error al abrir el archivo para escritura.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Alumnos</title>
</head>
<body>
    <h2>Formulario de Alumnos</h2>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido1">Apellido1:</label>
        <input type="text" name="apellido1" required><br>

        <label for="apellido2">Apellido2:</label>
        <input type="text" name="apellido2" required><br>

        <label for="fechaNacimiento">Fecha de Nacimiento (YYYY-MM-DD):</label>
        <input type="text" name="fechaNacimiento" required><br>

        <label for="localidad">Localidad:</label>
        <input type="text" name="localidad" required><br>

        <input type="submit" value="Guardar Datos">
    </form>
</body>
</html>
