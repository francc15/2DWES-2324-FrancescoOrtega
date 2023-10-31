<?php
$filename = 'nombre_de_archivo.txt'; 

if (file_exists($filename)) {
   
    $contenido = file_get_contents($filename);

 
    $lineas = explode(PHP_EOL, $contenido);

   
    $lineasRelevantes = array_slice($lineas, 0, 10);

    echo "<h2>Datos más relevantes del archivo:</h2>";
    echo "<ul>";
    foreach ($lineasRelevantes as $linea) {
        echo "<li>" . htmlspecialchars($linea) . "</li>";
    }
    echo "</ul>";
} else {
    echo "El archivo no existe. Por favor, asegúrate de que el archivo esté en la ubicación correcta.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Datos Relevantes del Archivo</title>
</head>
<body>
    <h2>Datos Relevantes del Archivo</h2>
    <p>Selecciona un archivo y el programa mostrará los primeros 10 datos más relevantes.</p>
</body>
</html>
