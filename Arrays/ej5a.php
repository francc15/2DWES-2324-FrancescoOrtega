<?php
// Definir tres arrays 
$modulos1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
$modulos2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
$modulos3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];

// Unir los tres arrays en uno 
$modulosCombinados = $modulos1;
foreach ($modulos2 as $modulo) {
    $modulosCombinados[] = $modulo;
}
foreach ($modulos3 as $modulo) {
    $modulosCombinados[] = $modulo;
}

// Imprimir el resultado
print_r($modulosCombinados);



// Definir tres arrays con los módulos
$modulos1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
$modulos2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
$modulos3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];

// Unir los tres arrays en uno único usando array_merge()
$modulosCombinados = array_merge($modulos1, $modulos2, $modulos3);

// Imprimir el resultado
print_r($modulosCombinados);


// Definir tres arrays con los módulos
$modulos1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
$modulos2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
$modulos3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];

// Unir los tres arrays en uno único usando array_push()
$modulosCombinados = [];

array_push($modulosCombinados, ...$modulos1);
array_push($modulosCombinados, ...$modulos2);
array_push($modulosCombinados, ...$modulos3);

// Imprimir el resultado
print_r($modulosCombinados);
?>
