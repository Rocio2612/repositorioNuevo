<?php
/* FOR- PARA
permite ejecutar un bloque de código un número específico 
de veces.

for (inicialización; condición; incremento/decremento)*/
/* for ($contador=1; $contador < 10 ; $contador++) { 
    echo "conteo: $contador" . PHP_EOL;
}echo "final: " . $contador;
------------------------------- */
$suma=0;
//ingresar hasta 10 numeros. Ordenandose de 1-2-3-4...(num++)
for ($num=1; $num <= 10; $num++) { 
    //pedir al usuario 10 numeros
    $numero=readline("ingrese num $num:  ") . PHP_EOL;
    //sumar los numeros ingresados
    $suma+= $numero;
} echo "total es: " . $suma;