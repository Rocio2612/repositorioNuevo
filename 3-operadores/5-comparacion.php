<?php
//comparacion

/*
== ¿Son los valores iguales?
=== ¿Son los valores iguales y del mismo tipo?
!= ¿Los valores no son iguales entre sí?
<> ¿Los valores no son iguales entre sí?
!== ¿Los valores no son iguales y del mismo tipo?
> El valor es mayor que
>= El valor es mayor o igual que
< El valor es menor que
<= El valor es menor o igual que
*/

var_dump(8=="8");//true
var_dump(8==7); // false
var_dump(8==="8");//false
var_dump(8===8); // true
var_dump(8!="8");//false
var_dump(8<>"8");//false
var_dump(8!=="8"); // true
var_dump(8 > 7);//true
var_dump(8 < 7);// false
var_dump(8 <= 8);//true
var_dump(8 >= 8);//true