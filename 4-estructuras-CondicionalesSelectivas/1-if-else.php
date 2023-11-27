<?php
// Declaración If/else - Si/Sino
/*
Esto permite la ejecución condicional.
Piensa en ello como una pregunta de sí/no. Si es verdadera,
ejecuta el código. Si no es verdadera, ejecuta el código 
en la sección else (si se proporciona una).
*/

$edad= readline ("ingrese su edad: ");
if ($edad >= 21) {
    echo "es mayor de edad, tiene: $edad" . PHP_EOL;
} else {
    echo "es menor de edad, tiene: $edad" . PHP_EOL;
    echo "acceso denegado" . PHP_EOL;
}
