<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
<div align="center">
    <h3>problema 1</h3>
    <h3>Funciones raras</h3>
    <form action="funcionRara.php" method="post">
        <table>
            <tr>
                <td>N1:</td>
                <td><input type="text" name="txtN1"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
</html>  
</body>


<?php
function evaluarFuncion($x) {
    // Definimos la función según los ejemplos dados
    $resultado = -($x ** 2) + 40 * $x + 162;
    return $resultado;
}

// Definir el valor de entrada directamente
$entrada = -78; // Cambia este valor según sea necesario

// Evaluar la función con el valor de entrada
$salida = evaluarFuncion($entrada);

// Imprimir el resultado
echo "Resultado: " . $salida;
?>

