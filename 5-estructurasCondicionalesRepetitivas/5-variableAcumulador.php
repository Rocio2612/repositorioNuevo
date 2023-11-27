<?php
/* Una variable ACUMULADORA se utiliza para sumar 
o acumular valores en cada iteración de un bucle*/
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}
echo "La suma de los primeros 10 números es: " . $suma;
// Salida: La suma de los primeros 10 números es: 55