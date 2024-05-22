<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Valor de Palabra</title>
</head>
<body>
<div align="center">
    <h3>problema 2</h3>
    <h3>Juegos de letras</h3>
    <form action="juegodeletras.php" method="post">
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
    <?php
    // Verificar si se ha enviado una palabra
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la palabra ingresada por el usuario
        $palabra = strtoupper($_POST["txtN1"]);
        
        // Función para calcular el valor de la palabra
        function calcularValorPalabra($palabra) {
            $valorTotal = 0;
            // Definir los valores de las letras
            $valores = array(
                'Q' => 1, 'A' => 1, 'Z' => 1,
                'W' => 2, 'S' => 2, 'X' => 2,
                'E' => 3, 'D' => 3, 'C' => 3,
                'R' => 4, 'F' => 4, 'V' => 4,
                'T' => 5, 'G' => 5, 'B' => 5,
                'Y' => 6, 'H' => 6, 'N' => 6,
                'U' => 7, 'J' => 7, 'M' => 7,
                'I' => 8, 'K' => 8,
                'O' => 9, 'L' => 9,
                'P' => 0
            );
            // Calcular el valor total de la palabra
            $letras = str_split($palabra);
            foreach ($letras as $letra) {
                if (isset($valores[$letra])) {
                    $valorTotal += $valores[$letra];
                }
            }
            return $valorTotal;
        }

        // Calcular el valor de la palabra
        $valor = calcularValorPalabra($palabra);
        // Mostrar el resultado
        echo "El valor de la palabra '$palabra' es: $valor";
    } else {
        // Si no se envió una palabra, mostrar un mensaje de error
        echo "No se ha recibido ninguna palabra.";
    }
    ?>
    
</body>
</html>
