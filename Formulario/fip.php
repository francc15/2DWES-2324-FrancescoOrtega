<?php
function ipToBinary($ip) {
    $binaryIp = '';
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        $ipSegments = explode('.', $ip);
        foreach ($ipSegments as $segment) {
            $binaryIp .= str_pad(decbin($segment), 8, '0', STR_PAD_LEFT);
        }
        return $binaryIp;
    } else {
        return "La IP introducida no es válida.";
    }
}

$ipResult = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ip'])) {
    $ip = $_POST['ip'];
    $ipResult = ipToBinary($ip);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Obtener IP en formato binario</title>
</head>
<body>
    <form method="post" action="ip.php">
        <label for="ip">Introduce una direccion IP:</label>
        <input type="text" name="ip" id="ip">
        <input type="submit" value="Obtener IP en formato binario">
    </form>

    <?php if (!empty($ipResult)): ?>
        <p>Resultado: <?php echo $ipResult; ?></p>
    <?php endif; ?>
</body>
</html>
