<?php
$M= 8;
$N= 9;
$R= 5;
$S= 5;
$T= 4;
$V= 77;

$resultado1 = !((($M > $N) && ($R > $S)) || (!($T < $V) && ($S > $M)));
/*  resultado= no (false y false) o ( no true y false)
   resultado= no false o false
   resultado=  no false
   resultado= true  */
var_dump($resultado1);
 
