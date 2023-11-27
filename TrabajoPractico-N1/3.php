<?php
$A= 33;

$resultado1= !(($A>10)) && ($A<20);
        /*  ! (true) y (false)
            false y false
              false*/
var_dump($resultado1);

$resultado2= (($A>10) || !($A<20));
/*           (true) o no (false)
             true o true
             true
*/ 
var_dump($resultado2);