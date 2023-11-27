<?php
/* Realizar la operación de potenciación 
(a*) de dos valores enteros positivos,
con multiplicaciones. */
$numA = readline("ingrese un numero : "); // 10
$cantElevado = readline("ingrese un numero : "); // 2
$resultado = 1; //cualquier número elevado a la potencia 0 es 1
                // 0 < 2
                //1<2
                // 2<2
for ($i = 0; $i < $cantElevado; $i++) {
    //1 * 10= 10 * 10= 100
    $resultado *= $numA;
}
echo "$numA elevado a la $cantElevado es igual a $resultado";
