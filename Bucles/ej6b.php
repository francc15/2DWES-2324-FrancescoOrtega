<html>
<head>
    <title>Información de Dirección IP</title>
</head>
<body>
<?php
// numero a calcular factorial
$numero = 5;

$factorial = 1;
$factorialExpresion = "";

for ($i = $numero; $i >= 1; $i--) {
    $factorial *= $i;
    $factorialExpresion .= $i;
    if ($i > 1) {
        $factorialExpresion .= "x";
    }
}

echo "$numero! = $factorialExpresion = $factorial";
?>
</body>
</html>