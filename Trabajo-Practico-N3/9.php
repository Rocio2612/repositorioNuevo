<?php
/* Imprimir los números de 1 a N 
(siendo N un número que se lee) cada 
uno con su respectivo factorial. */
$num=readline("ingrese un numero: ");
//variable que acumule las multiplicaciones sucesivas
$factorial=1;// usar el elemento neutro en la multiplicacion= 1
//empieza posicion 1
for ($i=1; $i <= $num; $i++) { 
    //fac(0)=acumula lo de la anterior * i(valor de i)
    $factorial= $factorial* $i; // 1= 1* 1/ 1= 1 * 2/ 2= 2 * 3= 6...
    //$factorial*= $i; forma de php
} echo "$num! = $factorial";