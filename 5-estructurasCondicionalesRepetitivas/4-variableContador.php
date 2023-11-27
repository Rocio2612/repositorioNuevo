<?php
/*Una variable CONTADORA- se utiliza para llevar un 
registro del número de repeticiones o iteraciones que se 
han realizado en un bucle.*/
$contador = 0;
for ($i = 1; $i <= 5; $i++) {
    $contador++;
}
echo "El bucle se repitió " . $contador . " veces.";
// Salida: El bucle se repitió 5 vece