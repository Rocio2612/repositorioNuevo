<?php
/* Realizar la multiplicación de dos números enteros A y B 
mediante sumas sucesivas, hacer tres algoritmos con cada 
estructura repetitiva. */

// Definimos dos números enteros para multiplicar
// BUCLE FOR
/* $numeroA = readline("ingrese un numero: ");
$numeroB = readline("ingrese un numero: ");
// Inicializamos la variable resultado en 0
$resultado = 0;
// Utilizamos un bucle for para realizar sumas sucesivas
for ($i = 0; $i < $numeroB; $i++) {
    $resultado += $numeroA;
}
// Mostramos el resultado
echo "El resultado de la multiplicación de $numeroA por $numeroB es: $resultado"; */
//---------------------------------------------
//BUCLE WHILE
$numeroA = readline("ingrese un numero: "); // 2
$numeroB = readline("ingrese un numero: "); //5
$resultado=0;
while ($numeroB > 0) { // 5>0, 4>0, 3>0, 2>0, 1>0
    $resultado+=$numeroA; // 0+2, 2+2, 4+2, 6+2, 8+2, 10
    $numeroB--; //5-1, 4-1, 3-1, 2-1, 1-1
}echo "El resultado de la multiplicación de $numeroA por $numeroB es: $resultado"; 
//--------------------------------------------- */
//BUCLE DO-WHILE
 /* $numeroA = readline("ingrese un numero:  "); // 2
$numeroB = readline("ingrese un numero: "); //5
$resultado=0;
do {
    $resultado+=$numeroA;
    $numeroB--;
} while ($numeroB>0);
echo "El resultado de la multiplicación de $numeroA por $numeroB es: $resultado";  */
