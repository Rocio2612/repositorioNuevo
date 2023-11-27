<?php
//tipo de datos booleanos

$valorVerdadero= true;
$valorFalso= false;

/* var_dump($valorVerdadero);
echo $valorVerdadero, PHP_EOL;
var_dump($valorFalso);
echo $valorFalso; //no se ve */

$tieneValor= 1;
echo "tiene valor vale $tieneValor: " . (bool)$tieneValor;
