
<?php
// numero a multiplicar 
$numero = 8;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h2>Tabla de Multiplicar del <?php echo $numero; ?></h2>
    <table border="1">
        <tr>
           
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr>";
            echo "<td>$numero x $i</td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
