<?php
/* Leer una variable N de tipo entero e informar si el numero 
es positivo negativo o cero y también si es par, impar o cero. 
El número cero no es ni positivo ni negativo ni par ni impar. */

$num= readline("ingrese un numero");
if ($num==0){
    echo "el numero es igual a cero". PHP_EOL;
}else {
    echo ($num%2==0) ? "el numero es par" .PHP_EOL : "el numero es impar";
    echo ($num>0) ? "el numero es positivo" .PHP_EOL : "el numero es negativo";

} 
