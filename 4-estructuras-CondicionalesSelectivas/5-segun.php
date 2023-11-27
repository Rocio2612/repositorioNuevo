<?php
// Declaración de switch - Según

$dia=readline("ingrese el num del dia de la semana: ");
/* 
if ($dia==1){
    echo "lunes";
}elseif ($dia==2){
    echo "martes";
}elseif ($dia==3){
    echo "miercoles";
}elseif ($dia==4){
    echo "jueves";
}elseif ($dia==5){
    echo "viernes";
}elseif ($dia==6){
    echo "sabado";
}elseif ($dia==7){
    echo "domingo";
}else echo "numero erroneo"; */

/*lo que me permite el "break" es salir 
de la estructura,solo lanza el dia elegio*/
switch ($dia){
    case '1';
        echo "lunes";
    break;
    case '2';
        echo "martes";
    break;
    case '3';
        echo "miercoles";
    break;
    case '4';
        echo "jueves";
    break;
    case '5';
        echo "viernes";
    break;
    case '6';
         echo "sabado";
    break;
    case '7';
        echo "domingo";
    break;
    default;
    echo "dia incorrecto";
    break;   
}