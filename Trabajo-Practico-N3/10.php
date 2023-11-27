<?php
/* Imprimir los 100 primeros números de Fibonacci. 
Recuerde que un número de Fibonacci se 
calcula como la suma de los dos anteriores */

// los primeros dos numeros de fibo es 0 y 1
$fibo0=0;
$fibo1=1;
/* echo "fibo 0: $fibo0" .PHP_EOL;
echo "fibo 1: $fibo1" . PHP_EOL;
// empieza en la tercera posicion  (i=2), se ejecuta 100 veces (i<100)
for ($i = 2 ; $i <= 100; $i++) {
    //calcular el siguiente numero de fibo.
    $fiboN=$fibo1+$fibo0; // f1+f0=1/ f1=1+f0=1=2 / f1=2y f0=1=3 El sig es igual a los dos anteriores
    $fibo0=$fibo1; //f0=1,f1=1,f0=1, f0=2
    $fibo1=$fiboN; //f1=1 fn=1/ f1=2/ f1=3 toma el valor de recien (1)
    echo "fibo n° $i: $fiboN" . PHP_EOL;
} */

//mostrar solo el numero 50
//ejecuto "echo" afuera, hasta el num q quiero

for ($i = 2; $i <=50; $i++) {
    //calcular el siguiente numero de fibo.
    $fiboN=$fibo1+$fibo0; // f1+f0=1/ f1=1+f0=1=2 / f1=2y f0=1=3 El sig es igual a los dos anteriores
    $fibo0=$fibo1; //f0=1,f1=1,f0=1, f0=2
    $fibo1=$fiboN; //f1=1 fn=1/ f1=2/ f1=3 toma el valor de recien (1)
}
echo "fibo n°" . $i -1 . ": $fiboN" . PHP_EOL;


