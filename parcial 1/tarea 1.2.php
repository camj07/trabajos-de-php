<html>
<head>
</head>
<body>
<h1>5630. Colegiatura</h1>

<h2>Descripción</h2>
La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar

<h2>Entrada</h2>
El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.

<h2>Salida</h2>
Un numero entero C con el precio a pagar. Debe de ir con un $.

<h2>Ejemplo</h2>

<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>5 <br>
                9.6 
            </td>
            <td>$5600</td>
        </tr>
        <tr>
            <td>8<br> 
                7.8
            </td>
            <td>$14848</td>
        </tr>
        <tr>
            <td>2 <br>
                8
            </td>
            <td>$3712</td>
        </tr>
    </table>


</table>


<?php

function calcularColegiatura($numMaterias, $promedio) {
    $costoMateria = 1600;
    $colegiatura = $numMaterias * $costoMateria;
    
    if ($promedio >= 9.0) {
        // Descuento del 30% si el promedio es mayor o igual a 9
        $colegiatura -= $colegiatura * 0.3;
        // No se cobra IVA
    } else {
        // Se aplica el IVA del 16%
        $colegiatura += $colegiatura * 0.16;
    }
    
    return $colegiatura;
}

// Proporcionar los números para el número de materias y el promedio
$numMaterias = 5;
$promedio = 9.6;

// Calcular la colegiatura
$colegiatura = calcularColegiatura($numMaterias, $promedio);

// Formatear la salida
echo " la colegiatura es: $" . number_format($colegiatura, 2);

?>


