<?php
// operadores logicos &&, ||, and , or , xor
/*
&&  --> Ambos lados son verdaderos
and --> Ambos lados son verdaderos 

|| --> Cualquiera de los dos lados sólo tiene que ser verdadero
or --> Cualquiera de los dos lados sólo tiene que ser verdadero

Operador O Exclusivo
xor --> Solamente un lado debe ser verdadero
| xor(true, true) = false
| xor(true, false) = true
| xor(false, true) = true
| xor(false, false) = false

Operador de Negación
Verdadero si el valor no es verdadero
| !(true) = false
| !(false) = true
*/

$var1 = (6 > 7); // false
$var2 = (8==8); // true
$var3 = false;
$var4 = true;

var_dump($var1 && $var2);
var_dump($var4 and $var2);

var_dump($var1 || $var2);
var_dump($var1 or $var3);

var_dump($var1 xor $var3);
var_dump($var2 xor $var4);
var_dump($var1 xor $var4);
var_dump($var2 xor $var3);

var_dump(!$var1);
var_dump(!$var2);