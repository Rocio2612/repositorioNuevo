<?php
/* Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003).
Mostrar la fecha con el respectivo nombre del mes (ej.: 10-mayo-2003). 
Si el número leído para el mes no está entre 1 y 12 imprimir un
mensaje de error. Comprobar que el día se encuentre entre 1 y 31 y
el año sea mayor que 2000. */

$dia = readline("ingrese un dia: ");
$mes = readline("ingrese un mes: ");
$año = readline("ingrese un año: ");

if ($dia > 0 && $dia <=31) {
    if ($año > 2000) {
        switch ($mes) {
            case 1:$mes="enero"; break;
            case 2:$mes="febrero"; break;
            case 3:$mes="marzo"; break;
            case 4:$mes="abril"; break;
            case 5:$mes="mayo"; break;
            case 6:$mes="junio"; break;
            case 7:$mes="julio"; break;
            case 8:$mes="agosto"; break;
            case 9:$mes="septiembre"; break;
            case 10:$mes="octubre"; break;
            case 11:$mes="noviembre"; break;
            case 12:$mes="diciembre"; break;
            default: echo "mes erroneo";
        }
        echo "$dia-$mes-$año";
    } else{
        echo "año erroneo";
    } 
}else{
    echo "dia erroneo";
}


