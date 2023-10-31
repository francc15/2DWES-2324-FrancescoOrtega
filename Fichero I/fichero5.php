<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = 'nombre_de_tu_archivo.txt'; // Cambia esto al nombre de tu archivo
    $operacion = $_POST['operacion'];

    if (file_exists($filename)) {
        switch ($operacion) {
            case 'mostrar':
                // Leer el contenido del archivo y mostrarlo
                $contenido = file_get_contents($filename);
                echo "<h2>Contenido del archivo:</h2>";
                echo "<pre>$contenido</pre>";
                break;
            
            case 'eliminar':
                // Eliminar el archivo
                if (unlink($filename)) {
                    echo "El archivo ha sido eliminado.";
                } else {
                    echo "Error al eliminar el archivo.";
                }
                break;
            
            default:
                echo "Operación no válida.";
                break;
        }
    } else {
        echo "El archivo no existe. Por favor, asegúrate de que el archivo esté en la ubicación correcta.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Operaciones con Archivos</title>
</head>
<body>
    <h2>Operaciones con Archivos</h2>
    <form method="post" action="">
        <label for="operacion">Selecciona una operación:</label>
        <select name="operacion">
            <option value="mostrar">Mostrar Contenido</option>
            <option value="eliminar">Eliminar Archivo</option>
        </select>
        <input type="submit" value="Realizar Operación">
    </form>
</body>
</html>
