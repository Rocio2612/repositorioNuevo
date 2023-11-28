<?php
/* Ingrese un valor numérico correspondiente a un mes y a continuación muestre todos los meses en
letras que restan para llegar a diciembre del mismo año (por ejemplo, si ingresa 10 debe mostrar
octubre, noviembre y diciembre). Validar que se ingrese un número de mes válido y el proceso
finaliza cuando el operador ingresa el valor cero. Muestre también los valores correctos e
incorrectos ingresados por el usuario. */
$correcto=0;
$incorrecto=0;
do {
    $mes = readline("ingrese valor del mes: ");
    switch ($mes) {
        case 1: 
            echo 'enero' . PHP_EOL; 
        case 2:
            echo 'febrero'. PHP_EOL;
        case 3:
            echo 'marzo'. PHP_EOL;
        case 4:
            echo 'abril'. PHP_EOL;
        case 5:
            echo 'mayo'. PHP_EOL;
        case 6:
            echo 'junio'. PHP_EOL;
        case 7:
            echo 'julio'. PHP_EOL;
        case 8:
            echo 'agosto'. PHP_EOL;
        case 9:
            echo 'septiembre'. PHP_EOL;
        case 10:
            echo 'octubre'. PHP_EOL;
        case 11:
            echo 'noviembre'. PHP_EOL;
        case 12:
            echo 'diciembre'. PHP_EOL;
            $correcto++;
        break;//esto detiene
        default:
           echo "mes incorrecto". PHP_EOL;;
           $incorrecto++;
            break;
    }
} while ($mes != 0);
echo "ingresaste $correcto valores correctos". PHP_EOL;;
echo "ingresaste $incorrecto valores incorrectos";
