<html>
<head></head>
<body>
<h1>12618. Practicando con formulas</h1>

<h2>Descripción</h2>
Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z.

<h2>Entrada</h2>
Un real a.Puedes suponer que 1<=a<=100 .

<h2>Salida</h2>
Un real que sea el valor de z impreso con tres puntos decimales.
<h2>Ejemplo</h2>

<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>33.562</td>
            <td>0.148</td>
        </tr>
        <tr>
            <td>72.569</td>
            <td>0.069</td>
        </tr>
        <tr>
            <td>64.835</td>
            <td>0.077</td>
        </tr>
    </table>


</table>

<?php

function calcularZ($A) {
    $X = 3 * $A + 15;
    $Y = ($X + 3) / ($X + 1);
    $Z = (5 * $X + 7 * $Y) / ($A * $X * $Y);
    return $Z;
}

$A = 33.562;
$resultado = calcularZ($A);
echo "El resultado es: " . round($resultado, 3);

?>



</body>
</html>
