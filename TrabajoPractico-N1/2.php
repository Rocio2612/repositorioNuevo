<?php

$A= 10;
$B= 20;

$resultado= ! (!($A!=10) || (20>$B) && ($A==10) && false) && true;
/*no ( (true) o (false) y (true) y (false) ) y true
  no  (true) y true
  false y true
  false
*/
var_dump($resultado);
