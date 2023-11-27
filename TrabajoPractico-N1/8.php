<?php

$A=rand(-10, 10);
$B=rand(-10, 10);
$C=rand(-10, 10);
$D=rand(-10, 10);
$E=rand(-1, 1 );
$F=rand(-10, 10);
$G=rand(-10, 10);

$a= $A>0 && $B<0;
var_dump($A);
var_dump($B);
var_dump($a);
echo PHP_EOL;
//--------------------------
$b= $A <> $B && $B <> $C && $A<> $C;
var_dump($A);
var_dump($B);
var_dump($C);
var_dump($b);
echo PHP_EOL;
//--------------------------
$c= !($E==0) && !($F > $G);
var_dump($E);
var_dump($F);
var_dump($G);
var_dump($c);
echo PHP_EOL;
//--------------------------
$d= ($A<$B) && ($B<$C) || ($A>$B) && ($B>$C);
var_dump($A);
var_dump($B);
var_dump($C);
var_dump($d);
echo PHP_EOL;
//--------------------------
$e= ($F<0) && ($E>0) || !($F>0) && !($E<0);
var_dump($E);
var_dump($F);
var_dump($e);