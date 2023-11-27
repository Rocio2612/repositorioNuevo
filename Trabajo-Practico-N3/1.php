<?php
/*Hacer los algoritmos que calculen el promedio de una serie 
de notas hasta que se ingrese una nota negativa, utilizar las
tres estructuras repetitivas. ¿Cuál no se puede utilizar?*/

$nota=readline("ingrese una nota: ");
$contador=0;
$suma=0;

if ($nota>=0){
    do {
        $suma+=$nota;
        $contador++;
        $nota=readline("ingrese nota: ") . PHP_EOL;
    } while ($nota>=0);
    echo "ingreso una nota negativa " . PHP_EOL;
} 
$promedio=($contador) ? $suma/$contador : $error;
echo "su promedio es: $promedio";

