<?php
$A= 10;
$B= 12;
$C= 13;
$D= 10;

$resultado1= (($A>$B)|| ($A<$C) && ($A==$C) || ($A>=$B));
/* resultado1= false o true y false o false
   resultado1= false o false o false
   resultado1= false
*/
var_dump($resultado1);

$resultado2= (($A>=$B) || ($A<$D) && ($A>=$D) && ($C>$D));
/* resultado= false o false y true y true
   resultado= false o false y true
   resultado= false o false
   resultado= false
*/
var_dump($resultado2);

$resultado3= ! ($A==$C) && ($C>$B);
/* resultado= no false y true
   resultado= true y true
   resultado= true
*/
var_dump($resultado3);