<?php
/* Imprimir los números pares desde N 
(siendo N un número par que se lee) 
en forma descendente hasta 2. */


$num=readline("ingrese un numero par: ");
if ($num % 2==0) {
    for ($i=$num; $i >= 2 ; $i-=2) { 
        echo $i . PHP_EOL;
    }
 } else {
        echo "ingrese un numero par";
}
