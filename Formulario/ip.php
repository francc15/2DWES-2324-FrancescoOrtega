<?php
function ipToBinary($ip) {
    $binaryIp = '';
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        $ipSegments = explode('.', $ip);
        foreach ($ipSegments as $segment) {
            $binaryIp .= str_pad(decbin($segment), 8, '0', STR_PAD_LEFT);
        }
    } else {
        echo "La IP introducida no es válida.";
        return;
    }
    echo "Dirección IP en formato binario: $binaryIp";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ip'])) {
    $ip = $_POST['ip'];
    ipToBinary($ip);
}
?>
