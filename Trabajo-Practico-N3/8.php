<?php
/* Obtener el resto de la división entera
a%b de dos números enteros positivos 
mediante restas. */

$numA=readline("ingrese un numero positivo: ");
$numB=readline("ingrese un numero positivo: ");
$resto=$numA;
$cociente=0;
// resto=10>=2 /8-2/ 6-2/ 4-2/ 2-2 = (5)
while ($resto>= $numB) { 
    //10-2=8-2=6-2=4-2=2-2= (0)
    $resto-=$numB; 
    // 1,2,3,4,5
    $cociente++;
}echo "resto= $resto";