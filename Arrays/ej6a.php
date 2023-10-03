<html>
<head>
    <title>modulos</title>
</head>
<body>
<?php
$modulos1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
$modulos2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
$modulos3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];

// Eliminar el módulo 
$modulos2 = array_diff($modulos2, ["Mecanizado"]);

// Unir los tres arrays en uno solo
$modulosCombinados = $modulos1 + $modulos2 + $modulos3;

// Invertir el orden del array
$modulosInversos = array_reverse($modulosCombinados);

// Mostrar el array resultante en orden inverso
print_r($modulosInversos);
?>
</body>
</html>
