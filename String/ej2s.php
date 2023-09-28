<HTML>
<HEAD>
<TITLE> EJ2-Conversion IP decimal a Binario </TITLE>
</HEAD>
<BODY>
<?php
$ip = "192.18.16.204";
$digito = explode(".", $ip);
$ip_digitos = array();

function dec2bin($num) {
    $bin = '';
    while ($num > 0) {
        $bin = ($num % 2) . $bin;
        $num = (int)($num / 2);
    }
    return str_pad($bin, 8, "0", STR_PAD_LEFT);
}

foreach ($digito as $numero) {
    $ip_digitos[] = dec2bin((int)$numero);
}

var_dump($ip_digitos);
?>
</BODY>
</HTML>
