<?php
/* do-while - hacer mientras
el bloque de código se ejecuta primero y
luego se verifica la condición. */
//-------------------------------------------

/*mientras nota sea menor a 10 va a seguir
pidiendo que ingrese una nota. Una vez ingresado
una nota mayor a 10 finaliza el bucle*/
/* do {
    $nota= readline("ingrese nota: ");
} while ($nota<10);
echo "nota final: $nota"; */
//----------------------------------------------

/* $contador=readline("ingrese un numero: "); // a partir del numero dicho empieza a sumar de a uno
// $contador= 0; // inicia desde 0
do {
    echo "conteo: $contador" . PHP_EOL;
    $contador++;
} while ($contador <100); // hasta que llegue a 100
echo "el total es: " . $contador ; */
//----------------------------------------------

$entrada = "";
do {
    echo "Ingresa 'salir' para finalizar: ";
    $entrada = readline();
    echo "Ingresaste: " . $entrada . "\n";
} while ($entrada !== "salir"); // mientras entrada sea disinto de salir sigue ejecutando 