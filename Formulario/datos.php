<?php
function saveDataToTextFile($data) {
    $filename = 'datos.txt';
    $file = fopen($filename, 'a'); 
    if ($file) {
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : '';
    $apellido2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

    if (!empty($nombre) && !empty($email) && !empty($sexo)) {
        $data = "$nombre\t$apellido1\t$apellido2\t$email\t$sexo"; 
        saveDataToTextFile($data); 

       
        echo '<html><body>';
        echo '<table border="1">';
        echo '<tr><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Email</th><th>Sexo</th></tr>';
        echo "<tr><td>$nombre</td><td>$apellido1</td><td>$apellido2</td><td>$email</td><td>$sexo</td></tr>";
        echo '</table>';
        echo '</body></html>';
    } else {
        echo 'Los campos obligatorios deben tener valor.';
    }
}
?>

