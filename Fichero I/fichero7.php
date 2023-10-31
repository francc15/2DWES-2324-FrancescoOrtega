<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operacion = $_POST['operacion'];
    $archivoOrigen = $_POST['archivo_origen'];
    $archivoDestino = $_POST['archivo_destino'];

    if (!file_exists($archivoOrigen)) {
        echo "El archivo de origen no existe.";
    } else {
        switch ($operacion) {
            case 'copiar':
                if (copy($archivoOrigen, $archivoDestino)) {
                    echo "El archivo se ha copiado exitosamente.";
                } else {
                    echo "Error al copiar el archivo.";
                }
                break;

            case 'mover':
                if (rename($archivoOrigen, $archivoDestino)) {
                    echo "El archivo se ha movido exitosamente.";
                } else {
                    echo "Error al mover el archivo.";
                }
                break;

            default:
                echo "Operación no válida.";
                break;
        }
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
            <option value="copiar">Copiar Archivo</option>
            <option value="mover">Mover Archivo</option>
        </select><br>

        <label for="archivo_origen">Archivo de Origen:</label>
        <input type="text" name="archivo_origen" required><br>

        <label for="archivo_destino">Archivo de Destino:</label>
        <input type="text" name="archivo_destino" required><br>

        <input type="submit" value="Realizar Operación">
    </form>
</body>
</html>
