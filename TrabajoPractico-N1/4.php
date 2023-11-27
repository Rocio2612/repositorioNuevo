<?php
$A=20;
$B=$A;
$C=15;
$D=10;

$resultado = (($A==$B)||($B>$C)|| ($C<$D));
/* resultado= true o true o false
   resultado=  true o false
   resultado=  true
*/
var_dump($resultado);