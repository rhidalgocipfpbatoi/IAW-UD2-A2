<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>IAW-UD2-A2-8</title>
</head>
<body>
<h3>Indetificador de errores y mensajes de error</h3>

<?php

/**
 * A partir del script php facilitado:
 * 1. Establece la directiva correspondiente (en el propio script) para que el intérprete muestre todos los mensajes de **error,
 *    advertencia y alerta**.
 * 2. Escribe un comentario que se visualice en el html resultante sobre el tipo de mensaje que se está produciendo en cada caso.
 * 3. Refactoriza el código para que no se produzcan los errores.
 */

    $a = 10;
    $b = 50;
    $c = 0;
    $cadena = "Hola mundo";

    $resultado1 =( $a + $b) / $c;

    $rand = rand(0, 10);

    echo "El resultado es <br> resultado 1 = ", $resultado;

    parse_str($cadena);

?>
</body>
</html>

