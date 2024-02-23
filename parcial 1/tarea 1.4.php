<html>
<body>
<h1>el mayor de tres números.</h1>
<h2>Descripción</h2>

<h2>Entrada</h2>
Escribe tres números enteros , a,b y c 
<h2>Salida</h2>
El número entero mayor de los tres números introducidos.
<h2>Ejemplo</h2>

<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10 <br>
                8 <br>
                -7
            </td>
            <td>10</td>
        </tr>
        <tr>
            <td>10 <br>
                 81 <br>
                101 </td>
            <td>101</td>
        </tr>
        <tr>
            <td> 11 <br>
                 11 <br>
                 11</td>
            <td>11</td>
        </tr>
        <tr>
            <td>10 <br>
                810 <br>
                101</td>
            <td>810</td>
        </tr>
    </table>
</table>
</body>
</html>

<?php
 $a=10;
 $b=8;
 $c=-7;
 if($a>$b and $a>$c)
 {
    echo "El mayor es: ", $a, "<HR>";
 }
?>

<html>
<body>
<h1> ¿Cuántos valen 7?</h1>
<h2>Descripción</h2>
Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7 .
<h2>Entrada</h2>
Dos enteros en el rango de -100 a + 100.
<h2>Salida</h2>
La cantidad de enteros iguales a 7.
<h2>Ejemplo</h2>

<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>-3 8 

            </td>
            <td>0</td>
        </tr>
        <tr>
            <td>7 57
            </td>
            <td>1</td>
        </tr>
        <tr>
            <td>62 7
            </td>
            <td>1</td>
        </tr>
        <tr>
            <td>7 7</td>
            <td>2</td>
        </tr>
    </table>
</table>
</body>
</html>

<?php
 $a=-3;
 $b=8;
 if ($a == 7 && $b == 7) {
     echo " el valor es:2";
 } elseif ($a == 7 || $b == 7) {
     echo " el valor es:1";
 } else {
     echo " el valor es:0" , "<HR>";
 }
 
 ?>

<html>
<body>
<h1>Estaciones del Año</h1>

<h2>Descripción</h2>
Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día 
 y un mes 
 según lo siguiente:
Winter del 21 de diciembre al 20 de marzo
Spring del 21 de marzo al 21 de junio
Summer del 22 de junio al 22 de septiembre
Fall del 23 de septiembre al 20 de diciembre
Considerando la siguiente cantidad de días para cada mes:

<h2>Entrada</h2>
Dos números enteros d y m ,separados por un espacio que corresponden al día y mes de una fecha determinada

<h2>Salida</h2>
Una cadena s que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida

<h2>Ejemplo</h2>

<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td> 15 10</td>
            <td>Fall</td>
        </tr>
        <tr>
            <td> 22 3</td>
            <td>spring</td>
        </tr>
        <tr>
            <td> 31 4</td>
            <td>no existe la fecha</td>
        </tr>
    </table>
</table>
</body>
</html>
<?php

function obtenerEstacion($dia, $mes) {
    // Verificar si la fecha es válida
    if ($mes < 1 || $mes > 12 || $dia < 1 || $dia > 31) {
        return "no existe la fecha";
    }

    // Definir los límites de las estaciones del año
    $primaveraInicio = strtotime('21 March');
    $primaveraFin = strtotime('21 June');
    $otonioInicio = strtotime('23 September');
    $otonioFin = strtotime('20 December');

    // Convertir la fecha dada a una fecha en formato strtotime
    $fecha = strtotime("$dia-$mes");

    // Determinar a qué estación del año pertenece la fecha
    if ($fecha >= $primaveraInicio && $fecha <= $primaveraFin) {
        return "Spring";
    } elseif ($fecha >= $otonioInicio && $fecha <= $otonioFin) {
        return "Fall";
    } else {
        return "no existe la fecha";
    }
}

// Proporciona los números para el día y el mes
$dia = 31;
$mes = 4;

// Obtener la estación del año correspondiente y mostrarla
$estacion = obtenerEstacion($dia, $mes);
echo $estacion;

?>






 