<?php
//constantes
//utilizar "define". Darle dos valores (nombre de la variable , tipo de valor)
define("nueva_constante","12");
//se ejecuta sin el signo $, solo se toma como constantes
echo nueva_constante;
echo PHP_EOL;  // "\n"
define ("constante_num", 123);
echo constante_num;
echo PHP_EOL;

define("NUEVA_CONSTANTE", "Valor de tipo cadena"); // Esto es una constante de cadena

define("CONSTANTE_NUMERO", -1234); // Esto es una constante numerica

define("CONSTANTE_FLOAT", 12.34); // Esto es una constante con punto flotante

define('CONSTANTE_BOOLEANA', false); // Esto es una constante booleana

//define('PHP_EOL', "\n");


echo NUEVA_CONSTANTE . PHP_EOL; // Esto es un echo de una constante Notar que no lleva el simbolo $

echo CONSTANTE_NUMERO . PHP_EOL; // Esto es un echo de una constante

echo CONSTANTE_FLOAT . PHP_EOL; // Esto es un echo de una constante

echo CONSTANTE_BOOLEANA . PHP_EOL; // Esto es un echo de una constante