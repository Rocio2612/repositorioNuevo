<?php
//ordenar de forma creciente tres valores diferentes A,B,C
$A= readline("ingrese numero 1= ");
$B= readline("ingrese numero 2= ");
$C= readline("ingrese numero 3= ");

if ($A==$B && $A==$C && $C==$B){
    echo "ingrese numeros diferentes";
}else {
    if ($A>$B && $A>$C){
        if ($B>$C)
        echo "$C $B $A";
    else
        echo "$B $C $A";
    } elseif ($B>$A && $B>$C){
        if ($A>$C)
        echo "$B $A $C";
    else
        echo "$B $C $A";
    } else {
        if ($B>$A)
        echo "$C $B $A";
    else
        echo "$C $A $B";
    }
}
    

