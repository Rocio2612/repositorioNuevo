<?php
/* Escribir un algoritmo que permita dada la 
fecha de nacimiento de una persona saber cuál
es suecho zodiacal. */

$dia = readline("ingrese un dia: ");
$mes = readline("ingrese un mes: ");

 
if($dia>0 && $dia<=31){
            echo "Su signo es: ";
            switch($mes){
                case 1: echo ($dia<20) ? "Capricornio" : "Acuario"; break; 
                case 3:echo ($dia<21) ? "Piscis" : "Aries "; break;
                case 4:echo ($dia<20) ? "Aries " : "Tauro "; break;
                case 5:echo ($dia<21) ? "Tauro " : "Géminis "; break;
                case 6:echo ($dia<21) ? "Géminis " : "Cáncer "; break;
                case 7:echo ($dia<23) ? "Cáncer " : "Leo "; break;
                case 8:echo ($dia<23) ? "Leo " : "Virgo "; break;
                case 9:echo ($dia<23) ? "Virgo " : "Libra "; break;
                case 10:echo ($dia<23) ? "Libra " : "Escorpio "; break;
                case 11:echo ($dia<22) ? "Escorpio " : "Sagitario "; break;
                case 12:echo ($dia<22) ? "Sagitario " : "Capricornio"; break;
                default: echo "mes incorrecto";
            }
    } else {
        echo "día erroneo";
    }