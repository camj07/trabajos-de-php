<?php

// Generar un arreglo de entre 1 y 1000 elementos con calificaciones aleatorias
$calificaciones = [];
$num_alumnos = rand(1, 1000);

for ($i = 0; $i < $num_alumnos; $i++) {
    $calificaciones[] = rand(0, 10);
}

// Obtener el promedio de todas las calificaciones
$promedio = array_sum($calificaciones) / count($calificaciones);
$promedio = round($promedio, 2);

// Definir calificaciones de aprobación y reprobación
$calificacion_aprobacion = 6;
$calificacion_reprobacion = 5;

// Obtener la cantidad de alumnos que tienen calificaciones mayores o iguales al promedio
$aprobados = 0;
$reprobados = 0;

foreach ($calificaciones as $calificacion) {
    if ($calificacion >= $calificacion_aprobacion) {
        $aprobados++;
    } else {
        $reprobados++;
    }
}

// Calcular porcentajes
$porcentaje_aprobados = ($aprobados / $num_alumnos) * 100;
$porcentaje_reprobados = ($reprobados / $num_alumnos) * 100;

// Calcular la desviación estándar
$suma_cuadrados = 0;
foreach ($calificaciones as $calificacion) {
    $suma_cuadrados += pow($calificacion - $promedio, 2);
}
$desviacion_estandar = sqrt($suma_cuadrados / count($calificaciones));

// Imprimir resultados en una tabla HTML
echo "<table border='1' width='30%'>";
echo "<tr><th>Calificaciones</th></tr>";
foreach (array_chunk($calificaciones, 30) as $row) {
    echo "<tr>";
    foreach ($row as $calificacion) {
        echo "<td>$calificacion</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";
echo "Promedio de calificaciones: $promedio<br>";
echo "Cantidad de alumnos aprobados: $aprobados (". number_format($porcentaje_aprobados, 2) . "%)<br>";
echo "Cantidad de alumnos reprobados: $reprobados (". number_format($porcentaje_reprobados, 2) . "%)<br>";
echo "Desviación estándar: $desviacion_estandar";

?>
