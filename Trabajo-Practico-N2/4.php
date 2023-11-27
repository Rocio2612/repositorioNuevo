<?php
/* Escribir un algoritmo que con solo ingresar los lados de un 
triángulo rectángulo le dice al usuario si es isoceles, 
escaleno o equilatero. */

$lado1= readline("ingrese un lado ");
$lado2= readline("ingrese un lado ");
$lado3= readline("ingrese un lado ");

if ($lado1==$lado2 && $lado1==$lado3 && $lado2==$lado3){
    echo "es un triangulo equilatero";
}elseif ($lado1==$lado2 || $lado1==$lado3 || $lado2==$lado3){
    echo "es un triangulo isoceles";
}else echo "es un traignulo escaleno";